<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\About;
use App\Models\Event;
use App\Models\Artikel;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $about = About::first();
        $events = Event::all();
        $newest_event = Event::orderBy('created_at', 'desc')->first();
        $latest_article = Artikel::orderBy('created_at', 'desc')->limit(3)->get();

        return view('pages.home', compact('about', 'events', 'newest_event', 'latest_article'));
    }

    public function profile(Request $request)
    {
        return view('pages.profile');
    }

    public function events(Request $request)
    {
        $events = Event::all();

        return view('pages.event', compact('events'));
    }

    public function oig(Request $request)
    {
        return view('pages.oig');
    }

    public function gallery(Request $request)
    {
        return view('pages.gallery');
    }
}
