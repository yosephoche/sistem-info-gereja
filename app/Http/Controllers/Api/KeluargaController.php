<?php

namespace App\Http\Controllers\Api;

use Orion\Http\Controllers\Controller;
use Orion\Concerns\DisableAuthorization;
use Illuminate\Http\Request;

use App\Models\Keluarga;

class KeluargaController extends Controller
{
    use DisableAuthorization;
    protected $model = Keluarga::class;

    protected function alwaysIncludes() : array
    {
        return ['profile_kepala_keluarga', 'anggota_keluarga'];
    }
}
