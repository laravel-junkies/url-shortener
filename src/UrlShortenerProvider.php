<?php

namespace LaraJunkie\Url;

use TobyMaxham\Ux9\Shortener;
use Illuminate\Support\ServiceProvider;
use Illuminate\Contracts\Foundation\Application;

/**
 * @author Tobias Maxham <git2019@maxham.de>
 */
class UrlShortenerProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../lj-shortener.php' => config_path('lj-shortener.php'),
        ], 'lj-shortener');
    }

    /**
     * Register bindings in the container.
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
            __DIR__.'/../lj-shortener.php',
            'lj-shortener'
        );

        $app->singleton('lj.shortener', function () {
            $cfg = config('lj-shortener');

            return new Shortener(null, false, $cfg);
        });
        $app->alias('lj.shortener', Shortener::class);
    }
}
