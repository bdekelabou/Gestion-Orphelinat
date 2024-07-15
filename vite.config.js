import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',


                //Mes themes css
                'resources/assets/vendors/mdi/css/materialdesignicons.min.css',
                'resources/assets/vendors/css/vendor.bundle.base.css',
                'resources/assets/css/style.css',
                'resources/assets/vendors/jvectormap/jquery-jvectormap.css',
                'resources/assets/vendors/flag-icon-css/css/flag-icon.min.css',
                'resources/assets/vendors/owl-carousel-2/owl.carousel.min.css',
                'resources/assets/vendors/owl-carousel-2/owl.theme.default.min.css',
                // 'resources/',
                // 'resources/',
                // 'resources/',
                // 'resources/',
                // 'resources/',

                'resources/assets/vendors/js/vendor.bundle.base.js',
                'resources/assets/js/off-canvas.js',
                'resources/assets/js/hoverable-collapse.js',
                'resources/assets/js/misc.js',
                'resources/assets/js/settings.js',
                'resources/assets/js/todolist.js"',
                'resources/assets/js/dashboard.js"',
                'resources/assets/vendors/chart.js/Chart.min.js',
                'resources/assets/vendors/progressbar.js/progressbar.min.js',
                'resources/assets/vendors/jvectormap/jquery-jvectormap.min.js',
                'resources/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js',
                'resources/assets/vendors/owl-carousel-2/owl.carousel.min.js',
                'resources/assets/vendors/bootstrap/js/bootstrap.bundle.min.js',
                'resources/assets/vendors/jquery/jquery.min.js',
                // 'resources/',
                // 'resources/',
                // 'resources/',
                // 'resources/',



            ],
            refresh: true,
            css: {
                devSourcemap: false,
              },

        }),

    ],
});
