<?php

namespace devrabiul\LaravelSeoManager\Tests;

use devrabiul\LaravelSeoManager\Facades\SEOMetaManager;

class MetaManagerTest extends TestCase
{
    /** @test */
    public function it_sets_and_gets_meta_values()
    {
        SEOMetaManager::set('title', 'Custom Title');
        $this->assertEquals('Custom Title', SEOMetaManager::get('title'));
    }

    /** @test */
    public function it_returns_default_meta_values()
    {
        $this->assertEquals('Default Title', SEOMetaManager::get('title'));
    }

    /** @test */
    public function it_returns_all_meta_values()
    {
        SEOMetaManager::set('title', 'My Title');
        SEOMetaManager::set('description', 'My Description');

        $metaData = SEOMetaManager::all();

        $this->assertEquals('My Title', $metaData['title']);
        $this->assertEquals('My Description', $metaData['description']);
    }
}
