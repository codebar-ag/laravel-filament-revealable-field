<?php

use CodebarAg\FilamentRevealableField\Infolists\Components\RevealableEntry;
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
