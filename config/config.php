<?php

// Domain path
define("DOMAIN_PATH", dirname(__DIR__));

// Base URL
$base_url = base_url();
define("BASE_URL", $base_url);

// Page url
function page_url(){
    return (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
}

// base url function
function base_url() {
    return (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]/eam";
}

include DOMAIN_PATH .'/error_page/error_path.php';
