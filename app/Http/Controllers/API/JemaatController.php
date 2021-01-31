<?php

namespace App\Http\Controllers\Api;

use Orion\Http\Controllers\Controller;
use Orion\Concerns\DisableAuthorization;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

use App\Models\Jemaat;

class JemaatController extends Controller
{
    use DisableAuthorization;
    
    protected $model = Jemaat::class;

    
    protected function filterableBy() : array
    {
        return ['id', 'name', 'klasis', 'created_at'];
    }

    protected function searchableBy() : array
    {
        return ['name', 'klasis.name'];
    }

    protected function sortableBy() : array
    {
        return ['id', 'name', 'klasis', 'created_at'];
    }

    protected function runIndexFetchQuery(Request $request, Builder $query, int $paginationLimit): LengthAwarePaginator
    {
        return $query->paginate($paginationLimit);
    }

    protected function buildIndexFetchQuery(Request $request, array $requestedRelations): Builder
    {
        $query = parent::buildIndexFetchQuery($request, $requestedRelations);
        
        if ($request->exists('sortBy')) {
            $queryString = Str::of($request->sortBy)->explode('|');

            $query->orderBy($queryString[0], $queryString[1]);
        };
        
        return $query;
    }
}
