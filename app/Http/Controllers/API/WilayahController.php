<?php

namespace App\Http\Controllers\Api;

use Orion\Http\Controllers\Controller;
use Orion\Concerns\DisableAuthorization;

use Illuminate\Http\Request;
use App\Models\Wilayah;

class WilayahController extends Controller
{
    use DisableAuthorization;
    /**
     * Fully-qualified model class name
     */

    protected $model = Wilayah::class;

    protected function searchableBy() : array
    {
        return ['name'];
    }

    protected function filterableBy() : array
    {
        return ['name', 'created_at'];
    }
}
