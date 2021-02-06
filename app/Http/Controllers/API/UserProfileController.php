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

use App\Models\UserProfile;
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
        return ['user', 'jemaat', 'user.artikel'];
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
        // dd($query);
        
        if ($request->exists('keyword')) {
            $keyword = $request->keyword;
            $query->search(['nama', 'alamat', 'user.email', 'jemaat.name'], $keyword);
            // $query->whereLike(['nama'], $keyword);
            // $query->orWhere('nama', 'like', '%z%');
        }

        if ($request->exists('sortBy')) {
            $queryString = Str::of($request->sortBy)->explode('|');

            $query->orderBy($queryString[0], $queryString[1]);
        };

        // dd($query->toSql(), $query->getBindings());

        return $query;
    }
    
}
