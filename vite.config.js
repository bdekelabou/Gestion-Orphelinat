import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',


                //Mes themes css

                // 'resources/assets/img/kaiadmin/favicon.ico',
                // 'resources/assets/css/bootstrap.min.css',
                // 'resources/assets/css/plugins.min.css',
                // 'resources/assets/css/kaiadmin.min.css',
                // 'resources/assets/css/demo.css',

                
                'resources/',
                'resources/',
                'resources/',
                'resources/',



            ],
            refresh: true,
            css: {
                devSourcemap: false,
              },

        }),

    ],
});
