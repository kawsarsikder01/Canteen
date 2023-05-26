<?php 

include_once($_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.'config.php');
$fastFoodItemJson=file_get_contents($adminSources.'fast_food.json');
$fastFoodItems = json_decode($fastFoodItemJson);
$old_img = $_POST['old_img'];
$img;
if(array_key_exists('img',$_FILES) && !empty($_FILES['img']['name']) ){
    $fileName = uniqid().'_'. $_FILES['img']['name'];
    $target = $_FILES['img']['tmp_name'];
    $destination = $upload.$fileName;

    if(move_uploaded_file($target,$destination)){
        $img = $fileName;
    }
    if(file_exists($upload.$old_img)){
        unlink($upload.$old_img);
    }
}else{
    $img = $old_img;
}


$esale ;
if(isset($_POST['e-sale'])){
    $esale = $_POST['e-sale'];
}else{
    $esale = null;
}
$outdoor ;
if(isset($_POST['outdoor'])){
    $outdoor = $_POST['outdoor'];
}else{
    $outdoor = null;
}
$id = $_POST['id'];

$data = [
    "id"=>$_POST['id'] ,
    "img"=> $img,
    "name"=> $_POST['name'],
    "type"=> $_POST['type'],
    "description"=>$_POST['description'],
    "cost_price"=>$_POST['cost-price'],
    "sell_price"=> $_POST['sell-price'] ,
    "category"=>$_POST['category'],
    "esale"=> $esale,
    "outdoor"=> $outdoor
];
foreach($fastFoodItems as $key=> $fastFoodItem){
    if($fastFoodItem->id == $id){
        break;
    }
}
$fastFoodItems[$key]=(object)$data;
$fastFoodItemsDataEncode = json_encode($fastFoodItems);
if(file_exists($adminSources.'fast_food.json')){
$result = file_put_contents($adminSources.'fast_food.json',$fastFoodItemsDataEncode);
if($result){
    location('fast_food.php');
}
}
