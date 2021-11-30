<?php

use App\Role;
use App\User;
use App\Stripe;
use App\Currency;

function user_count()
{
    return User::all('id')->count();
}
function gravatar($email)
{
    return "https://www.gravatar.com/avatar/" . md5( strtolower( trim( $email ) ) );
}
function role_name($id)
{
    if(empty($id))
    {
        return 'Customer';
    }
    else
    {
        return Role::where('id', $id)->get('name')->pluck('name')->first();
    }
}
function email_verified_at($date)
{
    if(empty($date))
    {
        return 'No';
    }
    else
    {
        return 'Yes';
    }
}
function stripe_secret_key()
{
    $stripe = Stripe::where('id', 1)->get()->first();

    if($stripe['environment'] == 1)
    {
        return $stripe['live_secret_key'];
    }
    else
    {
        return $stripe['test_secret_key'];
    }
}
function stripe_webhook_secret()
{
    $stripe = Stripe::where('id', 1)->get()->first();

    if($stripe['environment'] == 1)
    {
        return $stripe['live_webhook_secret'];
    }
    else
    {
        return $stripe['test_webhook_secret'];
    }
}
function get_currency(int $id)
{
    return Currency::where('id', $id)->first();
}
function get_currency_id(string $code)
{
    return Currency::where('code', $code)->pluck('id')->first();
}
