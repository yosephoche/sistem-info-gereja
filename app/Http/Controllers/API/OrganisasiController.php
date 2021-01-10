<?php

namespace App\Http\Controllers;

use Orion\Http\Controllers\Controller;
use Orion\Concerns\DisableAuthorization;
use Illuminate\Http\Request;

use App\Models\Organisasi;

class OrganisasiController extends Controller
{
    use DisableAuthorization;
    
    protected $model = Organisasi::class;

}
