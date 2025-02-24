<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ArticleView extends Model
{
    protected $table = 'bcm_article_views';

    protected $fillable = [
        'bcm_article_id',
        'ip_address',
    ];
}
