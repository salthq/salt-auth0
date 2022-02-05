<?php

namespace Salt\Auth;

use Salt\Auth\Commands\AuthCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class AuthServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('auth')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_users_table')
            ->hasCommand(AuthCommand::class);
    }
}