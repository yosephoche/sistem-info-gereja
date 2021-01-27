<?php

namespace App\Http\Controllers\Api;

// use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Orion\Http\Controllers\Controller;
use Orion\Concerns\DisableAuthorization;
use Illuminate\Database\Eloquent\Builder;

use App\Models\Event;
use Auth;

class EventController extends Controller
{
    use DisableAuthorization;
    /**
     * Fully-qualified model class name
     */

    protected $model = Event::class;

    // public function performStore(Request $request, Model $event, array $attributes): void
    // {
    //     $attributes['password'] = Hash::make($request->password);
    //     $attributes['created_by'] = Auth::user();
        
    //     $event->fill($attributes);
    //     $event->save();
        
    // }

    // public function performUpdate(Request $request, Model $event, array $attributes): void
    // {
    //     $attributes['password'] = Hash::make($request->password);
    //     $user->fill($attributes);
    //     $user->save();

    //     $jemaat = Jemaat::with('klasis')->where('id', $request->jemaat_id)->first();
    //     $klasis = $jemaat->klasis;
        
    //     if ($user->save()) {
    //         $profile = UserProfile::create([
    //             'user_id' => $user->id,
    //             'nama' => $user->name,
    //             'jenis_kelamin' => $request->jenis_kelamin,
    //             'alamat' => $request->alamat,
    //             'is_baptis' => $request->is_baptis,
    //             'is_sidi' => $request->is_sidi,
    //             'jemaat_id' => $request->jemaat_id,
    //             'klasis_id' => $klasis->id,
    //             'wilayah_id' => $klasis->wilayah_id,
    //             'tanggal_lahir' => Carbon::parse($request->tanggal_lahir)->format('Y-m-d H:i:s')
    //         ]);
    //     }
    // }
}
