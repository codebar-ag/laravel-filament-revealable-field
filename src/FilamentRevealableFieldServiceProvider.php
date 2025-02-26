<?php

namespace CodebarAg\FilamentRevealableField;

use Filament\Support\Assets\Css;
use Filament\Support\Assets\Js;
use Filament\Support\Facades\FilamentAsset;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class FilamentRevealableFieldServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-filament-revealable-field')
            ->hasViews();
    }

    public function packageBooted()
    {
        FilamentAsset::register([
            Css::make('laravel-filament-revealable-field', __DIR__.'/../dist/laravel-filament-revealable-field.css'),
            Js::make('laravel-filament-revealable-field', __DIR__.'/../dist/laravel-filament-revealable-field.js'),
        ], 'laravel-filament-revealable-field');
    }
}
