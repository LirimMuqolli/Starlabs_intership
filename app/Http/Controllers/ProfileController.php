<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Profile;
use App\Models\User;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\SEOTools;


class ProfileController extends Controller
{
    public function show(string $slug)
    {
        $profile = Profile::where('slug', $slug)->firstOrFail();

        // $profile->visit()->hourlyIntervals()->withIp();
        return view('userprofile.single', compact('profile'));
    }

    public function album(Profile $profile)
    {
        $profile->with('albums')->first();
        $profile->visit()->hourlyIntervals()->withIp();

        $album = Album::with('media')->where('profile_id', $profile->id)->get();

        return view('album.album', compact('profile', 'album'));
    }

    public function user(string $name)
    {
        $username = '';

        $check_user = User::where('username', $name)->first();
        $check_user ? $username = 'username' : $username = 'name';

        $user = User::where($username, $name)->with([
            'events' => fn ($q)  => $q->with(['user:id,name,username', 'category'])->orderBy('created_at', 'desc')->take(8),
            'profile' => fn ($q) => $q->with('media')->limit(3)
        ])->firstOrFail();

        $user->visit()->hourlyIntervals()->withIp();

        return view('profile', compact('user'));
    }

    public function create()
    {
        $this->createSEO();
        return view('userprofile.create');
    }

    public function edit(String $slug)
    {
        $this->updateSEO();
        $profile = Profile::with(['media', 'events', 'user'])->where('slug', $slug)->firstOrFail();
        $this->authorize('user_profile', $profile);
        return view('userprofile.edit', compact('profile'));
    }

    public function updateSEO()
    {
        SEOTools::setTitle('Update Profile');
        SEOTools::opengraph()->setUrl(url()->current());
        OpenGraph::addProperty('type', 'website');
        SEOTools::setCanonical(url()->current());
        SEOTools::opengraph()->addProperty('locale', 'en_US');
        SEOTools::opengraph()->addProperty('type', 'website');
    }


    public function createSEO()
    {
        SEOTools::setTitle('Create Organization');
        SEOTools::opengraph()->addProperty('type', 'Organization');
    }

    public function singleProfileSEO($user)
    {
        SEOTools::setTitle($user->username());
        SEOTools::opengraph()->addProperty('type', 'Profile');
        OpenGraph::setTitle($user->username())
            ->setType('profile')
            ->setProfile([
                'username' => $user->username(),
            ]);
    }
}
