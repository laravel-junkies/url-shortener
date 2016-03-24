<?php

namespace LaraJunkie\Url;

use Illuminate\Support\Facades\Facade;

/**
 * Class Shortener
 * @package LaraJunkie\Url
 * @author Tobias Maxham <git2016@maxham.de>
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