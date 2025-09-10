<?php

namespace Roberts\LaravelFoundry;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Roberts\LaravelFoundry\Commands\LaravelFoundryCommand;

class LaravelFoundryServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-foundry')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel_foundry_table')
            ->hasCommand(LaravelFoundryCommand::class);
    }
}
