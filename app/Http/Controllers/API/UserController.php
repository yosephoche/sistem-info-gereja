<?php

namespace App\Http\Controllers\Api;

use Orion\Http\Controllers\Controller;
use Orion\Http\Controllers\RelationController;
use Orion\Concerns\DisableAuthorization;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\UserProfile;
use App\Models\Jemaat;

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
        return ['profile', 'profile.jemaat', 'profile.jemaat.klasis', 'profile.jemaat.klasis.wilayah'];
    }

    protected function buildIndexFetchQuery(Request $request, array $requestedRelations): Builder
    {
        $user = Auth::user();
        $jemaat = $user->profile->jemaat;
        $klasis = $jemaat->klasis;
        $wilayah = $klasis->wilayah;
        // dd($klasis->wilayah);
        $query = parent::buildIndexFetchQuery($request, $requestedRelations);

        // return list of user that have profile
        $query->whereHas('profile');
        $query->whereHas('profile.jemaat', function($q) {
            $q->where('id', 2);
        });

        return $query;
    }

    public function performStore(Request $request, Model $user, array $attributes): void
    {
        $attributes['password'] = Hash::make($request->password);
        $user->fill($attributes);
        $user->save();

        $jemaat = Jemaat::with('klasis')->where('id', $request->jemaat_id)->first();
        $klasis = $jemaat->klasis;
        
        if ($user->save()) {
            $profile = UserProfile::create([
                'user_id' => $user->id,
                'nama' => $user->name,
                'jenis_kelamin' => $request->jenis_kelamin,
                'alamat' => $request->alamat,
                'is_baptis' => $request->is_baptis,
                'is_sidi' => $request->is_sidi,
                'jemaat_id' => $request->jemaat_id,
                'klasis_id' => $klasis->id,
                'wilayah_id' => $klasis->wilayah_id
            ]);
        }
        
    }
}
