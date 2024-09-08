<?php

namespace Paramientos\NextUi;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Paramientos\NextUi\Commands\NextUiCommand;

class NextUiServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('nextui')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_nextui_table')
            ->hasCommand(NextUiCommand::class);
    }
}
