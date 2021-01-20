<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\About;
use App\Models\Event;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $about = About::first();
        $events = Event::all();

        return view('pages.home', compact('about', 'events'));
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

    public function blog(Request $request)
    {
        return view('pages.blog');
    }
}
