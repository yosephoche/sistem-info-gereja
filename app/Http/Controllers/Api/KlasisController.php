<?php

namespace App\Http\Controllers\Api;

use App\Models\UserRole;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Orion\Http\Controllers\Controller;
use Orion\Concerns\DisableAuthorization;
use Illuminate\Http\Request;

use App\Models\Klasis;

class KlasisController extends Controller
{
    use DisableAuthorization;

    protected $model = Klasis::class;

    protected function buildIndexFetchQuery(Request $request, array $requestedRelations): Builder
    {
        $query = parent::buildIndexFetchQuery($request, $requestedRelations);

        $user = Auth::user();

        $userRole = UserRole::where('user_id', $user->id)->first();

        if ($userRole->role_id == 1) {
            return $query;
        } else {
            $query->where('wilayah_id', Auth::user()->profile->wilayah_id);

            if ($request->exists('sortBy')) {
                $queryString = Str::of($request->sortBy)->explode('|');

                $query->orderBy($queryString[0], $queryString[1]);
            };

        }

        return $query;
    }

}
