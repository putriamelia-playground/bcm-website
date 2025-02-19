<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\ArticleSubtype as PivotArticleSubtype;
use App\Models\ServiceSubType;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function getArticleData()
    {
        $article = Article::orderBy('sort_order')->get();
        $title = 'Article Page';

        return view('article', compact(
            'article', 'title'
        ));
    }

    public function getArticleDetail($slug)
    {
        $data = Article::where('article_slug', $slug)->with('articletags')->first();
        $slug = $data->article_slug;
        $title = 'Detail Article Page';

        if (isset($data->articletags[0])) {
            if ($data->articletags[0]->service_subtype_slug == 'regulasi') {
                return view('regulations', compact('title'));
            }
        }
        return view('detailarticle', compact(
            'slug', 'title', 'data'
        ));
    }

    public function getDetailTag($slug)
    {
        $data = PivotArticleSubtype::with('subtypeData')->get();

        $articleTagged = [];
        $title = '';
        foreach ($data as $key => $value) {
            if ($value->subtypeData->service_subtype_slug === $slug) {
                $articleTagged[] = $value;
                $title = 'Tag ' . $value->subtypeData->service_subtype_name;
            }
        }

        $articleId = [];
        foreach ($articleTagged as $dt => $val) {
            $articleId[] = $val->bcm_article_id;
        }

        $result = Article::whereIn('id', $articleId)
            ->with('articletags')
            ->get();

        return view('detailarticletag', compact('title', 'result'));
    }
}
