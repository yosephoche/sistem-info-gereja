<?php

namespace App\Http\Controllers\Api;

use Illuminate\Database\Eloquent\Model;
use Orion\Http\Controllers\Controller;
use Orion\Http\Controllers\RelationController;
use Orion\Concerns\DisableAuthorization;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

use App\Models\UserProfile;
use App\Models\UserRole;
use Auth;

class UserProfileController extends Controller
{
    use DisableAuthorization;

    /**
     * Fully-qualified model class name
     */
    protected $model = UserProfile::class;

    protected $relation = 'user';

    protected function alwaysIncludes() : array
    {
        return ['user', 'jemaat', 'user.user_role', 'user.artikel'];
    }

    protected function filterableBy() : array
    {
        return ['id', 'nama', 'alamat', 'status', 'is_baptis', 'is_sidi', 'created_at'];
    }

    protected function searchableBy() : array
    {
        return ['nama', 'alamat', 'user.email', 'jemaat.name'];
    }

    protected function sortableBy() : array
    {
        return ['id', 'nama', 'created_at'];
    }

    protected function runIndexFetchQuery(Request $request, Builder $query, int $paginationLimit): LengthAwarePaginator
    {
        return $query->paginate($paginationLimit);
    }

    protected function buildIndexFetchQuery(Request $request, array $requestedRelations): Builder
    {
        $query = parent::buildIndexFetchQuery($request, $requestedRelations);

        $user = Auth::user();

        $userRole = UserRole::where('user_id', $user->id)->first();

        if ($request->exists('sortBy')) {
            $queryString = Str::of($request->sortBy)->explode('|');

            $query->orderBy($queryString[0], $queryString[1]);
        };

        // role : 2 => admin, 3 => Pengurus OIG, 4 => Koordinator
        // group : 1 => Wilayah, 2 => Klasis, 3 => Jemaat

        if ($userRole->role_id == 1) {
            if ($request->exists('wilayah')) {
                $query->where('wilayah_id', $request->wilayah);
            };

            if ($request->exists('klasis')) {
                $query->where('klasis_id', $request->klasis);
            };

            if ($request->exists('jemaat')) {
                $query->where('jemaat_id', $request->jemaat);
            };
        } else {
            $group = $userRole->group_id;
            $query->when($group == 1, function($query) use ($user, $request) {
                $query->where('wilayah_id', '=', $user->profile->wilayah_id);
                if ($request->exists('klasis')) {
                    $query->where('klasis_id', $user->profile->klasis);
                };

                if ($request->exists('jemaat')) {
                    $query->where('jemaat_id', $user->profile->jemaat_id);
                };
            });

            $query->when($group == 2, function($query) use ($user, $request){
                $query->where('klasis_id', $user->klasis_id);
                if ($request->exists('jemaat')) {
                    $query->where('jemaat_id', $user->profile->jemaat_id);
                };
            });

            $query->when($group == 3, function($query) use ($user){
                $query->where('jemaat_id', $user->profile->jemaat_id);
            });
        }

        return $query;
    }

    public function update_login_info(Request $request)
    {
        $user = Auth::user();
        $profile = $user->profile;

        if ($request->email) {
            $user->email = $request->email;
        }

        if ($request->name) {
            $user->name = $request->name;
            $profile->nama = $request->name;
        };

        if ($request->password) {
            $user->password = Hash::make($request->password);
        }

        if ($request->hasFile('image')) {
            $extension = $request->image->extension();
            $request->image->store('user', 'public');
            $profile->photo = $request->image->hashName();
        }

        if ($profile->save() && $user->save()) {
            return response()->json([
                'message' => 'Update Success',
                'user' => $user
            ], 200);
        } else {
            return response()->json(['message' => 'Update Fail'], 400);
        }

    }

}
