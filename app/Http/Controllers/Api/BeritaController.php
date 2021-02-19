<?php

namespace App\Http\Controllers\Api;

use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Orion\Http\Controllers\Controller;
use Orion\Concerns\DisableAuthorization;
use Illuminate\Http\Request;

use App\Models\Berita;

class BeritaController extends Controller
{
    use DisableAuthorization;

    protected $model = Berita::class;

    protected function runIndexFetchQuery(Request $request, Builder $query, int $paginationLimit): LengthAwarePaginator
    {
        return $query->paginate($paginationLimit);
    }

    protected function buildIndexFetchQuery(Request $request, array $requestedRelations): Builder
    {
        $query = parent::buildIndexFetchQuery($request, $requestedRelations);

        $query->where('author', Auth::user()->id);

        if ($request->exists('sortBy')) {
            $queryString = Str::of($request->sortBy)->explode('|');

            $query->orderBy($queryString[0], $queryString[1]);
        };

        return $query;
    }

    public function performStore(Request $request, Model $berita, array $attributes): void
    {
        if ($request->hasFile('image')) {
            $extension = $request->image->extension();
            $request->image->store('galeri', 'public');
            $attributes['image'] = $request->image->hashName();
        }

        $user = Auth::user();
        $attributes['author'] = $user->id;

        $berita->fill($attributes);
        $berita->save();
    }

    public function performUpdate(Request $request, Model $berita, array $attributes): void
    {
        if ($request->hasFile('image')) {
            $extension = $request->image->extension();
            $request->image->store('galeri', 'public');
            $attributes['image'] = $request->image->hashName();
        }

        $user = Auth::user();
        $attributes['author'] = $user->id;

        $berita->fill($attributes);
        $berita->save();
    }
}
