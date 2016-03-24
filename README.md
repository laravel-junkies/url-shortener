# UX9 URL Shortener API

The official UX9 URL Shortener API for Laravel Users.
**NOTE:** a UX9 API Key is required.

[![Total Downloads](https://poser.pugx.org/laravel-junkies/url-shortener/downloads.svg)](https://packagist.org/packages/laravel-junkies/url-shortener)
[![Latest Stable Version](https://poser.pugx.org/laravel-junkies/url-shortener/v/stable.svg)](https://packagist.org/packages/laravel-junkies/url-shortener)
[![Latest Unstable Version](https://poser.pugx.org/laravel-junkies/url-shortener/v/unstable.svg)](https://packagist.org/packages/laravel-junkies/url-shortener)
[![License](https://poser.pugx.org/laravel-junkies/url-shortener/license.svg)](https://packagist.org/packages/laravel-junkies/url-shortener)


## Installation 

To get the latest version of Laravel Junkies UX9-URL-Shortener, you can use the  [Composer](https://getcomposer.org) require command:

```bash
$ composer require laravel-junkies/url-shortener
```

If you want to install a specific version, update your require block and run `composer update`:

```json
{
    "require": {
        "laravel-junkies/url-shortener": "1.0"
    }
}
```

Once Laravel Junkies UX9-URL-Shortener is installed, you need to register the service provider in `config/app.php`. Add the following to `providers`:

* `LaraJunkie\Url\UrlShortenerProvider::class,`

Also you can register the facade in `aliases` if you like.

* `'Shortener' => LaraJunkie\Url\Shortener::class,`


## Configuration

Laravel Junkies UX9-URL-Shortener requires a configuration file.

To get started, you have to publish it:

```bash
$ php artisan vendor:publish --tag=lj-shortener
```

This will create a `config/lj-shortener.php` file in your config directory. Here you have to add your UX9 API Token.


## Usage

```php
$url = Shortener::short('http://example.com');
```

## License

Laravel Junkies UX9-URL-Shortener is licensed under [The MIT License (MIT)](LICENSE).
