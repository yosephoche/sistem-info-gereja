<?php

namespace App\Http\Controllers\Api;

use Orion\Http\Controllers\Controller;
use Orion\Concerns\DisableAuthorization;
use Illuminate\Http\Request;

use App\Models\UserProfile;
use Auth;

class UserProfileController extends Controller
{
    use DisableAuthorization;
    
    /**
     * Fully-qualified model class name
     */
    protected $model = UserProfile::class;
}
