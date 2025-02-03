<?php

namespace devrabiul\LaravelSeoManager;

use Illuminate\Support\ServiceProvider;

class SEOManagerServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'seo');

        if ($this->app->runningInConsole()) {
            $this->registerPublishing();
        }
    }

    private function registerPublishing()
    {
        $this->publishes([
            __DIR__.'/../config/laravel-seo-manager.php' => config_path('laravel-seo-manager.php'),
        ]);
    }

    public function register(): void
    {
        //
    }
}
