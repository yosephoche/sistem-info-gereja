<?php

namespace App\Http\Controllers\Api;

use Orion\Http\Controllers\Controller;
use Orion\Concerns\DisableAuthorization;
use Illuminate\Http\Request;

use App\Models\OrganisasiKlasis;

class OrganisasiKlasisController extends Controller
{
    use DisableAuthorization;

    protected $model = OrganisasiKlasis::class;

    protected function alwaysIncludes() : array
    {
        return ['pengurus', 'pengurus.user', 'pengurus.user.profile'];
    }
}
