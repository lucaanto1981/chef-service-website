import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/css/app.css",
                "resources/scss/main.scss",
                "resources/js/app.js",
            ],
            refresh: true,
        }),
    ],
    //Inserire questa opzione prima di fare la build se si vuole mettere il sito in dev non nella root ma in una cartella specifica
    //base: "/laravel-website.it/build/",
});
