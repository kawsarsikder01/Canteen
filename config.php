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



// .DIRECTORY_SEPARATOR.'collage_canteen'
// .DIRECTORY_SEPARATOR.'collage_canteen'

$webroot = "http://collage_canteen.test/".DIRECTORY_SEPARATOR.'uploads'.DIRECTORY_SEPARATOR;
$docroot = $_SERVER['DOCUMENT_ROOT'];
$partialAdmin = $docroot.DIRECTORY_SEPARATOR.'admin'.DIRECTORY_SEPARATOR.'partials'.DIRECTORY_SEPARATOR;
$frontEndElement = $docroot.DIRECTORY_SEPARATOR.'frontend'.DIRECTORY_SEPARATOR.'partials'.DIRECTORY_SEPARATOR;
$adminSources = $docroot.DIRECTORY_SEPARATOR.'admin'.DIRECTORY_SEPARATOR.'sources'.DIRECTORY_SEPARATOR;
$frontEndSources =  $docroot.DIRECTORY_SEPARATOR.'frontend'.DIRECTORY_SEPARATOR.'sources'.DIRECTORY_SEPARATOR;
$upload = $docroot.DIRECTORY_SEPARATOR.'uploads'.DIRECTORY_SEPARATOR;