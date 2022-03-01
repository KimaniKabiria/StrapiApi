<?php

namespace Unbxd\StrapiApi;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Unbxd\StrapiApi\LaravelStrapi
 */
class StrapiApiFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'strapi-api';
    }
}
