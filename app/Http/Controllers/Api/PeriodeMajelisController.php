<?php

namespace App\Http\Controllers\Api;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Orion\Http\Controllers\Controller;
use Orion\Concerns\DisableAuthorization;

use App\Models\PeriodeMajelis;

class PeriodeMajelisController extends Controller
{
    use DisableAuthorization;

    protected $model = PeriodeMajelis::class;

}
