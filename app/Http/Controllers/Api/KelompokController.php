<?php

namespace App\Http\Controllers\Api;

use App\Models\UserRole;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Orion\Http\Controllers\Controller;
use Orion\Concerns\DisableAuthorization;

use App\Models\Kelompok;

class KelompokController extends Controller
{
    use DisableAuthorization;

    protected $model = Kelompok::class;

    protected function alwaysIncludes() : array
    {
        return ['jemaat'];
    }

    protected function buildIndexFetchQuery(Request $request, array $requestedRelations): Builder
    {
        $query = parent::buildIndexFetchQuery($request, $requestedRelations);
        $user = Auth::user();
        $userRole = UserRole::where('user_id', $user->id)->first();

        if ($userRole->role_id == 1) {
            return $query;
        } else {
            $query->where('jemaat_id', $user->profile->jemaat_id);

            if ($request->exists('sortBy')) {
                $queryString = Str::of($request->sortBy)->explode('|');

                $query->orderBy($queryString[0], $queryString[1]);
            };
        }

        return $query;
    }

//    public function performStore(Request $request, Model $entity, array $attributes): void
//    {
//        $admin_profile = Auth::user()->profile;
//        dd($admin_profile->jemmat_id);
//        $attributes['jemaat_id'] = $jemaat_id;
//
//        $entity->fill($attributes);
//        $entity->save();
//    }

//    public function performUpdate(Request $request, Model $entity, array $attributes): void
//    {
//        $jemaat_id = Auth::user()->jemaat_id;
//        $attributes['jemaat_id'] = $jemaat_id;
//
//        $entity->fill($attributes);
//        $entity->save();
//    }
}
