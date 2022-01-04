<?php

use App\Carrier;
use App\Role;
use App\User;
use App\Stripe;
use App\Currency;
use App\Order;
use App\Ordered_Product;
use App\Product;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

function user_count()
{
    return User::all('id')->count();
}
function product_count()
{
    return Product::all('id')->count();
}
function order_count()
{
    return Order::all('id')->count();
}
function carrier_count()
{
    return Carrier::all('id')->count();
}
function cart_count()
{
    if(session()->has('cart'))
    {
        $cart = session()->get('cart');

        return array_sum(array_column($cart, 'quantity'));
    }
    else
    {
        return 0;
    }
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
    if(env('STRIPE_ENVIRONMENT') == 1)
    {
        return env('STRIPE_LIVE_SECRET_KEY');
    }
    else
    {
        return env('STRIPE_TEST_SECRET_KEY');
    }
}
function stripe_webhook_secret()
{
    if(env('STRIPE_ENVIRONMENT') == 1)
    {
        return env('STRIPE_LIVE_WEBHOOK_SECRET');
    }
    else
    {
        return env('STRIPE_TEST_WEBHOOK_SECRET');
    }
}
function get_currency(int $id)
{
    return Currency::where('id', $id)->first();
}
function get_currency_code(int $id)
{
    return Currency::where('id', $id)->pluck('code')->first();
}
function get_currency_id(string $code)
{
    return Currency::where('code', $code)->pluck('id')->first();
}
function get_default_currency_code()
{
    if(Cache::has('get_default_currency_code'))
    {
        return Cache::get('get_default_currency_code');
    }
    else
    {
        $code = Currency::where('id', (int) env('DEFAULT_CURRENCY_ID'))->pluck('code')->first();
        Cache::forever('get_default_currency_code', $code);
        return Cache::get('get_default_currency_code');
    }
}
function get_cart_total_sum()
{
    $prices_array = array();

    if(session()->has('cart'))
    {
        foreach(session()->get('cart') as $cart)
        {
            array_push($prices_array, discounted_price($cart['price'], $cart['discount']) * $cart['quantity']);
        }
    }

    $get_cart_total_sum = array_sum($prices_array);
    return $get_cart_total_sum;
}
function env_update($key, $value)
{
    $path = base_path('.env');

    if (file_exists($path))
    {
        file_put_contents($path, str_replace(
            $key . '=' . '"' . env($key) . '"', $key . '=' . '"' .$value. '"', file_get_contents($path)
        ));
    }
}
function if_null($var)
{
    if($var == NULL)
    {
        return 0;
    }
    else
    {
        return $var;
    }
}
function if_discounted($discount)
{
    if($discount > 0)
    {
        return true;
    }
    else
    {
        return false;
    }
}
function discounted_price($price, $discount)
{
    return round($price - (($price / 100) * $discount), 2);
}
function package_path()
{
    return base_path() . '/packages';
}
function remove_directory($path)
{
    $files = glob($path . '/*');

    foreach($files as $file)
    {
        if(is_dir($file))
        {
            remove_directory($file);
        }
        else
        {
            unlink($file);
        }
    }

    rmdir($path);
}
