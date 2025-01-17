<?php

namespace App\Models;

use App\Models\Agenda;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Model;

class ServiceSubType extends Model
{
    protected $table = 'bcm_service_subtypes';

    public function agendas(): BelongsToMany
    {
        return $this->belongsToMany(Agenda::class, 'bcm_pivot_types', 'bcm_agenda_id', 'bcm_service_subtype_id');
    }
}
