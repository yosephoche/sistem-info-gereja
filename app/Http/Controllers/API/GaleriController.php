<?php

namespace App\Http\Controllers\Api;

use Orion\Http\Controllers\Controller;
use Orion\Concerns\DisableAuthorization;
use Illuminate\Http\Request;

use App\Models\Galeri;

class GaleriController extends Controller
{
    use DisableAuthorization;

    protected $model = Galeri::class;
}
