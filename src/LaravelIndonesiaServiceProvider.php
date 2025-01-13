<?php

namespace Itix\LaravelIndonesia;

use Itix\LaravelIndonesia\Commands\LaravelIndonesiaCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelIndonesiaServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-indonesia')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel_indonesia_table')
            ->hasCommand(LaravelIndonesiaCommand::class);
    }
}
