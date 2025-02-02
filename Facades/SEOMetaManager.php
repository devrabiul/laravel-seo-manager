<?php 

namespace devrabiul\LaravelSeoManager\Facades;

use Illuminate\Support\Facades\Facade;

class SEOMetaManager extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'seo-meta-manager';
    }
}
