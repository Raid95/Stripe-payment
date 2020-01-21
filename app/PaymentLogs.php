<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaymentLogs extends Model
{
    protected $table = 'payment_logs';

    protected $fillable = [
        'amount','charge_id','stripe_id', 'quantity', 'plan'
];
}
