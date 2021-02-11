<?php

namespace App\Http\Controllers\Api;

use Orion\Http\Controllers\Controller;
use Orion\Concerns\DisableAuthorization;
use Illuminate\Http\Request;

use App\Models\Organisasi;

class OrganisasiController extends Controller
{
    use DisableAuthorization;

    protected $model = Organisasi::class;

    // protected $relation = 'pengurus';

    protected function alwaysIncludes() : array
    {
        return ['pengurus', 'pengurus.user', 'pengurus.user.profile', 'group'];
    }

}
