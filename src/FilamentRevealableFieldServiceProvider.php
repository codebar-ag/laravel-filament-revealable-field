<?php

declare(strict_types=1);

namespace CodebarAg\FilamentRevealableField;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class FilamentRevealableFieldServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/package-skeleton-laravel
         */
        $package
            ->name('laravel-filament-revealable-field');
    }
}
