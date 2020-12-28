<?php

namespace App\Http\Controllers\Api;

use Orion\Http\Controllers\Controller;
use Orion\Http\Controllers\RelationController;
use Orion\Concerns\DisableAuthorization;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;

use App\Models\User;

class UserController extends Controller
{
    use DisableAuthorization;

    protected $model = User::class;

    // protected $relation = 'profile';

    protected function alwaysIncludes() : array
    {
        return ['profile'];
    }

    protected function buildIndexFetchQuery(Request $request, array $requestedRelations): Builder
    {
        $query = parent::buildIndexFetchQuery($request, $requestedRelations);

        // $query->whereNotNull('profile');

        // return list of user that have profile
        $query->has('profile');

        return $query;
    }
}
