<?php 
include_once($_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.'config.php');
$bakeryItemJson=file_get_contents($adminSources.'bakery_item.json');
$bakeryItems = json_decode($bakeryItemJson);
$id = $_POST['id'];
foreach($bakeryItems  as $key=> $bakeryItem){
    if($bakeryItem->id == $id){
        
        break;
    }
}
array_splice($bakeryItems,$key,1);
$productDataEncode = json_encode($bakeryItems);
if(file_exists($adminSources.'bakery_item.json')){
    $result = file_put_contents($adminSources.'bakery_item.json',$productDataEncode);
    if($result){
        location('bakery_item.php');
    }
}else{
    echo "file not found";
}
