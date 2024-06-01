<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Userprofile extends BaseModel
{
    protected $dates = [
        'date_of_birth',
        'last_login',
        'email_verified_at',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo('App\Models\User');
    }
}
