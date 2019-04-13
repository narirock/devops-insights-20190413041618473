const mix = require('laravel-mix');

mix.copy('resources/assets/images','public/images/');

mix.combine([
   'node_modules/bootstrap/dist/css/bootstrap.min.css',
   'node_modules/font-awesome/css/font-awesome.min.css',
   'node_modules/animate.css/animate.min.css',
   'node_modules/et-line/style.css',
   'resources/assets/css/nivo-lightbox.css',
   'resources/assets/css/nivo_themes/default/default.css',
   'resources/assets/css/style.css',
   'resources/assets/css/estilo.css',
   'resources/assets/css/hover.css',
   'resources/assets/css/fade-down.css',
   'resources/assets/css/webslidemenu.css',
   'resources/assets/css/white-red.css',
   'node_modules/flickity/dist/flickity.min.css',
   'node_modules/fotorama/fotorama.css',
   'node_modules/owl.carousel/dist/assets/owl.carousel.min.css',
   'node_modules/owl.carousel/dist/assets/owl.theme.default.min.css',
   'node_modules/sweetalert2/dist/sweetalert2.min.css'
],'public/css/app.css');

mix.combine([
   'node_modules/jquery/dist/jquery.min.js',
   'node_modules/flickity/dist/flickity.pkgd.min.js',
   'node_modules/fotorama/fotorama.js',
   'node_modules/owl.carousel/dist/owl.carousel.min.js',
   'node_modules/sweetalert2/dist/sweetalert2.min.js',
   'node_modules/bootstrap/dist/js/bootstrap.min.js',
   'node_modules/jquery.easing/jquery.easing.min.js',
   'resources/assets/js/scrolling-nav.js',
   'resources/assets/js/webslidemenu.js',
   'node_modules/isotope-layout/dist/isotope.pkgd.min.js',
   'resources/assets/js/custom.js',
   'resources/assets/js/main.js'
],'public/js/app.js');