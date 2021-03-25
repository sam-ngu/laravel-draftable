<?php

namespace Acadea\Draftable;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Acadea\Draftable\Commands\DraftableCommand;

class DraftableServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-draftable')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel_draftable_table')
            ->hasCommand(DraftableCommand::class);
    }
}
