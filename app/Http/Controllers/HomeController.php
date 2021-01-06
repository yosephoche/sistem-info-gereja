<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        return view('pages.home');
    }

    public function profile(Request $request)
    {
        return view('pages.profile');
    }

    public function event(Request $request)
    {
        return view('pages.event');
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
