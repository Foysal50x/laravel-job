<?php

namespace Faisal50x\LaravelJob;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Faisal50x\LaravelJob\Commands\LaravelJobCommand;

class LaravelJobServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-job')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-job_table')
            ->hasCommand(LaravelJobCommand::class);
    }
}
