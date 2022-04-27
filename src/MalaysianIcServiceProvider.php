<?php

namespace Nazfitri\MalaysianIc;

use Illuminate\Support\ServiceProvider;

class MalaysianIcServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Nazfitri\MalaysianIc\MalaysianIcController');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/routes.php');
    }
}
