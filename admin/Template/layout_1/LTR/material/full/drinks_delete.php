<?php 
include_once($_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.'config.php');
use SOURCE\Drink;
$id  = $_POST['id'];
$prodcut = new Drink;
$result = $prodcut->destroy($id);

 if($result){
    location('drinks.php');
}

