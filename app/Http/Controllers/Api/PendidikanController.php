<?php

namespace App\Http\Controllers\Api;

use App\Models\Pendidikan;
use Orion\Http\Controllers\Controller;
use Orion\Concerns\DisableAuthorization;

class PendidikanController extends Controller
{
    use DisableAuthorization;

    protected $model = Pendidikan::class;
}
