<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function getArticleData()
    {
        $article = Article::all();
        $title = 'Artikel Page';

        return view('artikel', compact(
            'article', 'title'
        ));
    }

    public function getArtikelDetail($slug)
    {
        $data = Article::where('article_slug', $slug)->first();
        $slug = $data->article_slug;
        $title = 'Detail Artikel Page';

        return view('detailartikel', compact(
            'slug', 'title', 'data'
        ));
    }
}
