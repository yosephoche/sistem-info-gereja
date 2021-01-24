<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Event;

class EventController extends Controller
{
    public function index(Request $request)
    {
        $events = Event::all();

        return view('pages.events.index', compact('events'));
    }

    public function detail($id)
    {
        $event = Event::find($id);
        return view('pages.events.detail', compact('event'));
    }
}
