<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Artikel;

class BlogController extends Controller
{
    public function index(Request $request)
    {
        $articles = Artikel::with('kategori', 'user')
            ->where('is_published', true)
            ->paginate(2);

        $latest_article = Artikel::orderBy('created_at', 'desc')->limit(2)->get();

        return view('pages.blog.index', compact('articles', 'latest_article'));
    }

    public function detail($id)
    {
        $article = Artikel::find($id);

        $latest_article = Artikel::orderBy('created_at', 'desc')->limit(2)->get();

        return view('pages.blog.detail', compact('article', 'latest_article'));
    }
}
