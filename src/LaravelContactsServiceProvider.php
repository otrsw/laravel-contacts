<?php

namespace Otrsw\LaravelContacts;

use Otrsw\LaravelContacts\Commands\LaravelContactsCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelContactsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-contacts')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-contacts_table')
            ->hasCommand(LaravelContactsCommand::class);
    }
}
