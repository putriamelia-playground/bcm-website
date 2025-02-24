<?php

namespace App\Models;

use App\Models\ArticleView;
use App\Models\ServiceSubType as Tag;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'bcm_articles';

    protected $fillable = [
        'article-slug',
        'article-title',
        'article-date',
        'article-desc',
        'article-image',
    ];

    public function articletags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class, 'bcm_article_subtype', 'bcm_article_id', 'bcm_service_subtype_id');
    }

    public function views(): HasMany
    {
        return $this->hasMany(ArticleView::class, 'bcm_article_id');
    }
}
