<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class InputArticleController extends Controller
{
    public function index()
    {
        $title = 'halo';
        $article = Article::all();
        return view('admin.showarticle', compact('title', 'article'));
    }

    public function create()
    {
        $title = 'haloo';
        return view('admin.inputarticle', compact('title'));
    }

    public function store(Request $request)
    {
        $request->article_image->move(storage_path('app\public\article-photo'), $request->article_image->getClientOriginalName());
        $articleform = new Article();
        $articleform->article_slug = $request->article_slug;
        $articleform->article_title = $request->article_title;
        $articleform->article_date = $request->article_date;
        $articleform->article_desc = $request->article_desc;
        $articleform->article_image = 'article-photo/' . $request->article_image->getClientOriginalName();

        $articleform->save();

        return redirect()
            ->route('inputarticle.index')
            ->with('message', 'Formulir Berhasil di Simpan');
    }
}
