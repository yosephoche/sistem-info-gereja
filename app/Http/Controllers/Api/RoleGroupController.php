<?php

namespace App\Http\Controllers\Api;

use Orion\Http\Controllers\Controller;
use Orion\Concerns\DisableAuthorization;
use Illuminate\Http\Request;

use App\Models\RoleGroup;

class RoleGroupController extends Controller
{
    use DisableAuthorization;

    protected $model = RoleGroup::class;
}
