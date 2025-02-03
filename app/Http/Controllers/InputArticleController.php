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
        $request->validate(
            [
                'article_slug' => 'required|unique:bcm_articles|regex:/^\S*$/u',
                'article_title' => 'required',
                'article_date' => 'required',
                'article_desc' => 'required',
                'article_image' => 'required',
            ],
            [
                'article_slug.required' => 'Data yang dimasukkan tidak boleh kosong!',
                'article_slug.unique' => 'Data yang dimasukkan harus unik!',
                'article_slug.regex' => 'Data yang dimasukkan tidak boleh mengandung spasi!',
                'article_title.required' => 'Data yang dimasukkan tidak boleh kosong!',
                'article_date.required' => 'Data yang dimasukkan tidak boleh kosong!',
                'article_desc.required' => 'Data yang dimasukkan tidak boleh kosong!',
                'article_image.required' => 'Data yang dimasukkan tidak boleh kosong!',
            ]
        );

        $request->article_image->move(storage_path('app\public\article-photo'), $request->article_image->getClientOriginalName());
        $articleform = new Article();
        $articleform->article_slug = $request->article_slug;
        $articleform->article_title = $request->article_title;
        $articleform->article_date = $request->article_date;
        $articleform->article_desc = $request->article_desc;
        $articleform->article_image = 'article-photo/' . $request->article_image->getClientOriginalName();

        $data = Article::select('id')->orderby('sort_order', 'desc')->first();
        $dataFinn = Article::where('id', $data->id)->select('sort_order')->first();
        $latestSort = $dataFinn->sort_order;
        $articleform->sort_order = $latestSort + 1;
        $articleform->save();

        return redirect()
            ->route('inputarticle.index')
            ->with('message', 'Formulir Berhasil di Simpan');
    }
}
