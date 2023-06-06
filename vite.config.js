import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/js/app.js', 
                'resources/scss/pages/app.scss',
                'resources/scss/pages/auth.scss',
            ],
            refresh: true,
        }),
    ],
});
