var gulp = require('gulp');
var elixir = require('laravel-elixir');

elixir(function(mix) {
    mix.sass('app.sass');
});

// сборка вендора  css
elixir(function (mix) {
    mix.styles([
        '../../../node_modules/@fancyapps/fancybox/dist/jquery.fancybox.css',
        '../../../node_modules/hamburgers/dist/hamburgers.css',
        '../../../node_modules/jquery.mmenu/dist/jquery.mmenu.all.css',
        '../../../node_modules/responsive-tabs/css/responsive-tabs.css',
        '../../../node_modules/slick-carousel/slick/slick.css',
        '../../../node_modules/tooltipster/dist/css/tooltipster.bundle.css',
        '../../../node_modules/tooltipster/dist/css/plugins/tooltipster/sideTip/themes/tooltipster-sideTip-borderless.min.css',
        '../../../node_modules/tooltipster/dist/css/plugins/tooltipster/sideTip/themes/tooltipster-sideTip-shadow.min.css',
        '../../../node_modules/selectize/dist/css/selectize.css',
    ], 'public/css/vendor.css')
});

//сборка бутстрап css
elixir(function (mix) {
    mix.styles([
        '../../../node_modules/bootstrap/dist/css/bootstrap.css'
    ], 'public/css/bootstrap.css')
});

elixir(function (mix) {
    mix.styles([
        '../../../node_modules/bootstrap/dist/js/bootstrap.js'
    ], 'public/js/bootstrap.js')
});

// сборка вендора js
elixir(function (mix) {
    mix.scripts([
        '../../../node_modules/jquery/dist/jquery.min.js',
        '../../../node_modules/@fancyapps/fancybox/dist/jquery.fancybox.js',
        '../../../node_modules/jquery.mmenu/dist/jquery.mmenu.all.js',
        "../../../node_modules/responsive-tabs/js/jquery.responsiveTabs.js",
        '../../../node_modules/slick-carousel/slick/slick.js',
        '../../../node_modules/tooltipster/dist/js/tooltipster.bundle.js',
        '../../../node_modules/jquery.inputmask/dist/jquery.inputmask.bundle.js',
        '../../../node_modules/selectize/dist/js/standalone/selectize.js',
        '../../../node_modules/select2/dist/js/select2.js',
        '../../../node_modules/jquery-validation/dist/jquery.validate.min.js',
        '../../../node_modules/jquery-lazy/jquery.lazy.js',
    ], 'public/js/vendor.js')
});

// собирается js

elixir(function (mix) {
    mix.scripts([
        'common.js',
        'visitor.js',
        'contacts.js',
        'translation.js',
        'cart.js',
        'souce.js',
        'feedback.js',
        'setPizzeriaPopup.js',
        'validation-cart.js'
    ], 'public/js/app.js')
});
