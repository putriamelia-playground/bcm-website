<?php

namespace App\Models;

use App\Models\Agenda;
use App\Models\Article;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Model;

class ServiceSubType extends Model
{
    protected $table = 'bcm_service_subtypes';

    public function agendas(): BelongsToMany
    {
        return $this->belongsToMany(Agenda::class, 'bcm_agenda_subtype', 'bcm_agenda_id', 'bcm_service_subtype_id');
    }

    public function articles(): BelongsToMany
    {
        return $this->belongsToMany(Article::class, 'bcm_article_subtype', 'bcm_article_id', 'bcm_service_subtype_id');
    }
}
