import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/sass/app.scss",
                "resources/js/app.js",
                "resources/sass/login/login.scss",
                "resources/css/adminlte/adminlte.css",
                "resources/js/adminlte/bootstrap.bundle.js",
                "resources/js/adminlte/adminlte.js",

                "resources/vendor/aos/aos.css",
                "resources/vendor/glightbox/css/glightbox.min.css",
                "resources/vendor/swiper/swiper-bundle.min.css",
                "resources/vendor/aos/aos.js",
                "resources/vendor/glightbox/js/glightbox.min.js",
                "resources/vendor/purecounter/purecounter_vanilla.js",
                "resources/vendor/swiper/swiper-bundle.min.js",
                "resources/vendor/php-email-form/validate.js",
                "resources/css/yummy/main.css",
                "resources/js/yummy/main.js",
            ],
            refresh: true,
        }),
    ],
});
