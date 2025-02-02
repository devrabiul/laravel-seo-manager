<?php

namespace devrabiul\LaravelSeoManager;

use Illuminate\Support\ServiceProvider;

class SEOManagerServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'seo');

        $this->publishes([
            __DIR__ . '/config/meta.php' => config_path('meta.php'),
        ]);
    }

    public function register(): void
    {
        //
    }
}
