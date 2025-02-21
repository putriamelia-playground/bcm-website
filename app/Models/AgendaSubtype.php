<?php

namespace App\Models;

use App\Models\Agenda;
use App\Models\ServiceSubType;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

class AgendaSubtype extends Model
{
    protected $table = 'bcm_agenda_subtype';

    public function agendaData(): BelongsTo
    {
        return $this->belongsTo(Agenda::class, 'bcm_agenda_id');
    }

    public function subtypeData(): BelongsTo
    {
        return $this->belongsTo(ServiceSubType::class, 'bcm_service_subtype_id');
    }
}
