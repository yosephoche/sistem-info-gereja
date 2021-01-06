<?php

namespace App\Http\Controllers\Api;

use Orion\Http\Controllers\Controller;
use Orion\Http\Controllers\RelationController;
use Orion\Concerns\DisableAuthorization;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

use App\Models\User;
use App\Models\UserProfile;

class UserController extends Controller
{
    use DisableAuthorization;

    protected $model = User::class;

    // protected $relation = 'profile';

     /**
     * The list of attributes to select from db
     */
    protected $attributes = ['name', 'email', 'password'];

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

    public function performStore(Request $request, Model $user, array $attributes): void
    {
        $attributes['password'] = Hash::make($request->password);
        $user->fill($attributes);
        $user->save();
        
        if ($user->save()) {
            $profile = UserProfile::create([
                'user_id' => $user->id,
                'nama' => $user->name,
                'jenis_kelamin' => $request->jenis_kelamin,
                'alamat' => $request->alamat,
                'is_baptis' => $request->is_baptis,
                'is_sidi' => $request->is_sidi
            ]);
        }
        
    }
}
