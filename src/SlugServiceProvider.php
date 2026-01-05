<?php

namespace asmaa\slug;

use Illuminate\Support\ServiceProvider;

class SlugServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
         $this->loadMigrationsFrom(__DIR__ . '/../src/database/migrations');
        $this->loadViewsFrom(__DIR__ . '/../src/views','asmaa/slug');

        $this->publishes([
    __DIR__ . '/../src/database/migrations' => database_path('migrations'),
], 'slug-migrations');

    }

    public function register()
    {
        
    }
}
