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
                'resources/js/scripts/bootstrap.min.js',
                'resources/js/scripts/custom.min.js',
                'resources/js/scripts/jquery.easing.1.3.js',
                'resources/js/scripts/jquery.waypoints.min.js',
                'resources/js/scripts/npm.js',
                'resources/js/scripts/owl.carousel.js',
            ],
            refresh: true,
        }),
        vue(),
    ],
});
