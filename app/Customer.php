<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
        'type',
        'name',
        'address_line_1',
        'address_line_2',
        'zip',
        'city',
        'country',
        'contact_firstname',
        'contact_lastname',
        'contact_mail',
        'contact_phone'
    ];
}
