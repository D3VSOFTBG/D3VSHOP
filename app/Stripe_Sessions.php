<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stripe_Sessions extends Model
{
    protected $table = 'stripe_sessions';
    public $timestamps = false;
}
