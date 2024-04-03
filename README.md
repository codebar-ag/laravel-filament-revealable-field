<img src="https://banners.beyondco.de/Filament%20Revealable%20Field.png?theme=light&packageManager=composer+require&packageName=codebar-ag%2Ffilament-revealable-field&pattern=circuitBoard&style=style_2&description=A+Laravel+Filament+Revealable+Field+integration.&md=1&showWatermark=1&fontSize=150px&images=home&widths=500&heights=500">

[![Latest Version on Packagist](https://img.shields.io/packagist/v/codebar-ag/filament-revealable-field.svg?style=flat-square)](https://packagist.org/packages/codebar-ag/filament-revealable-field)
[![Total Downloads](https://img.shields.io/packagist/dt/codebar-ag/filament-revealable-field.svg?style=flat-square)](https://packagist.org/packages/codebar-ag/filament-revealable-field)
[![run-tests](https://github.com/codebar-ag/filament-revealable-field/actions/workflows/run-tests.yml/badge.svg)](https://github.com/codebar-ag/filament-revealable-field/actions/workflows/run-tests.yml)
[![PHPStan](https://github.com/codebar-ag/filament-revealable-field/actions/workflows/phpstan.yml/badge.svg)](https://github.com/codebar-ag/filament-revealable-field/actions/workflows/phpstan.yml)

## 💡 What is Filament Revealable Field?

Filament Revealable Field is a Filament wrapper for Codemirror.

## 🛠 Requirements

| Package 	 | PHP 	 | Laravel 	     | Filament Infolists |
|-----------|-------|---------------|--------------------|
| v1.0      | ^8.1  | ^10.45, ^11.0 | ^3.2               |


## ⚙️ Installation

You can install the package via composer:

```bash
composer require codebar-ag/filament-revealable-field
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
npx tailwindcss -i resources/css/filament-revealable-field.css -o dist/filament-revealable-field.css
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
