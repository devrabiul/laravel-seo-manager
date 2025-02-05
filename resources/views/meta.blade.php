@isset($title)
    <title>{{ $title }}</title>
@endisset

<meta name="robots" content="index, follow">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="sitemap" type="application/xml" title="Sitemap" href="{{ url('sitemap.xml') }}">

<meta name="referrer" content="{{ !empty($referrer)? $referrer : config('laravel-seo-manager.referrer') }}">
<meta name="robots" content="{{ !empty($robots)? $robots : config('laravel-seo-manager.robots') }}">
<meta name="description" content="{{ !empty($description)? $description : config('laravel-seo-manager.description') }}">
<meta name="keywords" content="{{ !empty($keywords)? $keywords : config('laravel-seo-manager.keywords') }}">

@if(config('laravel-seo-manager.geo_region') !=='')
<meta name="geo.region" content="{{ config('laravel-seo-manager.geo_region') }}">
@endif

@if(config('laravel-seo-manager.geo_position') !=='')
<meta name="geo.position" content="{{ config('laravel-seo-manager.geo_position') }}">
<meta name="ICBM" content="{{ config('laravel-seo-manager.geo_position') }}">
@endif

<meta name="geo.placename" content="{{  config('app.name') }}">
<meta name="author" content="{{ !empty($author)? $author : env('APP_NAME') }}">
<meta name="Language" content="{{ str_replace('_', '-', app()->getLocale()) }}">
<link rel="canonical" href="{{ !empty($canonical)? $canonical : url('/') }}">

@if(!empty($manifest) || config('laravel-seo-manager.manifest') !=='')
<link rel="manifest" href="{{ !empty($manifest)? $manifest : config('laravel-seo-manager.manifest') }}">
@endif
@if(!empty($theme_color) || config('laravel-seo-manager.theme_color') !=='')
<meta name="theme-color" content="{{ !empty($theme_color)? $theme_color : config('laravel-seo-manager.theme_color') }}">
@endif

@if(!empty($mobile_web_app_capable) || config('laravel-seo-manager.mobile_web_app_capable') !=='')
<meta name="mobile-web-app-capable" content="{{ !empty($mobile_web_app_capable)? $mobile_web_app_capable : config('laravel-seo-manager.mobile_web_app_capable') }}">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
@endif

<link rel="shortcut icon" href="{{ getSystemImage(path: $SYSTEM_CONFIG['System_Favicon_Logo'] ?? '', type:'logo-sm') }}">

<link rel="apple-touch-icon" href="{{ getSystemImage(path: $SYSTEM_CONFIG['System_Favicon_Logo_96'] ?? '', type:'logo-sm') }}">
<link rel="apple-touch-icon" sizes="152x152" href="{{ getSystemImage(path: $SYSTEM_CONFIG['System_Favicon_Logo_144'] ?? '', type:'logo-sm') }}">
<link rel="apple-touch-icon" sizes="167x167" href="{{ getSystemImage(path: $SYSTEM_CONFIG['System_Favicon_Logo_168'] ?? '', type:'logo-sm') }}">
<link rel="apple-touch-icon" sizes="180x180" href="{{ getSystemImage(path: $SYSTEM_CONFIG['System_Favicon_Logo_192'] ?? '', type:'logo-sm') }}">

@if(!empty($meta['title']))
    <title>{{ $meta['title'] }} {{ config('System_Page_Separator_And_Tagline', env('APP_NAME')) }}</title>
    <meta name="twitter:title" content="{{ $meta['title'] }} | {{ config('app.name', 'Infinity') }}">
    <meta name="dcterms.Title" content="{{ $meta['title'] }} | {{ config('app.name', 'Infinity') }}">
    <meta property="og:title" content="{{ $meta['title'] }} | {{ config('app.name', 'Infinity') }}">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta itemprop="name" content="{{ $meta['title'] }} {{ config('System_Page_Separator_And_Tagline', env('APP_NAME')) }}">
@endif

@if(!empty($meta['description']))
    <meta name="description" content="{{ substr(strip_tags(str_replace('&nbsp;', ' ', $meta['description'])), 0, 155) }}">
    <meta name="twitter:description" content="{{ substr(strip_tags(str_replace('&nbsp;', ' ', $meta['description'])), 0, 155) }}">
    <meta name="dcterms.Description" content="{{ substr(strip_tags(str_replace('&nbsp;', ' ', $meta['description'])), 0, 155) }}">
    <meta property="og:description" content="{{ substr(strip_tags(str_replace('&nbsp;', ' ', $meta['description'])), 0, 155) }}">
    <meta name="twitter:description" content="{{ substr(strip_tags(str_replace('&nbsp;', ' ', $meta['description'])), 0, 155) }}">
    <meta itemprop="description" content="{{ substr(strip_tags(str_replace('&nbsp;', ' ', $meta['description'])), 0, 155) }}">
@endif

@if(!empty($meta['keywords']))
    <meta name="keywords" content="{{ $meta['keywords'] }}">
    <meta name="dcterms.Subject" content="{{ $meta['keywords'] }}">
@endif

@if(!empty($meta['image']))
    <meta property="og:image" content="{{ $meta['image'] }}">
    <meta name="twitter:image" content="{{ $meta['image'] }}">
    <meta itemprop="image" content="{{ $meta['image'] }}">
@endif

@if(isset($meta['hreflang']) && !empty($meta['hreflang']))
    <link rel="alternate" hreflang="{{ 'en' }}" href="{{ url()->current().'?locale=en' }}" />
    @foreach ($meta['hreflang'] as $locale)
        @if(in_array($locale, getActiveLanguageList()?->pluck('language_code')?->toArray()))
            <link rel="alternate" hreflang="{{ $locale }}" href="{{ url()->current().'?locale='.$locale }}" />
        @endif
    @endforeach
@endif

<meta name="dcterms.Relation" content="{{ env('APP_NAME') }}">
<meta name="dcterms.Publisher" content="{{ env('APP_NAME') }}">
<meta name="dcterms.Contributor" content="{{ env('APP_NAME') }}">

<!-- Dublin Core basic info -->
<meta name="dcterms.Type" content="text/html">
<meta name="dcterms.Format" content="text/html">
<meta name="dcterms.Language" content="{{ str_replace('_', '-', app()->getLocale()) }}">
<meta name="dcterms.Identifier" content="{{ url()->current() }}">
<meta name="dcterms.Coverage" content="{{ url()->current() }}">
<meta name="dcterms.Relation" content="{{  config('app.name') }}">
<meta name="dcterms.Publisher" content="{{  config('app.name') }}">
<meta name="dcterms.Title" content="{{ !empty($title)? $title : config('laravel-seo-manager.title') }}">
<meta name="dcterms.Subject" content="{{ !empty($keywords)? $keywords : config('laravel-seo-manager.keywords') }}">
<meta name="dcterms.Contributor" content="{{ !empty($author)? $author : config('laravel-seo-manager.author') }}">
<meta name="dcterms.Description" content="{{ !empty($description)? $description : config('laravel-seo-manager.description') }}">

<meta property="og:type" content="{{ !empty($type)? $type : config('laravel-seo-manager.type') }}">
<meta property="og:url" content="{{ url()->current() }}">
<meta property="og:title" content="{{ !empty($title)? $title : config('laravel-seo-manager.title') }}">
<meta property="og:description" content="{{ !empty($description)? $description : config('laravel-seo-manager.description') }}">
<meta property="og:image" content="{{ !empty($image)? $image : config('laravel-seo-manager.image') }}">

<!-- Twitter Card -->
@if(!empty($twitter_card) || config('laravel-seo-manager.twitter_card') !== '')
    <meta name="twitter:card" content="{{ !empty($twitter_card) ? $twitter_card : config('laravel-seo-manager.twitter_card') }}">
@endif
@if(!empty($twitter_site) || config('laravel-seo-manager.twitter_site') !=='')
    <meta name="twitter:site" content="{{ !empty($twitter_site)? $twitter_site : config('laravel-seo-manager.twitter_site') }}">
@endif

<meta name="twitter:title" content="{{ !empty($title)? $title : config('laravel-seo-manager.title') }}">
<meta name="twitter:description" content="{{ !empty($description)? $description : config('laravel-seo-manager.description') }}">
<meta name="twitter:image" content="{{ !empty($image)? $image : config('laravel-seo-manager.image') }}">


@if(!empty($fb_app_id) || config('laravel-seo-manager.fb_app_id') !=='')
<meta property="fb:app_id" content="{{ !empty($fb_app_id)? $fb_app_id : config('laravel-seo-manager.fb_app_id') }}"/>
@endif

@if(!empty($twitter_card))<meta name="twitter:card" content="{{ $twitter_card }}">@endif
@if(!empty($twitter_site))<meta name="twitter:site" content="{{ $twitter_site }}">@endif
<meta name="geo.region" content="{{ env('APP_TIMEZONE') }}">

<!-- Open Graph and Social Media Meta Tags -->
<meta property="og:title" content="{{ $meta['title'] ?? env('APP_NAME') }}">
<meta property="og:image" content="{{ $meta['image'] ?? asset('default-image.png') }}">
<meta property="og:url" content="{{ url()->current() }}">
<meta name="site_name" content="{{ getSystemConfig(name: 'company_name') ?? env('APP_NAME') }}">

<meta property="og:site_name" content="{{ config('app.name') ?? env('APP_NAME') }}">

<meta property="og:locale" content="{{ str_replace('_', '-', app()->getLocale()) }}">
<meta property="og:type" content="{{ !empty($type) ? $type : 'website' }}">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">
<meta property="og:image:alt" content="{{ $meta['title'] ?? 'Default Image' }}">

<!-- Twitter Card -->
<meta name="twitter:card" content="{{ $twitter_card ?? 'summary_large_image' }}">
<meta name="twitter:site" content="{{ $twitter_site ?? '@YourTwitterHandle' }}">
<meta name="twitter:image" content="{{ $meta['image'] ?? asset('default-image.png') }}">
<meta name="twitter:image:alt" content="{{ $meta['title'] ?? 'Default Image' }}">


<!-- Additional Open Graph Tags -->
<meta property="og:image:type" content="image/jpeg">
<meta property="og:image:secure_url" content="{{ $meta['image'] ?? asset('default-image.png') }}">
<meta property="og:updated_time" content="{{ now()->toIso8601String() }}">
<meta property="og:determiner" content="the">

<!-- Optional Twitter Card Tags for Video (if applicable) -->
@if(!empty($meta['video']))
    <meta name="twitter:player" content="{{ $meta['video'] }}">
    <meta name="twitter:player:width" content="1280">
    <meta name="twitter:player:height" content="720">
@endif

<!-- Optional OG Tags for Video -->
@if(!empty($meta['video']))
    <meta property="og:video" content="{{ $meta['video'] }}">
    <meta property="og:video:width" content="1280">
    <meta property="og:video:height" content="720">
    <meta property="og:video:type" content="video/mp4">
@endif
