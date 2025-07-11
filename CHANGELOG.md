# Changelog

All notable changes to `laravel-filament-revealable-field` will be documented in this file.

## [3.0.0] - 2025-01-XX

### Changed
- **BREAKING**: Upgraded to Filament 4 compatibility
- **BREAKING**: Changed from view-based rendering to embedded HTML using `HasEmbeddedView` interface
- **BREAKING**: Removed dependency on view files and asset compilation
- **BREAKING**: Updated PHP requirement to `^8.2`
- **BREAKING**: Updated Filament Infolists requirement to `^4.0`

### Removed
- Removed `resources/views/` directory and Blade templates
- Removed `resources/css/` and `resources/js/` directories
- Removed `bin/build.js` and build scripts
- Removed `package.json` and Node.js dependencies
- Removed `tailwind.config.js`
- Removed asset registration from service provider
- Removed `php artisan filament:assets` requirement from installation

### Added
- Implemented `HasEmbeddedView` interface in `RevealableEntry`
- Added `toEmbeddedHtml()` method for inline HTML rendering
- Added strict typing with `declare(strict_types=1)`

### Technical
- Updated component to use Filament 4's new component architecture
- Simplified package structure by removing view dependencies
- Improved performance by eliminating asset compilation step
