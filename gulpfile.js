var elixir = require('laravel-elixir');

var paths = {
  'jquery': './vendor/bower_components/jquery/',
  'bootstrap': './vendor/bower_components/bootstrap-sass-official/assets/',
  'font_awesome': './vendor/bower_components/font-awesome/',
  'vue': './vendor/bower_components/vue/',
  'vue_resource': './vendor/bower_components/vue-resource/'
};

elixir(function (mix) {
  mix.sass("style.scss",
           "public/css",
           {includePaths: [
              paths.bootstrap + 'stylesheets/',
              paths.font_awesome + 'scss'
              ]}
     )
    .copy(paths.font_awesome + 'fonts/**', 'public/fonts')
    .scripts([
      paths.jquery + "dist/jquery.js",
      paths.vue + "dist/vue.js",
      paths.vue_resource + "dist/vue-resource.js",
      paths.bootstrap + "javascripts/bootstrap.js"
    ], 'public/js/app.js', './');
});
