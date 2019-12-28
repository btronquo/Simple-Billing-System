<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaiementState extends Model
{
    protected $fillable = [
        'status_id',
        'status_text'
    ];
}
