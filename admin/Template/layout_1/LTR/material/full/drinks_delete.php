<?php 
include_once($_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.'config.php');
$drinksJson=file_get_contents($adminSources.'drinks.json');
$drinkItems = json_decode($drinksJson);
$id = $_POST['id'];
foreach($drinkItems  as $key=> $drinkItem){
    if($drinkItem->id == $id){
        
        break;
    }
}
array_splice($drinkItems,$key,1);
$productDataEncode = json_encode($drinkItems);
if(file_exists($adminSources.'drinks.json')){
    $result = file_put_contents($adminSources.'drinks.json',$productDataEncode);
    if($result){
        location('drinks.php');
    }
}else{
    echo "file not found";
}
