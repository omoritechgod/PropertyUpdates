import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/js/app.js',
                'resources/js/custom.js', // Add custom JS files here
                'resources/css/custom.css', // Add any additional CSS files here
            ],
            refresh: true,
        }),
    ],
});
