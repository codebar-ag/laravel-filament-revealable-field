<?php

use CodebarAg\FilamentRevealableField\Infolists\Components\RevealableEntry;
use CodebarAg\FilamentRevealableField\Tests\Fixtures\SecretLevel;
use Filament\Schemas\Concerns\InteractsWithSchemas;
use Filament\Schemas\Contracts\HasSchemas;
use Filament\Schemas\Schema;
use Livewire\Component;

function renderRevealableEntry(mixed $state, ?callable $configure = null): string
{
    $livewire = new class extends Component implements HasSchemas
    {
        use InteractsWithSchemas;

        public function render(): string
        {
            return '<div></div>';
        }
    };

    $entry = RevealableEntry::make('secret')->state($state);

    if ($configure) {
        $configure($entry);
    }

    $entry->container(Schema::make($livewire));

    return $entry->toEmbeddedHtml();
}

it('renders nothing for a blank state', function () {
    expect(renderRevealableEntry(null))->toBe('');
});

it('renders the state and a mask of the same length', function () {
    $html = renderRevealableEntry('secret');

    expect($html)
        ->toContain('secret')
        ->toContain('>******<');
});

it('escapes the state', function () {
    $html = renderRevealableEntry('<script>alert(1)</script>');

    expect($html)
        ->not->toContain('<script>')
        ->toContain('&lt;script&gt;alert(1)&lt;/script&gt;');
});

it('escapes the copyable state inside the click handler', function () {
    $html = renderRevealableEntry('a"b\'c<d>', fn (RevealableEntry $entry) => $entry->copyable());

    expect($html)
        ->toContain('fi-copyable')
        ->not->toContain('a"b')
        ->not->toContain('<d>');
});

it('renders a numeric state', function () {
    $html = renderRevealableEntry(12345);

    expect($html)
        ->toContain('12345')
        ->toContain('>*****<');
});

it('renders a numeric state when copyable', function () {
    $html = renderRevealableEntry(1234, fn (RevealableEntry $entry) => $entry->copyable());

    expect($html)
        ->toContain('1234')
        ->toMatch('/>\s*\*{4}\s*</');
});

it('masks a backed enum state by its value', function () {
    $html = renderRevealableEntry(SecretLevel::High);

    expect($html)->toContain('>****<');
});
