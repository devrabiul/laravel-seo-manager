<!-- Standard SEO -->
@isset($title)
<title>{{ $title }}</title>
@endisset
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
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

<!-- Dublin Core basic info -->
<meta name="dcterms.Format" content="text/html">
<meta name="dcterms.Language" content="{{ config('app.locale') }}">
<meta name="dcterms.Identifier" content="{{ url()->current() }}">
<meta name="dcterms.Relation" content="{{  config('app.name') }}">
<meta name="dcterms.Publisher" content="{{  config('app.name') }}">
<meta name="dcterms.Type" content="text/html">
<meta name="dcterms.Coverage" content="{{ url()->current() }}">
<meta name="dcterms.Title" content="{{ !empty($title)? $title : config('laravel-seo-manager.title') }}">
<meta name="dcterms.Subject" content="{{ !empty($keywords)? $keywords : config('laravel-seo-manager.keywords') }}">
<meta name="dcterms.Contributor" content="{{ !empty($author)? $author : config('laravel-seo-manager.author') }}">
<meta name="dcterms.Description" content="{{ !empty($description)? $description : config('laravel-seo-manager.description') }}">

<!-- Facebook OpenGraph -->
<meta property="og:locale" content="{{  config('app.locale') }}">
<meta property="og:type" content="{{ !empty($type)? $type : config('laravel-seo-manager.type') }}">
<meta property="og:url" content="{{ url()->current() }}">
<meta property="og:title" content="{{ !empty($title)? $title : config('laravel-seo-manager.title') }}">
<meta property="og:description" content="{{ !empty($description)? $description : config('laravel-seo-manager.description') }}">
<meta property="og:image" content="{{ !empty($image)? $image : config('laravel-seo-manager.image') }}">
<meta property="og:site_name" content="{{  config('app.name') }}">

@if(config('laravel-seo-manager.fb_app_id') !=='')
<meta property="fb:app_id" content="{{ config('laravel-seo-manager.fb_app_id') }}"/>
@endif

<!-- Twitter Card -->
@if(config('laravel-seo-manager.twitter_card') !=='')
<meta name="twitter:card" content="{{ !empty($twitter_card)? $twitter_card : config('laravel-seo-manager.twitter_card') }}">
@endif
@if(config('laravel-seo-manager.twitter_site') !=='' || !empty($twitter_site))
<meta name="twitter:site" content="{{ !empty($twitter_site)? $twitter_site : config('laravel-seo-manager.twitter_site') }}">
@endif
<meta name="twitter:title" content="{{ !empty($title)? $title : config('laravel-seo-manager.title') }}">
<meta name="twitter:description" content="{{ !empty($description)? $description : config('laravel-seo-manager.description') }}">
<meta name="twitter:image" content="{{ !empty($image)? $image : config('laravel-seo-manager.image') }}">