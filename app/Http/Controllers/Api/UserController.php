<?php

namespace App\Http\Controllers\Api;

use Illuminate\Support\Facades\Config;
use Orion\Http\Controllers\Controller;
use Orion\Concerns\DisableAuthorization;

use Orion\Http\Requests\Request;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

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

    protected function searchableBy() : array
    {
        return ['email', 'profile.nama'];
    }

    protected function alwaysIncludes() : array
    {
        return ['profile', 'profile.jemaat', 'profile.jemaat.klasis', 'profile.jemaat.klasis.wilayah', 'artikel'];
    }

    protected function buildIndexFetchQuery(Request $request, array $requestedRelations): Builder
    {
        $query = parent::buildIndexFetchQuery($request, $requestedRelations);

        // return list of user that have profile
        $query->whereHas('profile');

        return $query;
    }

    public function performStore(Request $request, Model $entity, array $attributes): void
    {

        $attributes['password'] = Hash::make(Config::get('constants.default.PASSWORD'));
        $entity->fill($attributes);

        $jemaat = Jemaat::with('klasis')->where('id', $request->jemaat_id)->first();
        $klasis = $jemaat->klasis;

        $path_surat_baptis = '';
        $path_surat_sidi = '';
        $doc_nikah_gr = '';
        $doc_nikah_bs = '';

        if ($request->hasFile('dokumen_nikah_gereja')) {
            $doc_nikah_gr = $request->surat_sidi->hashName();
            $path = 'dokumen/nikah/';
            $request->dokumen_nikah_gereja->store($path, 'public');
        }

        if ($request->hasFile('dokumen_nikah_bs')) {
            $doc_nikah_bs = $request->surat_sidi->hashName();
            $path = 'dokumen/nikah/';
            $request->dokumen_nikah_bs->store($path, 'public');
        }

        if ($request->hasFile('surat_baptis')) {
            $path = 'dokumen/'.$entity->name;
            $request->surat_baptis->store($path, 'public');
            $fullPathUrl = $path.'/'.$request->surat_baptis->hashName();
            $path_surat_baptis = $fullPathUrl;
        }

        if ($request->hasFile('surat_sidi')) {
            $path = 'dokumen/'.$entity->name;
            $request->surat_sidi->store($path, 'public');
            $fullPathUrl = $path.'/'.$request->surat_sidi->hashName();
            $path_surat_sidi = $fullPathUrl;
        }

        if ($entity->save()) {
            $profile = new UserProfile();
            $profile->user_id = $entity->id;
            $profile->nama = $entity->name;
            $profile->jenis_kelamin = $request->jenis_kelamin;
            $profile->alamat = $request->alamat;
            $profile->jemaat_id = $request->jemaat_id;
            $profile->pekerjaan_id = $request->pekerjaan_id;
            $profile->klasis_id = $klasis->id;
            $profile->wilayah_id = $klasis->wilayah_id;
            $profile->tanggal_lahir = Carbon::parse($request->tanggal_lahir)->format('Y-m-d H:i:s');
            $profile->path_surat_baptis = $path_surat_baptis;
            $profile->path_surat_sidi = $path_surat_sidi;
            $profile->is_baptis = $path_surat_baptis == '' ? false : true;
            $profile->is_sidi = $path_surat_sidi == '' ? false : true;
            $profile->status_perkawinan = $request->status_perkawinan;
            $profile->pendidikan_id = $request->pendidikan_id;
            $profile->dokumen_nikah_gereja = $doc_nikah_gr;
            $profile->dokumen_nikah_bs = $doc_nikah_bs;

            $profile->save();
        }

    }

    public function performUpdate(Request $request, Model $entity, array $attributes): void
    {
        $entity->fill($attributes);

        $jemaat = Jemaat::with('klasis')->where('id', $request->jemaat_id)->first();
        $klasis = $jemaat->klasis;

        $path_surat_baptis = '';
        $path_surat_sidi = '';
        $doc_nikah_gr = '';
        $doc_nikah_bs = '';

        if ($request->hasFile('surat_baptis')) {
            $path = 'dokumen/'.$entity->name;
            $request->surat_baptis->store($path, 'public');
            $fullPathUrl = $path.'/'.$request->surat_baptis->hashName();
            $path_surat_baptis = $fullPathUrl;
        }

        if ($request->hasFile('surat_sidi')) {
            $path = 'dokumen/'.$entity->name;
            $request->surat_sidi->store($path, 'public');
            $fullPathUrl = $path.'/'.$request->surat_sidi->hashName();
            $path_surat_sidi = $fullPathUrl;
        }

        if ($request->hasFile('dokumen_nikah_gereja')) {
            $doc_nikah_gr = $request->surat_sidi->hashName();
            $path = 'dokumen/nikah/';
            $request->dokumen_nikah_gereja->store($path, 'public');
        }

        if ($request->hasFile('dokumen_nikah_bs')) {
            $doc_nikah_bs = $request->surat_sidi->hashName();
            $path = 'dokumen/nikah/';
            $request->dokumen_nikah_bs->store($path, 'public');
        }

        if ($entity->save()) {
            $profile = new UserProfile();
            $profile->user_id = $entity->id;
            $profile->nama = $entity->name;
            $profile->jenis_kelamin = $request->jenis_kelamin;
            $profile->alamat = $request->alamat;
            $profile->jemaat_id = $request->jemaat_id;
            $profile->klasis_id = $klasis->id;
            $profile->wilayah_id = $klasis->wilayah_id;
            $profile->pekerjaan_id = $request->pekerjaan_id;
            $profile->tanggal_lahir = Carbon::parse($request->tanggal_lahir)->format('Y-m-d H:i:s');
            $profile->path_surat_baptis = $path_surat_baptis;
            $profile->path_surat_sidi = $path_surat_sidi;
            $profile->is_baptis = $path_surat_baptis == '' ? false : true;
            $profile->is_sidi = $path_surat_sidi == '' ? false : true;
            $profile->status_perkawinan = $request->status_perkawinan;
            $profile->pendidikan_id = $request->pendidikan_id;
            $profile->dokumen_nikah_gereja = $doc_nikah_gr;
            $profile->dokumen_nikah_bs = $doc_nikah_bs;

            $profile->save();
        }
    }
}
