<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Orion\Http\Controllers\Controller;
use Orion\Concerns\DisableAuthorization;

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
