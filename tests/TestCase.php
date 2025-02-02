<?php

namespace devrabiul\LaravelSeoManager\Tests;

use Orchestra\Testbench\TestCase as BaseTestCase;
use devrabiul\LaravelSeoManager\SEOManagerServiceProvider;

abstract class TestCase extends BaseTestCase
{
    protected function getPackageProviders($app): array
    {
        return [SEOManagerServiceProvider::class];
    }
}
