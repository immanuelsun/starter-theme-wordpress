const { mix } = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your theme. By default, we are compiling the Sass file for the theme 
 | as well as bundling up all the JS files.
 |
 */

// .copy('node_modules/tinymce/**/*', 'tinymce/', false)

mix.js('assets/scripts/main.js', 'scripts/')
   .js('assets/scripts/customizer.js', 'scripts/')
   .sass('assets/styles/main.scss', 'styles/')
   .copy('assets/images', 'dist/images/', false)
   .setPublicPath('dist')
   .options({
     processCssUrls: false
   });

if (mix.config.inProduction) {
  mix.version();
}
