<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/style.css',
        'css/main-color.css',
        'bootstrap-grid.css',
        'icons.css',
        '/invoice.css',
        
        
        //plugins
        'css/plugins/revolutionslider.css',
        //'css/site.css',
        
    ];
    public $js = [
        'https://maps.googleapis.com/maps/api/js?key=AIzaSyAaoOT9ioUE4SA8h-anaFyU4K63a7H-7bc&amp;libraries=places&amp;callback=initAutocomplete',
        '../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js',
        'scripts/jquery-3.4.1.min.js',
        'scripts/jquery-migrate-3.1.0.min.js',
        'scripts/mmenu.min.js',
        'scripts/chosen.min.js',
        'scripts/slick.min.js',
        'scripts/rangeslider.min.js',
        'scripts/magnific-popup.min.js',
        'scripts/waypoints.min.js',
        'scripts/counterup.min.js',
        'scripts/jquery-ui.min.js',
        'scripts/tooltips.min.js',
        'scripts/custom.js',
        
        //Leaflet Js
        'scripts/leaflet.min.js',
        
        // Leaflet Maps Scripts
        'scripts/leaflet-markercluster.min.js',
        'scripts/leaflet-gesture-handling.min.js',
        'scripts/leaflet-listeo.js',
        
        //Leaflet Geocoder + Search Autocomplete // Docs: https://github.com/perliedman/leaflet-control-geocoder
        'scripts/leaflet-autocomplete.js',
        'scripts/leaflet-control-geocoder.js',
        
        //Typed Script
        'scripts/typed.js',
        
        //Style Switcher
        'scripts/switcher.js',
        
        'scripts/daterangepicker.js',
        'scripts/dropzone.js',
        'scripts/infobox.min.js',
        'scripts/isotope.min.js',
        'scripts/jquery.countdown.min.js',
        
        'scripts/maps.js',
        'scripts/markerclusterer.js',
        'scripts/moment.min.js',
        'scripts/quantityButtons.js',
        
        //Slider Js
        'scripts/themepunch.revolution.min.js',
        'scripts/themepunch.tools.min.js',
        
        
        
        //Extensions
        'scripts/extensions/revolution.extension.actions.min.js',
        'scripts/extensions/revolution.extension.carousel.min.js',
        'scripts/extensions/revolution.extension.kenburn.min.js',
        'scripts/extensions/revolution.extension.layeranimation.min.js',
        'scripts/extensions/revolution.extension.migration.min.js',
        'scripts/extensions/revolution.extension.navigation.min.js',
        'scripts/extensions/revolution.extension.parallax.min.js',
        'scripts/extensions/revolution.extension.slideanims.min.js',
        'scripts/extensions/revolution.extension.video.min.js',
        
        
    ];
    public $depends = [
        //'yii\web\YiiAsset',
        //'yii\bootstrap\BootstrapAsset',
    ];
}
