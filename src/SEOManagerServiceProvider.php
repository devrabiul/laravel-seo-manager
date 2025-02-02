<?php 

namespace devrabiul\LaravelSeoManager;

use Illuminate\Support\ServiceProvider;
use devrabiul\LaravelSeoManager\MetaManager;

class SEOManagerServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->loadViewsFrom(__DIR__.'/views', 'meta');

        $this->publishes([
            __DIR__.'/config/meta.php' => config_path('meta.php'),
        ]);
    }

    public function boot(): void
    {
        $this->publishes([
            __DIR__.'/../config/meta.php' => config_path('meta.php'),
        ], 'config');

        $this->loadViewsFrom(__DIR__.'/../resources/views', 'meta');
    }
}
