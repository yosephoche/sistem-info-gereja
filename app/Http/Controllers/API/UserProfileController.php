<?php

namespace App\Http\Controllers\Api;

use Orion\Http\Controllers\Controller;
use Orion\Http\Controllers\RelationController;
use Orion\Concerns\DisableAuthorization;
use Illuminate\Http\Request;

use App\Models\UserProfile;
use Auth;

class UserProfileController extends RelationController
{
    use DisableAuthorization;
    
    /**
     * Fully-qualified model class name
     */
    protected $model = UserProfile::class;

    protected $relation = 'user';

    protected function filterableBy() : array
    {
        return ['id', 'nama', 'alamat', 'status', 'is_baptis', 'is_sidi', 'created_at'];
    }

    protected function searchableBy() : array
    {
        return ['nama', 'alamat', 'user.email'];
    }

    protected function sortableBy() : array
    {
        return ['id', 'nama', 'created_at'];
    }
}
