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
            ->name('filament-revealable-field')
            ->hasViews();
    }

    public function packageBooted()
    {
        FilamentAsset::register([
            Css::make('filament-revealable-field', __DIR__.'/../dist/filament-revealable-field.css'),
            Js::make('filament-revealable-field', __DIR__.'/../dist/filament-revealable-field.js'),
        ], 'filament-revealable-field');
    }
}
