# Changelog

All notable changes to `laravel-filament-revealable-field` will be documented in this file.

## [3.0.0] - 2025-07-11

### Added
- **Copyable functionality**: Added full copy-to-clipboard support with `->copyable()`
- **Custom copy messages**: Use `->copyMessage('Custom message')` to customize copy feedback
- **Custom copy text**: Use `->copyableState('Custom text')` to copy different text than displayed
- **Copy message duration**: Use `->copyMessageDuration(3000)` to set tooltip duration
- **Dynamic asterisk masking**: Hidden text now shows asterisks matching the actual text length
- **Copyable hidden state**: Both revealed and hidden text can be copied when copyable is enabled
- **Square toggle button**: Improved button design with consistent square shape
- **Left-aligned text**: Text is now left-aligned by default for better readability
- **Layout stability**: Fixed layout shifts when toggling between hidden and revealed states
- **Strict typing**: Added `declare(strict_types=1)` for better type safety

### Changed
- **BREAKING**: Upgraded to Filament 4 compatibility
- **BREAKING**: Changed from view-based rendering to embedded HTML using `HasEmbeddedView` interface
- **BREAKING**: Removed dependency on view files and asset compilation
- **BREAKING**: Updated PHP requirement to `^8.2`
- **BREAKING**: Updated Filament Infolists requirement to `^4.0`
- **BREAKING**: Updated Laravel requirement to `^12.0`
- **BREAKING**: Updated Livewire requirement to `^3.6`
- **BREAKING**: Updated Spatie Package Tools to `^1.19`
- **Component architecture**: Now uses Filament 4's new component architecture
- **HTML structure**: Improved HTML structure to match Filament 4 standards
- **CSS classes**: Updated to use Filament 4's CSS class naming conventions
- **Copyable implementation**: Uses Filament 4's `CanBeCopied` trait properly
- **State formatting**: Copyable state now defaults to formatted state value
- **Button styling**: Improved toggle button with better spacing and alignment

### Removed
- Removed `resources/views/` directory and Blade templates
- Removed `resources/css/` and `resources/js/` directories
- Removed `bin/build.js` and build scripts
- Removed `package.json` and Node.js dependencies
- Removed `tailwind.config.js`
- Removed asset registration from service provider
- Removed `php artisan filament:assets` requirement from installation
- Removed `dist/` directory and compiled assets
- Removed `node_modules/` directory

### Technical
- Updated component to use Filament 4's new component architecture
- Simplified package structure by removing view dependencies
- Improved performance by eliminating asset compilation step
- Enhanced code quality with strict typing
- Better integration with Filament 4's copyable system
- Improved accessibility with proper ARIA attributes
- Better responsive design with flexbox layout

### Documentation
- Updated README with Filament 4 compatibility table
- Added comprehensive features documentation
- Added copyable functionality examples
- Created UPGRADE.md with detailed migration guide
- Updated installation instructions
- Added CSS setup requirements
- Improved code examples and usage patterns

### Dependencies
- **Added**: `filament/infolists: ^4.0`
- **Added**: `illuminate/contracts: ^12.0`
- **Added**: `livewire/livewire: ^3.6`
- **Added**: `spatie/laravel-package-tools: ^1.19`
- **Updated**: `laravel/pint: ^1.21`
- **Updated**: `larastan/larastan: ^v3.1`
- **Updated**: `orchestra/testbench: ^10.0`
- **Updated**: `pestphp/pest: ^3.7`
- **Updated**: `phpstan/phpstan: ^2.0`

## [2.0.0] - 2024-XX-XX

### Changed
- **BREAKING**: Upgraded to Laravel 12 compatibility
- **BREAKING**: Updated PHP requirement to `^8.2 - ^8.3`
- **BREAKING**: Updated Filament Infolists requirement to `^3.3`
- **BREAKING**: Updated Livewire requirement to `^3.6`

### Removed
- Removed Laravel 11 compatibility
- Removed PHP 8.1 support

## [1.0.0] - 2024-XX-XX

### Added
- Initial release of Filament Revealable Field
- Basic revealable functionality with eye icon toggle
- Support for Laravel 11 and Filament 3.2
- View-based rendering with Blade templates
- Asset compilation with Tailwind CSS
- Basic documentation and examples
