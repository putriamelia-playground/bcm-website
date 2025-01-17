<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    protected $table = 'bcm_forms';

    protected $fillable = [
        'participant_name',
        'participant_email',
        'company_name',
        'participant_orgunit',
        'company_address',
        'phone_number',
        'company_email',
        'privacy_agreement',
        'email_agreement',
    ];

    protected $casts = [
        'privacy_agreement' => 'boolean',
        'email_agreement' => 'boolean',
    ];
}
