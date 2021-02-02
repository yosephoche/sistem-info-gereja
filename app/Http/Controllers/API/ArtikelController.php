<?php

namespace App\Http\Controllers\Api;

use Orion\Http\Controllers\Controller;
use Orion\Concerns\DisableAuthorization;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Contracts\Pagination\LengthAwarePaginator;

use App\Models\Artikel;

class ArtikelController extends Controller
{
    use DisableAuthorization;

    protected $model = Artikel::class;

    protected $relation = ['user', 'kategori'];

    protected function alwaysIncludes() : array
    {
        return ['user', 'kategori'];
    }

    protected function filterableBy() : array
    {
        // "title", "content", "image", "category", "author". "tag", "is_published"
        return ['id', 'title', 'category', 'author', 'is_published', 'created_at'];
    }

    protected function searchableBy() : array
    {
        return ['title', 'category', 'user.name'];
    }

    protected function sortableBy() : array
    {
        return ['id', 'title', 'created_at'];
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

    public function performStore(Request $request, Model $artikel, array $attributes): void
    {
        if ($request->hasFile('image')) {
            $extension = $request->image->extension();
            $request->image->store('galeri', 'public');
        }

        $attributes['image'] = $request->image->hashName();
        
        $artikel->fill($attributes);
        $artikel->save();
    }

}
