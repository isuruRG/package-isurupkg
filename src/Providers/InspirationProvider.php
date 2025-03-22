<?php

namespace Isurupkg\Inspire\Providers;

use Illuminate\Support\ServiceProvider;
use Isurupkg\Inspire\Inspire;

class InspirationProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function register()
    {
        // Bind the Inspire class if needed
        $this->app->singleton(Inspire::class, function () {
            return new Inspire();
        });
    }
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        $this->loadViewsFrom(__DIR__.'/../views', 'inspire');
    }
}