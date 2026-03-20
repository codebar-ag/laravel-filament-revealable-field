# Upgrade Guide

This guide will help you upgrade from previous versions of `laravel-filament-revealable-field` to version 3.0.0 (Filament 4).

## Upgrading from v2.x to v3.0.0

### Breaking Changes

#### 1. Filament Version Requirement
- **Before**: Filament Infolists ^3.2
- **After**: Filament Infolists ^4.0

#### 2. PHP Version Requirement
- **Before**: PHP ^8.2 - ^8.3
- **After**: PHP ^8.2

#### 3. Laravel Version Requirement
- **Before**: Laravel 11.x
- **After**: Laravel 12.x

### Installation Changes

#### 1. Update Composer Dependencies
```bash
# Update the package
composer require codebar-ag/laravel-filament-revealable-field:^3.0

# Update Filament to v4
composer require filament/infolists:^4.0
```

#### 2. Remove Asset Compilation
**Before (v2.x):**
```bash
composer require codebar-ag/laravel-filament-revealable-field
php artisan filament:assets
```

**After (v3.0.0):**
```bash
composer require codebar-ag/laravel-filament-revealable-field
```

#### 3. Add CSS Source Directive
Add the following to your `resources/css/app.css`:

```css
@source '../../vendor/codebar-ag/laravel-filament-revealable-field/src/Infolists/Components/RevealableEntry.php';
```

### Code Changes

#### 1. Component Usage (No Changes Required)
The component usage remains the same:

```php
use CodebarAg\FilamentRevealableField\Infolists\Components\RevealableEntry;

public function infolist(Infolist $infolist): Infolist
{
    return $infolist
        ->schema([
            RevealableEntry::make('field_name')
                ->label('Field Label')
                ->copyable()
                ->copyMessage('Value copied!')
                ->copyableState('Custom text to copy');
        ]);
}
```

#### 2. New Features Available
The following features are now available in v3.0.0:

- **Copyable functionality**: Use `->copyable()` to enable copy-to-clipboard
- **Custom copy messages**: Use `->copyMessage('Custom message')`
- **Custom copy text**: Use `->copyableState('Custom text')`
- **Copy message duration**: Use `->copyMessageDuration(3000)`

### Removed Features

#### 1. Asset Compilation
- No more `php artisan filament:assets` required
- No more Node.js build process
- No more `package.json` or `tailwind.config.js` files

#### 2. View Files
- No more Blade template files
- Component now uses embedded HTML rendering

### Migration Checklist

- [ ] Update PHP to ^8.2
- [ ] Update Laravel to 12.x
- [ ] Update Filament Infolists to ^4.0
- [ ] Update package to ^3.0
- [ ] Add CSS source directive to `app.css`
- [ ] Remove `php artisan filament:assets` from deployment scripts
- [ ] Test component functionality
- [ ] Update any custom styling if needed

### Troubleshooting

#### Component Not Rendering
If the component doesn't render properly:

1. Ensure you've added the CSS source directive to your `app.css`
2. Clear your application cache: `php artisan cache:clear`
3. Clear your view cache: `php artisan view:clear`

#### Copyable Functionality Not Working
If copy-to-clipboard doesn't work:

1. Ensure you're calling `->copyable()` on the component
2. Check browser console for JavaScript errors
3. Verify the component is properly loaded

#### Styling Issues
If styling looks incorrect:

1. Ensure the CSS source directive is properly added
2. Check for CSS conflicts with other styles
3. Clear your asset cache: `php artisan optimize:clear`

### Support

If you encounter any issues during the upgrade process:

1. Check the [GitHub Issues](https://github.com/codebar-ag/laravel-filament-revealable-field/issues)
2. Review the [CHANGELOG.md](CHANGELOG.md) for detailed changes
3. Create a new issue with your specific problem

## Upgrading from v1.x to v3.0.0

If you're upgrading from v1.x, follow the v2.x to v3.0.0 guide above, but also note:

- Package name changed from `codebar-ag/filament-revealable-field` to `codebar-ag/laravel-filament-revealable-field`
- Update your `composer.json` accordingly
- Update any references to the old package name in your documentation 