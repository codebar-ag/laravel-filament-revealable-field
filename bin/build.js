import * as esbuild from 'esbuild';

esbuild.build({
    entryPoints: ['./resources/js/laravel-filament-revealable-field.js'],
    outfile: './dist/laravel-filament-revealable-field.js',
    bundle: true,
    mainFields: ['module', 'main'],
    platform: 'browser',
    treeShaking: true,
    target: ['es2020'],
    minify: true,
});
