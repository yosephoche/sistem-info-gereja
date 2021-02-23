<?php

namespace App\Http\Controllers\Api;

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

    public function performStore(Request $request, Model $entity, array $attributes): void
    {
        $jemaat_id = Auth::user()->jemaat_id;
        $attributes['jemaat_id'] = $jemaat_id;

        $entity->fill($attributes);
        $entity->save();
    }

    public function performUpdate(Request $request, Model $entity, array $attributes): void
    {
        $jemaat_id = Auth::user()->jemaat_id;
        $attributes['jemaat_id'] = $jemaat_id;

        $entity->fill($attributes);
        $entity->save();
    }
}
