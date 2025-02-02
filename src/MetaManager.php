<?php 

namespace devrabiul\LaravelSeoManager;

class MetaManager
{
    protected array $meta = [];

    public function set($key, $value): void
    {
        $this->meta[$key] = $value;
    }

    public function get($key)
    {
        return $this->meta[$key] ?? config("meta.default.$key");
    }

    public function all()
    {
        return array_merge(config('meta.default'), $this->meta);
    }
}
