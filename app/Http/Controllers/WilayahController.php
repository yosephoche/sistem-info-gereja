<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Orion\Http\Controllers\Controller;
use Orion\Concerns\DisableAuthorization;


class WilayahController extends Controller
{
    use DisableAuthorization;
    /**
     * Fully-qualified model class name
     */

     protected $model = Wilayah::class;
}
