<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompagnyType extends Model
{
    protected $fillable = [
        'type_id',
        'name'
    ];
}
