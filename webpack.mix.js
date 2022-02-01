const mix = require('laravel-mix');

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