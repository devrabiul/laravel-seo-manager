<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "{{ !empty($type) ? $type : config('meta.type') }}",
    "name": "{{ config('app.name') }}",
    "url": "{{ url()->current() }}",
    "description": "{{ !empty($description) ? $description : config('meta.description') }}",
    "image": "{{ !empty($image) ? $image : config('meta.image') }}",
    "keywords": "{{ !empty($keywords) ? $keywords : config('meta.keywords') }}",

    @if(config('meta.author'))
    "author": {
        "@type": "Person",
        "name": "{{ config('meta.author') }}"
    },
    @endif

    @if(config('meta.fb_app_id'))
    "sameAs": [
        "https://www.facebook.com/{{ config('meta.fb_app_id') }}"
    ],
    @endif

    "publisher": {
        "@type": "Organization",
        "name": "{{ config('app.name') }}",
        "logo": {
            "@type": "ImageObject",
            "url": "{{ config('meta.image') }}"
        }
    },

    "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "{{ url()->current() }}"
    },

    @if(isset($breadcrumbs) && is_array($breadcrumbs))
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

    @if(config('meta.type') == 'Article')
    "articleBody": "{{ !empty($article_body) ? $article_body : '' }}",
    "datePublished": "{{ !empty($date_published) ? $date_published : now()->toIso8601String() }}",
    "dateModified": "{{ !empty($date_modified) ? $date_modified : now()->toIso8601String() }}"
    @endif
}
</script>
