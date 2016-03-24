<?php

namespace LaraJunkie\Url;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Support\ServiceProvider;
use TobyMaxham\Ux9\Shortener;

/**
 * Class UrlShortenerProvider
 * @package LaraJunkie\Url
 * @author Tobias Maxham <git2016@maxham.de>
 */
class UrlShortenerProvider extends ServiceProvider
{

    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../lj-shortener.php' => config_path('lj-shortener.php'),
        ], 'lj-shortener');
    }

    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function register()
    {
        $this->registerUrlShortener($this->app);
    }

    /**
     * @param Application $app
     */
    private function registerUrlShortener($app)
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../lj-shortener.php', 'lj-shortener'
        );

        $app->singleton('lj.shortener', function () {
            $cfg = config('lj-shortener');
            return new Shortener(null, false, $cfg);
        });
        $app->alias('lj.shortener', Shortener::class);
    }
}
