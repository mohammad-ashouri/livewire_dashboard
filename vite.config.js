import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import path from 'path';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/css/satoshi.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
    resolve: {
        alias: {
            'livewire/livewire': path.resolve(__dirname, 'vendor/livewire/livewire/dist/livewire.esm.js'),
        },
    },
});
