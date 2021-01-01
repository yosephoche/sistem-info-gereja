<?php

namespace App\Http\Controllers\Api;

use Orion\Http\Controllers\Controller;
use Orion\Concerns\DisableAuthorization;
use Illuminate\Http\Request;

use App\Models\Klasis;

class KlasisController extends Controller
{
    use DisableAuthorization;
    
    protected $model = Klasis::class;

    /**
    * Retrieves currently authenticated user based on the guard.
    *
    * @return \Illuminate\Contracts\Auth\Authenticatable|null
    */
    public function resolveUser()
    {
        return Auth::guard('api')->user();
    }
}
