<?php

namespace App\Http\Controllers\Api;

use Orion\Http\Controllers\Controller;
use Orion\Concerns\DisableAuthorization;

use Illuminate\Http\Request;

use App\Models\Majelis;

class MajelisController extends Controller
{
    use DisableAuthorization;
    protected $model = Majelis::class;

    protected function alwaysIncludes() : array
    {
        return ['profile', 'periode'];
    }
}
