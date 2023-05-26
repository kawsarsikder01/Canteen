<?php 
include_once($_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.'config.php');
$fastFoodItemJson=file_get_contents($adminSources.'fast_food.json');
$fastFoodItems = json_decode($fastFoodItemJson);
$id = $_POST['id'];
foreach($fastFoodItems  as $key=> $fastFoodItem){
    if($fastFoodItem->id == $id){
        
        break;
    }
}
array_splice($fastFoodItems,$key,1);
$productDataEncode = json_encode($fastFoodItems);
if(file_exists($adminSources.'fast_food.json')){
    $result = file_put_contents($adminSources.'fast_food.json',$productDataEncode);
    if($result){
        location('fast_food.php');
    }
}else{
    echo "file not found";
}
