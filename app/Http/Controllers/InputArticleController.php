<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\ArticleSubtype as PivotArticleSubJenisLayanan;
use App\Models\ServiceSubType as SubJenisLayanan;
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
        $title = 'Input Article';
        $data = SubJenisLayanan::all();
        return view('admin.inputarticle', compact('title', 'data'));
    }

    public function store(Request $request)
    {
        $request->validate(
            [
                'article_slug' => 'required|unique:bcm_articles|regex:/^\S*$/u',
                'article_title' => 'required',
                'article_date' => 'required',
                'article_desc' => 'required',
                'article_image' => 'required|image|mimes:jpeg,png,jpg',
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

        $request->article_image->move(storage_path('app/public/article-photo'), $request->article_image->getClientOriginalName());
        $articleform = new Article();
        $articleform->article_slug = $request->article_slug;
        $articleform->article_title = $request->article_title;
        $articleform->article_date = $request->article_date;
        $articleform->article_desc = $request->article_desc;
        $articleform->article_image = 'article-photo/' . $request->article_image->getClientOriginalName();

        if (Article::all() == null) {
            $data = Article::select('id')->orderby('sort_order', 'desc')->first();
            $dataFinn = Article::where('id', $data->id)->select('sort_order')->first();
            $latestSort = $dataFinn->sort_order;
            $articleform->sort_order = $latestSort + 1;
        } else {
            $articleform->sort_order = 1;
        }
        $articleform->save();

        $articlePivot = new PivotArticleSubJenisLayanan();
        $articlePivot->bcm_article_id = $articleform->id;
        $articlePivot->bcm_service_subtype_id = $request->subtipelayananId;
        $articlePivot->save();

        return redirect()
            ->route('inputarticle.index')
            ->with('success', 'Artikel Berhasil di Simpan');
    }
}
