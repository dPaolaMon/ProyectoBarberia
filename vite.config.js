import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/css/header_style.css',
                'resources/css/footer_style.css',
                'resources/css/master_style.css',
                'resources/css/clientes/create.css'
            ],
            refresh: true,
        }),
    ],
});
