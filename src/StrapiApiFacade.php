<?php

namespace Kimmidevs\StrapiApi;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Kimmidevs\StrapiApi\LaravelStrapi
 */
class StrapiApiFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'strapi-api';
    }
}
