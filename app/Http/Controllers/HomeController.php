<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Event;
use App\Models\EventCategory;
use App\Models\TeamMember;
use App\Settings\AboutUsSettings;
use App\Settings\HomeSettings;
use Artesaos\SEOTools\Facades\{SEOMeta, OpenGraph, TwitterCard, JsonLd};
use Artesaos\SEOTools\Facades\SEOTools;

class HomeController extends Controller
{
    public function index(HomeSettings $setting)
    {
        $this->homeSEO();

        $events = Event::with(['user:id,name,username', 'category','media'])->limit(4)->get();
        $categorys = EventCategory::limit(15)->get();
        return view('home', compact('events', 'categorys', 'setting'));
    }

    public function aboutus(AboutUsSettings $s)
    {
        $this->aboutusSEO();

        return view('aboutus', compact('s'));
    }

    public function contact()
    {
        return view('contact');
    }

    public function blog()
    {
        $this->blogSEO();
        $blogs = Blog::with('user:id,username,name', 'media')
            ->orderByDesc('id')
            ->fastPaginate(12);
        return view('blog.blog', compact('blogs'));
    }


    public function homeSEO()
    {
        SEOTools::setTitle('Home');
    }

    public function aboutusSEO()
    {
        SEOTools::setTitle('About Us');
        SEOTools::opengraph()->addProperty('type', 'aboutus');
        $images = TeamMember::with('media')->get();
        foreach ($images as $image) {
            SEOTools::opengraph()->addImage($image->getMedia('team')->first() ? $image->getMedia('team')->first()->getUrl() : config('app.no_file'));
        }
    }

    public function blogSEO()
    {
        SEOTools::setTitle('Blog');
        SEOTools::opengraph()->addProperty('type', 'blog');
    }

}
