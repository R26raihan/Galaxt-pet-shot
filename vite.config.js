import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css', // Pastikan path relatif benar
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
});

laravel({
    input: [
        'resources/css/style.css', // Ganti ke file yang ada
        'resources/js/app.js',
    ],
    refresh: true,
});
