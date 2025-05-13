# Laravel SEO Manager

**Laravel SEO Manager** is a powerful and easy-to-use SEO optimization tool for Laravel applications. It helps enhance your website's search engine rankings by automatically adding essential meta tags and structured data to your web pages. With built-in support for Facebook OpenGraph, Twitter Cards, Schema Markup (JSON-LD), and Dublin Core metadata, this package ensures your content is properly indexed and displayed across search engines and social media platforms.

By integrating **Laravel SEO Manager**, you can boost organic traffic, improve click-through rates (CTR), and enhance your website’s visibility in Google Search, Bing, and other search engines. Whether you're managing a blog, eCommerce store, or business website, this package provides a comprehensive SEO solution with customizable settings to match your specific needs.

[![Latest Stable Version](https://poser.pugx.org/devrabiul/laravel-seo-manager/v/stable)](https://packagist.org/packages/devrabiul/laravel-seo-manager)
[![Total Downloads](https://poser.pugx.org/devrabiul/laravel-seo-manager/downloads)](https://packagist.org/packages/devrabiul/laravel-seo-manager)
![GitHub license](https://img.shields.io/github/license/devrabiul/laravel-seo-manager)
[![MadeWithLaravel.com shield](https://madewithlaravel.com/storage/repo-shields/5648-shield.svg)](https://madewithlaravel.com/p/laravel-seo-manager/shield-link)
![GitHub Repo stars](https://img.shields.io/github/stars/devrabiul/laravel-seo-manager?style=social)

## SEO Features

- **Standard SEO** (title, description, robots, etc.)
- **Dublin Core** metadata for academic and library-focused sites.
- **Facebook OpenGraph** for social sharing optimizations.
- **Twitter Card** for rich Twitter previews.
- **Schema Markup** for structured data (JSON-LD).

## Requirements

- PHP 5.4 or higher
- Laravel 5.5+ (supports package auto-discovery)

## Installation

### Step 1: Install via Composer

Run the following command to install the package:

```bash
composer require devrabiul/laravel-seo-manager
```

### Step 2: Service Provider (Laravel 5.4 and below)

Laravel 5.5 and above support auto-discovery, so no manual provider registration is needed. For earlier versions of Laravel, you need to add the service provider to `config/app.php`:

```php
'providers' => [
    Devrabiul\LaravelSeoManager\SEOManagerServiceProvider::class,
],
```

### Step 3: Publish the Configuration

Run the following command to publish the configuration file:

```bash
php artisan vendor:publish --provider="Devrabiul\LaravelSeoManager\SEOManagerServiceProvider"
```

This will create the `laravel-seo-manager.php` configuration file in the `config` directory.

## Configuration

After installation, you can configure the meta tags in the `config/laravel-seo-manager.php` file. Here's a summary of the available options:

| Option            | Description                                                         |
|-------------------|---------------------------------------------------------------------|
| `robots`          | Defines search engine crawling rules (e.g., `all`, `noindex`)       |
| `revisit_after`   | Time interval for search engine re-crawling (e.g., `1 day`)         |
| `referrer`        | Specifies referrer policy for browsers (e.g., `no-referrer`)        |
| `type`            | Defines the type of page (e.g., `website`, `article`)               |
| `title`           | The title of the page or website                                    |
| `description`     | A description of the page or website                                |
| `image`           | URL to an image to be used by search engines                        |
| `author`          | The author of the page                                              |
| `geo_region`      | Geographic region of your business (e.g., `London`)                 |
| `geo_position`    | Latitude and longitude of your physical location                    |
| `twitter_site`    | Your Twitter handle (e.g., `@username`)                             |
| `twitter_card`    | Type of Twitter card (e.g., `summary_large_image`)                  |
| `fb_app_id`       | Your Facebook App ID for OpenGraph                                 |
| `keywords`        | Keywords for your page to help search engines identify content      |

## Usage

After configuring the meta tags, you can include them in your Blade templates by adding the following code:

### Standard Meta Tags

```php
@include('seo::meta')
```

This will automatically use the values set in the `laravel-seo-manager.php` config file. However, you can override specific values by passing them as arguments:

```php
@include('seo::meta', [
    'title' => 'My Custom Title',
    'description' => 'This is a custom description.',
    'image' => 'https://example.com/image.jpg',
])
```

### Schema Markup

You can also include schema markup using the `schema` view. Here’s an example for a blog post:

```php
@include('seo::schema', [
    'breadcrumbs' => [
        ['name' => 'Home', 'url' => url('/')],
        ['name' => 'Blog', 'url' => url('/blog')],
        ['name' => 'Post Title', 'url' => url()->current()],
    ],
    'article_body' => 'This is the content of the article...',
    'date_published' => '2024-01-01T12:00:00+00:00',
    'date_modified' => '2024-01-05T14:30:00+00:00',
])
```

### Example Usage

Here’s a complete example of using the package:

```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    @include('seo::meta', [
        'title' => 'My Example Title',
        'description' => 'This is my example description.',
        'image' => 'https://example.com/image.jpg',
    ])
</head>
<body>
    <h1>Welcome to My Website</h1>
    @include('seo::schema', [
        'breadcrumbs' => [
            ['name' => 'Home', 'url' => url('/')],
            ['name' => 'About', 'url' => url('/about')],
        ],
        'article_body' => 'This is the body content of the article...',
        'date_published' => '2024-01-01T12:00:00+00:00',
        'date_modified' => '2024-01-05T14:30:00+00:00',
    ])
</body>
</html>
```

## Maintainers

This package is maintained by [Muhammad Rabiul](http://github.com/devrabiul) and you!

## License

This package is licensed under the [MIT license](https://github.com/devrabiul/laravel-seo-manager/blob/master/LICENSE).
