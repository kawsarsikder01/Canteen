<?php 
include_once($_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.'config.php');
$drinksJson=file_get_contents($adminSources.'drinks.json');
$drinkItems = json_decode($drinksJson);

$currentId;
if($drinkItems > 0){
    $id = [];
    foreach($drinkItems as $drinkItem){
        $id []= $drinkItem->id;
    }
    sort($id);
    $lastIndex = count($id)-1;
    $highestId = $id[$lastIndex];
    $currentId = $highestId+1;
}else{
    $currentId = 1;
}
// dd($_FILES);

$img;

$fileName = uniqid().'_'. $_FILES['img']['name'];
$target = $_FILES['img']['tmp_name'];
$destination = $upload.$fileName;
if(move_uploaded_file($target,$destination)){
    $img = $fileName;
}

$id = $currentId;
$name = $_POST['name'];
$type = $_POST['type'];
$category =$_POST['category'];
$description = $_POST['description'];
$cost_price = $_POST['cost-price'];
$sell_price = $_POST['sell-price'];
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
$data = [
    
    "id"=>$id ,
    "img"=> $img,
    "name"=> $name,
    "type"=> $type,
    "description"=>$description,
    "cost_price"=>$cost_price,
    "sell_price"=> $sell_price ,
    "category"=>$category,
    "esale"=> $esale,
    "outdoor"=> $outdoor
];
$drinkItems[]=(object)$data;
$drinksDataEncode = json_encode($drinkItems);
if(file_exists($adminSources.'drinks.json')){
    $result = file_put_contents($adminSources.'drinks.json',$drinksDataEncode);
    if($result){
        location('drinks.php');
    }
}
