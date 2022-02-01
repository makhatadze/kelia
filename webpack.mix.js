const mix = require('laravel-mix');
// const exec = require("child_process").exec;
// require("dotenv").config();
//
// /*
//  |--------------------------------------------------------------------------
//  | Mix Asset Management
//  |--------------------------------------------------------------------------
//  |
//  | Mix provides a clean, fluent API for defining some Webpack build steps
//  | for your Laravel application. By default, we are compiling the Sass
//  | file for the application as well as bundling up all the JS files.
//  |
//  */
//
// const glob = require("glob");
// const path = require("path");
//
// /*
//  |--------------------------------------------------------------------------
//  | Vendor assets
//  |--------------------------------------------------------------------------
//  */
//
// function mixAssetsDir(query, cb) {
//     (glob.sync("resources/" + query) || []).forEach((f) => {
//         f = f.replace(/[\\\/]+/g, "/");
//         cb(f, f.replace("resources", "public"));
//     });
// }
//
// const sassOptions = {
//     precision: 5,
//     includePaths: ["node_modules", "resources/assets/"],
// };
//
// // plugins Core stylesheets
// mixAssetsDir("scss/base/plugins/**/!(_)*.scss", (src, dest) =>
//     mix.sass(
//         src,
//         dest
//             .replace(/(\\|\/)scss(\\|\/)/, "$1css$2")
//             .replace(/\.scss$/, ".css"),
//         { sassOptions }
//     )
// );
//
// // pages Core stylesheets
// mixAssetsDir("scss/base/pages/**/!(_)*.scss", (src, dest) =>
//     mix.sass(
//         src,
//         dest
//             .replace(/(\\|\/)scss(\\|\/)/, "$1css$2")
//             .replace(/\.scss$/, ".css"),
//         { sassOptions }
//     )
// );
//
// // Core stylesheets
// mixAssetsDir("scss/base/core/**/!(_)*.scss", (src, dest) =>
//     mix.sass(
//         src,
//         dest
//             .replace(/(\\|\/)scss(\\|\/)/, "$1css$2")
//             .replace(/\.scss$/, ".css"),
//         { sassOptions }
//     )
// );
//
// // script js
// mixAssetsDir("js/scripts/**/*.js", (src, dest) => mix.scripts(src, dest));
//
// /*
//  |--------------------------------------------------------------------------
//  | Application assets
//  |--------------------------------------------------------------------------
//  */
//
// mixAssetsDir("vendors/js/**/*.js", (src, dest) => mix.scripts(src, dest));
// mixAssetsDir("vendors/css/**/*.css", (src, dest) => mix.copy(src, dest));
// mixAssetsDir("vendors/**/**/images", (src, dest) => mix.copy(src, dest));
// mixAssetsDir("vendors/css/editors/quill/fonts/", (src, dest) =>
//     mix.copy(src, dest)
// );
// mixAssetsDir("fonts", (src, dest) => mix.copy(src, dest));
// mixAssetsDir("fonts/**/**/*.css", (src, dest) => mix.copy(src, dest));
// mix.copyDirectory("resources/images", "public/images");
// mix.copyDirectory("resources/data", "public/data");
//
// mix.js("resources/js/core/app-menu.js", "public/js/core")
//     .sass("resources/scss/core.scss", "public/css", { sassOptions })
//     .sass("resources/assets/scss/style.scss", "public/css", { sassOptions });

mix.js('resources/js/admin.js', 'public/js').vue({
    output: {
        chunkFilename: 'js/[name].js?id=[chunkhash]',
    }
})
    .postCss('resources/css/admin.css', 'public/css', [
        require('postcss-apply'),
        require('postcss-import'),
        require('tailwindcss'),
        require('autoprefixer')
    ])
    .sass('resources/sass/admin.scss', 'public/css')
    .webpackConfig(require('./webpack.config'));

if (mix.inProduction()) {
    mix.version();
}