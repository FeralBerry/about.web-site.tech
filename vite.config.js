import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/js/frontJS/front_app.js',
                'resources/js/backJS/back_app.js',
            ],
            refresh: true,
        }),
        vue(),
    ],
});
