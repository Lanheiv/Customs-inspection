import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                //Main
                    'resources/css/app.css', 
                    'resources/js/app.js',
                //Costom
                    'resources/js/scripts/login_script.js', 
                    'resources/js/scripts/user_changes_script.js',
                    'resources/js/scripts/nav-script.js',
            ],
            refresh: true,
        }),
        tailwindcss(),
    ],
});
