<?php

namespace App\Models;

use App\Models\Article;
use App\Models\ServiceSubType;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

class ArticleSubtype extends Model
{
    protected $table = 'bcm_article_subtype';

    public function articleData(): BelongsTo
    {
        return $this->belongsTo(Article::class, 'bcm_article_id');
    }

    public function subtypeData(): BelongsTo
    {
        return $this->belongsTo(ServiceSubType::class, 'bcm_service_subtype_id');
    }
}
