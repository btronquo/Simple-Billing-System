<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Billing extends Model
{

    public function customer()
    {
        return $this->belongsTo('App\Customer');
    }

    public function paiementstatus()
    {
        return $this->belongsTo('App\PaiementState', 'status_id');
    }

    protected $fillable = [
       'billing_number',
       'billing_date',
        'customer_id',
        'status_id',
        'comment',
        'amount',
        'comment'
    ];


}
