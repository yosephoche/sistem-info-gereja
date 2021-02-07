<?php

namespace App\Http\Controllers\Api;

use Orion\Http\Controllers\Controller;
use Orion\Concerns\DisableAuthorization;
use Illuminate\Http\Request;

use App\Models\Pelayanan;

class PelayananController extends Controller
{
    use DisableAuthorization;
    
    protected $model = Pelayanan::class;

    protected function alwaysIncludes() : array
    {
        return ['pendeta', 'jemaat'];
    }
}
