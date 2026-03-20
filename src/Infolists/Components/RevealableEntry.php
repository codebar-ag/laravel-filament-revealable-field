<?php

declare(strict_types=1);

namespace CodebarAg\FilamentRevealableField\Infolists\Components;

use Filament\Infolists\Components\TextEntry;
use Filament\Support\Components\Contracts\HasEmbeddedView;
use Illuminate\Support\Js;

class RevealableEntry extends TextEntry implements HasEmbeddedView
{
    public function toEmbeddedHtml(): string
    {
        $state = $this->getState();

        if (blank($state)) {
            return '';
        }

        $attributes = $this->getExtraAttributeBag()
            ->class([
                'fi-in-text',
            ]);

        $isCopyable = $this->isCopyable($state);

        if ($isCopyable) {
            $copyableStateJs = Js::from($this->getCopyableState($state) ?? $this->formatState($state));
            $copyMessageJs = Js::from($this->getCopyMessage($state));
            $copyMessageDurationJs = Js::from($this->getCopyMessageDuration($state));
        }

        ob_start(); ?>

        <div <?= $attributes->toHtml() ?>>
            <div class="flex items-center" x-data="{ show: false }">
                <div class="flex pr-1.5">
                    <div x-on:click="show = !show" class="inset-y-0 right-0 flex pr-1.5 w-8 h-8 items-center justify-center">
                        <div class="flex items-center rounded border border-gray-200 py-1 px-1 font-sans text-xs text-gray-400">
                            <svg x-show="!show" class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                <path d="M12 15a3 3 0 100-6 3 3 0 000 6z"/>
                                <path fill-rule="evenodd" d="M1.323 11.447C2.811 6.976 7.028 3.75 12.001 3.75c4.97 0 9.185 3.223 10.675 7.69.12.362.12.752 0 1.113-1.487 4.471-5.705 7.697-10.677 7.697-4.97 0-9.186-3.223-10.675-7.69a1.762 1.762 0 010-1.113zM17.25 12a5.25 5.25 0 11-10.5 0 5.25 5.25 0 0110.5 0z" clip-rule="evenodd"/>
                            </svg>
                            <svg x-show="show" class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                <path d="M3.53 2.47a.75.75 0 00-1.06 1.06l18 18a.75.75 0 101.06-1.06l-18-18zM22.676 12.553a11.249 11.249 0 01-2.631 4.31l-3.099-3.099a5.25 5.25 0 00-6.71-6.71L7.759 4.577a11.217 11.217 0 014.242-.827c4.97 0 9.185 3.223 10.675 7.69.12.362.12.752 0 1.113z"/>
                                <path d="M15.75 12c0 .18-.013.357-.037.53l-4.244-4.243A3.75 3.75 0 0115.75 12zM12.53 15.713l-4.243-4.244a3.75 3.75 0 004.243 4.243z"/>
                                <path d="M6.75 12c0-.619.107-1.213.304-1.764l-3.1-3.1a11.25 11.25 0 00-2.63 4.31c-.12.362-.12.752 0 1.114 1.489 4.467 5.704 7.69 10.675 7.69 1.5 0 2.933-.294 4.242-.827l-2.477-2.477A5.25 5.25 0 016.75 12z"/>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="flex-1 min-w-0">
                    <?php if ($isCopyable) { ?>
                    <div 
                        x-show="show" 
                        class="fi-size-sm fi-in-text-item fi-copyable fi-wrapped fi-in-text"
                        x-on:click="window.navigator.clipboard.writeText(<?= $copyableStateJs ?>)
                            $tooltip(<?= $copyMessageJs ?>, {
                                theme: $store.theme,
                                timeout: <?= $copyMessageDurationJs ?>,
                            })"
                    >
                        <?= e($state) ?>
                    </div>
                    <div 
                        x-show="!show" 
                        class="text-sm strikethrough fi-copyable cursor-pointer"
                        x-on:click="window.navigator.clipboard.writeText(<?= $copyableStateJs ?>)
                            $tooltip(<?= $copyMessageJs ?>, {
                                theme: $store.theme,
                                timeout: <?= $copyMessageDurationJs ?>,
                            })"
                    >
                        <?= str_repeat('*', strlen($state)) ?>
                    </div>
                    <?php } else { ?>
                    <p x-show="show" class="text-sm">
                        <?= e($state) ?>
                    </p>
                    <p x-show="!show" class="text-sm strikethrough"><?= str_repeat('*', strlen($state)) ?></p>
                    <?php } ?>
                </div>
            </div>
        </div>

        <?php return $this->wrapEmbeddedHtml(ob_get_clean());
    }
}
