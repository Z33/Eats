const mix = require("laravel-mix");
const tailwindcss = require("tailwindcss");

mix.browserSync({
    proxy: "eats.local",
    files: ["*.php", "dist/css/*.css", "src/js/*.js"],
});

mix.sass("src/css/styles.scss", "dist/css/styles.css").options({
    processCssUrls: false,
    postCss: [tailwindcss("./tailwind.config.js")],
});
