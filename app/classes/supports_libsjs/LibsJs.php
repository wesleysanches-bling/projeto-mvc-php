<?php

namespace app\classes\supports_libsjs;

trait LibsJs
{

    public function carousel_min_js() {
        $js = URL_BASE . 'assets/vendor/owlcarorel.js/owl.carousel.min.js';
        return $js;
    }

    public function carousel_js() {
        $js = URL_BASE . 'assets/vendor/owlcarorel.js/owl.carousel.js';
        return $js;
    }

    public function jquery3() {
        $js = 'https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js';
        return $js;
    }

    public function bootstrapjs5(){
        $js = 'https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.bundle.min.js';
        return $js;
    }

    public function ui_js()
    {
        $js = 'https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js';
        return $js;
    }

    public function maps() {
        $js = 'https://maps.google.com/maps/api/js?sensor=false';
        return $js;
    }
}
