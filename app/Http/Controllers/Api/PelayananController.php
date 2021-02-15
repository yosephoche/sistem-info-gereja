<?php

namespace App\Http\Controllers\Api;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Orion\Http\Controllers\Controller;
use Orion\Concerns\DisableAuthorization;
use Illuminate\Http\Request;

use App\Models\Pelayanan;

class PelayananController extends Controller
{
    use DisableAuthorization;

    protected $model = Pelayanan::class;

    protected function alwaysIncludes() : array
    {
        return ['pendeta', 'jemaat'];
    }

    protected function buildIndexFetchQuery(Request $request, array $requestedRelations): Builder
    {
        $query = parent::buildIndexFetchQuery($request, $requestedRelations);

        $query->where('jemaat_id', Auth::user()->profile->jemaat_id);

        if ($request->exists('sortBy')) {
            $queryString = Str::of($request->sortBy)->explode('|');

            $query->orderBy($queryString[0], $queryString[1]);
        };

        return $query;
    }
}
