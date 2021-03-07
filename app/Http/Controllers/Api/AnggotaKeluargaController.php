<?php

namespace App\Http\Controllers\Api;

use Orion\Http\Controllers\Controller;
use Orion\Concerns\DisableAuthorization;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Http\Request;

use App\Models\AnggotaKeluarga;

class AnggotaKeluargaController extends Controller
{
    use DisableAuthorization;

    protected $model = AnggotaKeluarga::class;

    protected function alwaysIncludes() : array
    {
        return ['profile', 'keluarga', 'profile.pekerjaan'];
    }

    protected function buildIndexFetchQuery(Request $request, array $requestedRelations): Builder
    {
        $query = parent::buildIndexFetchQuery($request, $requestedRelations);

        if ($request->exists('keluarga')) {
            $query->where('keluarga_id', $request->keluarga);
        };

        return $query;
    }
}
