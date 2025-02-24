<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\ArticleSubtype as PivotArticleSubtype;
use App\Models\ArticleView;
use App\Models\ServiceSubType;
use Illuminate\Http\Request;
use PDF;

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

        ArticleView::updateOrCreate([
            'bcm_article_id' => $data->id,
            'ip_address' => request()->ip(),
        ]);

        $viewsCount = $data->loadCount('views')->views_count;

        $finalViewCount = $viewsCount === null ? '0' : $viewsCount;

        $slug = $data->article_slug;
        $title = 'Detail Article Page';

        if (isset($data->articletags[0])) {
            if ($data->articletags[0]->service_subtype_slug == 'regulasi') {
                return view('regulations', compact('title'));
            }
        }

        return view('detailarticle', compact(
            'slug', 'title', 'data', 'finalViewCount'
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

    public function getArticleDownload($slug)
    {
        $data = Article::where('article_slug', $slug)->with('articletags')->first();

        ArticleView::updateOrCreate([
            'bcm_article_id' => $data->id,
            'ip_address' => request()->ip(),
        ]);

        $viewsCount = $data->loadCount('views')->views_count;

        $slug = $data->article_slug;
        $title = 'Detail Article Page';

        if (isset($data->articletags[0])) {
            if ($data->articletags[0]->service_subtype_slug == 'regulasi') {
                return view('regulations', compact('title'));
            }
        }

        $finalData = [
            'article_title' => $data->article_title,
            'article_image' => $data->article_image,
            'article_desc' => $data->article_desc,
        ];

        $pdf = PDF::loadView('articledownload', $finalData);  // load view page
        return $pdf->download($data->article_title . '.pdf');  // download pdf
    }
}
