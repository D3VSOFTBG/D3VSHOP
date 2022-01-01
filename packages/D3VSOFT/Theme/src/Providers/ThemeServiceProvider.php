<?php

namespace D3VSOFT\Theme\Providers;

use Illuminate\Support\ServiceProvider;

class ThemeServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'theme');
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'theme');

        $this->publishes([
            __DIR__.'/../public' => public_path('/d3vsoft/theme'),
        ]);
    }
}
