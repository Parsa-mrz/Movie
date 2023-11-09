import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/css/app.css",
                "resources/css/style.css",
                "resources/css/responsive.css",
                "resources/css/bootstrap.min.css",

                "resources/js/app.js",
                "resources/js/smooth-scroll.min.js",
                "resources/js/jquery.sticky-kit.min.js",
                "resources/js/jquery-3.2.1.min.js",
                "resources/js/imagesloaded.pkgd.min.js",
                "resources/js/grid-blog.min.js",
                "resources/js/custom.js",
                "resources/js/bootstrap.min.js",
            ],
            refresh: true,
        }),
    ],
    build: {
        outDir: "public/build",
    },
});
