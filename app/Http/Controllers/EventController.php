<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\EventCategory;
use App\Models\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Artesaos\SEOTools\Facades\{SEOMeta, OpenGraph, TwitterCard, JsonLd};
use Artesaos\SEOTools\Facades\SEOTools;


class EventController extends Controller
{
    public function index()
    {
        $this->eventSEO();
        return view('event.all');
    }

    public function show(string $slug, Request $r)
    {
        //$event = Event::with('user', 'category')->findOrFail($slug);
        $event = Event::where('slug', $slug)->with('user', 'category')->firstOrFail();
        $this->singleEventSEO($event);
        // $event = Event::paginate(4);
        $ez = [];
        foreach ($event->category as $category) {
            $ez[] = $category->pivot->event_category_id;
            SEOMeta::addMeta('article:section', $category->pivot->event_category_id, 'property');
        }
        $event->visit()->hourlyIntervals()->withIp();
        $categorys = EventCategory::whereIn('id', $ez)->first()->get();

        if (RateLimiter::remaining($r->ip() . $event->id, $perMinute = 1)) {
            RateLimiter::hit($r->ip() . $event->id);
            $event->views++;
            $event->save();
        }

        return view('event.show', compact('event', 'categorys'));
    }

    public function category(string $slug)
    {
        $category = EventCategory::with('events')->findOrFail($slug);
        return view('event.category', compact('category'));
    }

    public function create()
    {
        SEOTools::setTitle('Create Event');
        return view('event.create');
    }

    public function myticket()
    {
        SEOTools::setTitle('My Ticket');
        $tickets = Ticket::with('event', 'user', 'profile')
            ->orderBy('created_at', 'desc')
            ->where('user_id', auth()->id())
            ->get();
        return view('event.myticket', compact('tickets'));
    }

    public function eventSEO()
    {
        SEOTools::setTitle('Events');
        SEOTools::opengraph()->addProperty('type', 'event');
        $categorys = EventCategory::select('title')->implode('title', ',');
        $events = Event::select('title')->limit(15)->implode('title', ',');
        SEOMeta::addKeyword([$categorys, $events]);
    }

    public function singleEventSEO($event)
    {
        SEOTools::setTitle($event->title);
        SEOTools::opengraph()->addProperty('type', 'event');
        // SEOTools::opengraph()->addImage($event->getMedia('event')->first() ? $event->getMedia('event')->first()->getUrl() : config('app.no_file'));
        SEOMeta::addMeta('article:published_time', $event->created_at->toW3CString(), 'property');
        SEOTools::opengraph()->setDescription($event->body);
    }
}
