<?php

namespace App\Http\Controllers\Api;

// use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Orion\Http\Controllers\Controller;
use Orion\Concerns\DisableAuthorization;

use App\Models\Event;

class EventController extends Controller
{
    use DisableAuthorization;
    /**
     * Fully-qualified model class name
     */

    protected $model = Event::class;
}
