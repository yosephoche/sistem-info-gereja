<?php

namespace App\Http\Controllers\Api;

use Orion\Http\Controllers\Controller;
use Orion\Concerns\DisableAuthorization;
use Illuminate\Http\Request;

use App\Models\OrganisasiWilayah;

class OrganisasiWilayahController extends Controller
{
    use DisableAuthorization;
    
    protected $model = OrganisasiWilayah::class;

    protected function alwaysIncludes() : array
    {
        return ['pengurus'];
    }
}
