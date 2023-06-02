<?php 
include_once($_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.'config.php');
use SOURCE\Fastfood;
$id  = $_POST['id'];
$prodcut = new Fastfood;
$result = $prodcut->destroy($id);

 if($result){
    location('fast_food.php');
}


