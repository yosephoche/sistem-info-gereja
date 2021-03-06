<?php

namespace App\Http\Controllers\Api;

use Orion\Http\Controllers\Controller;
use Orion\Concerns\DisableAuthorization;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

use App\Models\Galeri;

class GaleriController extends Controller
{
    use DisableAuthorization;

    protected $model = Galeri::class;

    public function performStore(Request $request, Model $galeri, array $attributes): void
    {
        if ($request->hasFile('image')) {
            $extension = $request->image->extension();
            $path = 'galeri/' + $request->category;
            $request->image->store($path, 'public');
            $attributes['image'] = $request->image->hashName();
        }
        
        $galeri->fill($attributes);
        $galeri->save();
    }

    public function performUpdate(Request $request, Model $galeri, array $attributes): void
    {
        if ($request->hasFile('image')) {
            $extension = $request->image->extension();
            $path = 'galeri/' + $request->category;
            $request->image->store($path, 'public');
            $attributes['image'] = $request->image->hashName();
        }

        $galeri->fill($attributes);
        $galeri->save();
    }
}
