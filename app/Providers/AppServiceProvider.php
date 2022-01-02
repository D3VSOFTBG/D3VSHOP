<?php

namespace App\Providers;

use App\AdminMenu;
use App\Currency;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Request;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        if(str_contains(Request::url(), '/admin'))
        {
            $adminMenus = AdminMenu::all();
            View::share('adminMenus', $adminMenus);
        }
        else
        {
            $default_currency_code = Currency::where('id', (int) env('DEFAULT_CURRENCY_ID'))->pluck('code')->first();

            $prices_array = array();

            if(session()->has('cart'))
            {
                foreach(session()->get('cart') as $cart)
                {
                    array_push($prices_array, discounted_price($cart['price'], $cart['discount']) * $cart['quantity']);
                }
            }

            $cart_total_sum = array_sum($prices_array);

            view()->share('cart_count', cart_count());
            view()->share('cart_total_sum', $cart_total_sum);
            view()->share('default_currency_code', $default_currency_code);
        }
    }
}
