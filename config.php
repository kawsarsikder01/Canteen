<?php

function d($var){
    echo "<pre>";
    print_r($var);
    echo "</pre>";
}

function dd($var){
d($var);
die();
}
$webroot = "http://campus_canteen.test".'/';
$docroot = $_SERVER['DOCUMENT_ROOT'];
$partialAdmin = $docroot.'/'.'collage_canteen'.'/'.'admin'.'/'.'partials'.'/';
$frontEndElement = $docroot.'/'.'collage_canteen'.'/'.'frontend'.'/'.'partials'.'/';
$adminSources = $docroot.'/'.'collage_canteen'.'/'.'admin'.'/'.'sources'.'/';
$frontEndSources =  $docroot.'/'.'collage_canteen'.'/'.'frontend'.'/'.'sources'.'/';