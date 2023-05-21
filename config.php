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
function location($url){
    header("location:$url");
}

// function set_session($key, $val){
//     $_SESSION[$key] = $val;
// }
// function get_session($key){
//     if(array_key_exists($key,$_SESSION) && !empty($_SESSION[$key])){
//         return $_SESSION[$key];
//     }
//     return null;
// }
// function flush_session($key){
//     $value = get_session($key);
//     $_SESSION[$key] = '';
//     return $value;
// }
// function kill_session(){
//     session_destroy();
//     $_SESSION = null;
//     unset($_SESSION);
// }
function set_session($key, $val){
    $_SESSION[$key] = $val;
}

function get_session($key){

    if(array_key_exists($key, $_SESSION) && !empty($_SESSION[$key])){
        return $_SESSION[$key];
    }
    return null;
}

function flush_session($key){
    $value = get_session($key);
    $_SESSION[$key]='';
    return $value; 
}

function kill_session(){
    session_destroy();
    $_SESSION = null;
    unset($_SESSION);
}





$webroot = "http://campus_canteen.test".'/';
$docroot = $_SERVER['DOCUMENT_ROOT'];
$partialAdmin = $docroot.'/'.'collage_canteen'.'/'.'admin'.'/'.'partials'.'/';
$frontEndElement = $docroot.'/'.'collage_canteen'.'/'.'frontend'.'/'.'partials'.'/';
$adminSources = $docroot.'/'.'collage_canteen'.'/'.'admin'.'/'.'sources'.'/';
$frontEndSources =  $docroot.'/'.'collage_canteen'.'/'.'frontend'.'/'.'sources'.'/';