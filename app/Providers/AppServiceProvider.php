<?php

namespace App\Providers;

use App\AdminMenu;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
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
    }
}
