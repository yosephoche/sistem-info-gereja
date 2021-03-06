<?php

namespace App\Http\Controllers\Api;

use Orion\Http\Controllers\Controller;
use Orion\Concerns\DisableAuthorization;
use Illuminate\Http\Request;

use App\Models\Pendeta;

class PendetaController extends Controller
{
    use DisableAuthorization;
    
    protected $model = Pendeta::class;
}
