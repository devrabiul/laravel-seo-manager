<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "{{ !empty($type) ? $type : config('laravel-seo-manager.type') }}",
    "name": "{{ config('app.name') }}",
    "url": "{{ url()->current() }}",
    "description": "{{ !empty($description) ? $description : config('laravel-seo-manager.description') }}",
    "image": "{{ !empty($image) ? $image : config('laravel-seo-manager.image') }}",
    "keywords": "{{ !empty($keywords) ? $keywords : config('laravel-seo-manager.keywords') }}",
    @if(!empty(config('laravel-seo-manager.author')))
    "author": {
        "@type": "Person",
        "name": "{{ config('laravel-seo-manager.author') }}"
    },
    @endif
    @if(!empty(config('laravel-seo-manager.fb_app_id')))
    "sameAs": [
        "https://www.facebook.com/{{ config('laravel-seo-manager.fb_app_id') }}"
    ],
    @endif
    "publisher": {
        "@type": "Organization",
        "name": "{{ config('app.name') }}",
        "logo": {
            "@type": "ImageObject",
            "url": "{{ !empty($image) ? $image : config('laravel-seo-manager.image') }}"
        }
    },
    "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "{{ url()->current() }}"
    },
    @if(!empty($breadcrumbs) && is_array($breadcrumbs))
    "breadcrumb": {
        "@type": "BreadcrumbList",
        "itemListElement": [
        @foreach($breadcrumbs as $index => $breadcrumb)
            {
                "@type": "ListItem",
                "position": {{ $index + 1 }},
                "name": "{{ $breadcrumb['name'] }}",
                "item": "{{ $breadcrumb['url'] }}"
            }@if(!$loop->last),@endif
        @endforeach
        ]
    },
    @endif
    @if(!empty($article_body) || !empty($date_published) || !empty($date_modified))
    "articleBody": "{{ !empty($article_body) ? $article_body : '' }}",
    "datePublished": "{{ !empty($date_published) ? $date_published : now()->toIso8601String() }}",
    "dateModified": "{{ !empty($date_modified) ? $date_modified : now()->toIso8601String() }}"
    @endif
}
</script>
