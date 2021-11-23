<?php

namespace App\Providers;

use App\SettingModel;
use Illuminate\Support\ServiceProvider;
// use Illuminate\Support\Facades\DB;
// use Illuminate\Support\Facades\View;
// use Illuminate\Contracts\Cache\Factory;
// use Illuminate\Contracts\Cache\Repository;
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
            $settings = SettingModel::all();
            Cache::forever('shop_name', $settings[0]['value']);
            Cache::forever('title_seperator', $settings[1]['value']);
            Cache::forever('default_currency', $settings[2]['value']);
            Cache::forever('theme_name', $settings[3]['value']);
        }
    }
}
