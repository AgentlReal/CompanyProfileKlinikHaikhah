import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
            input: ['public/css/global.css', 'public/js/global.js'],
            refresh: true,
        }),
        tailwindcss(),
    ],
});
