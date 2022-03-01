<?php

namespace Kimmidevs\StrapiApi;


use Kimmidevs\StrapiApi\Commands\LaravelStrapiCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Illuminate\Support\ServiceProvider;

class StrapiApiServiceProvider extends ServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('laravel-strapi')
            ->hasConfigFile()
            ->hasCommand(LaravelStrapiCommand::class);
    }
    
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
        // include __DIR__.'/routes.php';
    }
}
