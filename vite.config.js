import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/bootstrap.css',
                'resources/js/bootstrap.js',
                'resources/js/app.js'],
            refresh: true,

        }),
    ],
    build: {
        minify: false
    }
});
