<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stripe_Logs extends Model
{
    protected $table = 'stripe_logs';
    public $timestamps = false;
}
