<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Robots
    |--------------------------------------------------------------------------
    |
    | Defines how search engine bots should crawl and index the site.
    | Options: all, index, noindex, follow, nofollow, none, noarchive, nosnippet.
    |
    */
    'robots' => 'all',


    /*
    |--------------------------------------------------------------------------
    | Revisit After
    |--------------------------------------------------------------------------
    |
    | Specifies how often search engines should re-crawl your website.
    | Example values: '7 days', '30 days'.
    |
    */
    'revisit_after' => 'period',


    /*
    |--------------------------------------------------------------------------
    | Referrer Policy
    |--------------------------------------------------------------------------
    |
    | Defines how referrer information is passed to other sites.
    | Options: no-referrer, origin, same-origin, strict-origin, 
    | strict-origin-when-cross-origin, unsafe-url.
    |
    */
    'referrer' => 'no-referrer-when-downgrade',


    /*
    |--------------------------------------------------------------------------
    | Page Type
    |--------------------------------------------------------------------------
    |
    | Defines the Open Graph (OG) type for the page.
    | Options: website, article, product, profile, etc.
    |
    */
    'type' => 'website',


    /*
    |--------------------------------------------------------------------------
    | Title
    |--------------------------------------------------------------------------
    |
    | The default meta title for the site. Can be overridden per page.
    |
    */
    'title' => '',


    /*
    |--------------------------------------------------------------------------
    | Description
    |--------------------------------------------------------------------------
    |
    | The default meta description for the site. Can be overridden per page.
    |
    */
    'description' => '',


    /*
    |--------------------------------------------------------------------------
    | Image
    |--------------------------------------------------------------------------
    |
    | Default image URL used for Open Graph and Twitter meta tags.
    |
    */
    'image' => '',


    /*
    |--------------------------------------------------------------------------
    | Author
    |--------------------------------------------------------------------------
    |
    | The default author name for articles and pages.
    |
    */
    'author' => '',


    /*
    |--------------------------------------------------------------------------
    | Keywords
    |--------------------------------------------------------------------------
    |
    | Keywords for SEO, separated by commas.
    |
    */
    'keywords' => '',


    /*
   |--------------------------------------------------------------------------
   | Geographic Region and Position
   |--------------------------------------------------------------------------
   |
   | Used for businesses with physical locations to improve local SEO.
   |
   */
    'geo_region' => '', //e.g: Lagos
    'geo_position' => '', //e.g(lng,lat): 4.870467,6.993388


    /*
    |--------------------------------------------------------------------------
    | Social Media - TWITTER SITE
    |--------------------------------------------------------------------------
    |
    | Configuration for social media metadata.
    |
    */
    'twitter_site' => '',


    /*
    |--------------------------------------------------------------------------
    | TWITTER SITE
    |--------------------------------------------------------------------------
    |
    | Here you may specify the way you want crawlers to understand your 
    | Twitter share type. Check twitter docs for more options.
    |
    */
    'twitter_card' => 'summary_large_image',


    /*
    |--------------------------------------------------------------------------
    | FACEBOOK APP ID
    |--------------------------------------------------------------------------
    |
    | Here you may provide your facebook app id
    |
    */
    'fb_app_id' => '',


    /*
    |--------------------------------------------------------------------------
    | Viewport
    |--------------------------------------------------------------------------
    |
    | Defines how the webpage is displayed on different screen sizes.
    |
    */
    'viewport' => 'width=device-width, initial-scale=1',


    /*
    |--------------------------------------------------------------------------
    | Theme Color
    |--------------------------------------------------------------------------
    |
    | Specifies the theme color of the website (for mobile browsers).
    |
    */
    'theme_color' => '#FFFFFF',


    /*
    |--------------------------------------------------------------------------
    | Mobile Web App Capable
    |--------------------------------------------------------------------------
    |
    | Enables progressive web app features on mobile devices.
    |
    */
    'mobile_web_app_capable' => 'yes',

];