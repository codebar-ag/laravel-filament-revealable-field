<img src="https://banners.beyondco.de/Laravel%20Filament%20Revealable%20Field.png?theme=light&packageManager=composer+require&packageName=codebar-ag%2Flaravel-filament-revealable-field&pattern=circuitBoard&style=style_1&description=A+Laravel+Filament+Revealable+Field+integration.&md=1&showWatermark=1&fontSize=100px&images=light-bulb">

[![Latest Version on Packagist](https://img.shields.io/packagist/v/codebar-ag/laravel-filament-revealable-field.svg?style=flat-square)](https://packagist.org/packages/codebar-ag/laravel-filament-revealable-field)
[![GitHub-Tests](https://github.com/codebar-ag/laravel-filament-revealable-field/actions/workflows/run-tests.yml/badge.svg?branch=main)](https://github.com/codebar-ag/laravel-filament-revealable-field/actions/workflows/run-tests.yml)
[![GitHub Code Style](https://github.com/codebar-ag/laravel-filament-revealable-field/actions/workflows/fix-php-code-style-issues.yml/badge.svg?branch=main)](https://github.com/codebar-ag/laravel-filament-revealable-field/actions/workflows/fix-php-code-style-issues.yml)
[![Total Downloads](https://img.shields.io/packagist/dt/codebar-ag/laravel-filament-revealable-field.svg?style=flat-square)](https://packagist.org/packages/codebar-ag/laravel-filament-revealable-field)

## 💡 What is Filament Revealable Field?

Filament Revealable Field is an Infolist Field for toggling the advisability of data.

## 🛠 Requirements

| Package |     PHP     | Laravel | Filament Infolists |
|:-------:|:-----------:|:-------:|--------------------|
| v12.0.0 | ^8.2 - ^8.4 |  12.x   | ^3.3               |
| v2.0.0  | ^8.2 - ^8.3 |  11.x   | ^3.2               |
| v1.0.0  | ^8.2 - ^8.3 |  11.x   | ^3.2               |


## ⚙️ Installation

You can install the package via composer:

```bash
composer require codebar-ag/laravel-filament-revealable-field
php artisan filament:assets
```


## Usage

Infolists:
```php
use CodebarAg\FilamentRevealableField\Infolists\Components\RevealableEntry;

...

public function form(Form $form): Form
{
    return $form
        ->schema([
            RevealableEntry::make('revealable')
                ->label('REVEALABLE');
        ]);
}
...
````

## 🚧 Testing

Copy your own phpunit.xml-file.

```bash
cp phpunit.xml.dist phpunit.xml
```

Run the tests:

```bash
./vendor/bin/pest
```

## 🚧 Building

```bash
node bin/build
npx tailwindcss -i resources/css/laravel-filament-revealable-field.css -o dist/laravel-filament-revealable-field.css
```

Note: there is no output, but the build will be in the `dist` directory.

## 📝 Changelog

Please see [CHANGELOG](CHANGELOG.md) for recent changes.

## ✏️ Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

```bash
composer test
```

### Code Style

```bash
./vendor/bin/pint
```

## 🧑‍💻 Security Vulnerabilities

Please review [our security policy](.github/SECURITY.md) on reporting security vulnerabilities.

## 🙏 Credits
- [Rhys Lees](https://github.com/RhysLees)
- [Sebastian Fix](https://github.com/StanBarrows)
- [All Contributors](../../contributors)
- [Skeleton Repository from Spatie](https://github.com/spatie/package-skeleton-laravel)
- [Laravel Package Training from Spatie](https://spatie.be/videos/laravel-package-training)

## 🎭 License

The MIT License (MIT). Please have a look at [License File](LICENSE.md) for more information.
