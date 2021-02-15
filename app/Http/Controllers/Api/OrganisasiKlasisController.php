<?php

namespace App\Http\Controllers\Api;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;
use Orion\Http\Controllers\Controller;
use Orion\Concerns\DisableAuthorization;
use Illuminate\Http\Request;

use App\Models\OrganisasiKlasis;

class OrganisasiKlasisController extends Controller
{
    use DisableAuthorization;

    protected $model = OrganisasiKlasis::class;

    protected function alwaysIncludes() : array
    {
        return ['pengurus', 'pengurus.user', 'pengurus.user.profile'];
    }

    protected function buildIndexFetchQuery(Request $request, array $requestedRelations): Builder
    {
        $query = parent::buildIndexFetchQuery($request, $requestedRelations);

        $query->where('klasis_id', Auth::user()->profile->klasis_id);

        if ($request->exists('sortBy')) {
            $queryString = Str::of($request->sortBy)->explode('|');

            $query->orderBy($queryString[0], $queryString[1]);
        };

        return $query;
    }
}
