<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\ServiceSubType;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function getArticleData()
    {
        $article = Article::all();
        $title = 'Article Page';

        return view('article', compact(
            'article', 'title'
        ));
    }

    public function getArticleDetail($slug)
    {
        $data = Article::where('article_slug', $slug)->first();
        $slug = $data->article_slug;
        $title = 'Detail Article Page';

        return view('detailarticle', compact(
            'slug', 'title', 'data'
        ));
    }

    public function getDetailTag($slug)
    {
        $data = ServiceSubType::where('service_subtype_slug', $slug)->first();
        $title = 'Detail Tag Article Page';

        return view('detailarticletag', compact('title', 'data'));
    }
}
