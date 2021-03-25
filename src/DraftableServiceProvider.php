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
            ->hasMigration('0000_00_00_000000_create_drafts_table');
    }
}
