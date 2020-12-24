<?php

namespace App\Http\Controllers\Api;

use Orion\Http\Controllers\Controller;
use Orion\Concerns\DisableAuthorization;

use Illuminate\Http\Request;


class WilayahController extends Controller
{
    use DisableAuthorization;
    /**
     * Fully-qualified model class name
     */

    protected $model = Wilayah::class;
}
