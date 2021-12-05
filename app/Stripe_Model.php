<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stripe_Model extends Model
{
    protected $table = 'stripe';
    public $timestamps = false;
}
