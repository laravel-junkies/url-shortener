<?php

namespace LaraJunkie\Url;

use Illuminate\Support\Facades\Facade;

/**
 * @author Tobias Maxham <git2019@maxham.de>
 */
class Shortener extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'lj.shortener';
    }
}
