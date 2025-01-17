<?php

namespace App\Models;

use App\Models\ServiceSubType as Tag;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    protected $table = 'bcm_agendas';

    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class, 'bcm_pivot_types', 'bcm_agenda_id', 'bcm_service_subtype_id');
    }
}
