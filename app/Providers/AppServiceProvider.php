<?php

namespace App\Providers;

// use Illuminate\Support\Facades\DB;
// use Illuminate\Support\Facades\View;
// use Illuminate\Contracts\Cache\Factory;
// use Illuminate\Contracts\Cache\Repository;
use App\Setting;
use App\Currency;
use App\Stripe;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Cache;

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
        if(!Cache::has('shop_name'))
        {
            $settings = Setting::all();
            $default_currency = Currency::where('id', $settings[2]['value'])->pluck('code')->first();
            Cache::forever('shop_name', $settings[0]['value']);
            Cache::forever('title_seperator', $settings[1]['value']);
            Cache::forever('default_currency', $default_currency);
            Cache::forever('theme_name', $settings[3]['value']);
            Cache::forever('stripe_webhook_secret', stripe_webhook_secret());
        }
    }
}
