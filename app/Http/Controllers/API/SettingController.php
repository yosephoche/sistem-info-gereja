<?php

namespace App\Http\Controllers\Api;

use Orion\Http\Controllers\Controller;
use Orion\Concerns\DisableAuthorization;
use Illuminate\Http\Request;

use App\Models\Setting;

class SettingController extends Controller
{
    use DisableAuthorization;
    
    protected $model = Setting::class;
}
