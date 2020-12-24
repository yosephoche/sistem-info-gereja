<?php

namespace App\Http\Controllers\Api;

use Orion\Http\Controllers\Controller;
use Orion\Concerns\DisableAuthorization;

use Illuminate\Http\Request;

use App\Models\AnggotaKeluarga;

class AnggotaKeluargaController extends Controller
{
    protected $model = AnggotaKeluarga::class;
}
