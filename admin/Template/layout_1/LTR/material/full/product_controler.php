<?php 
include_once($_SERVER['DOCUMENT_ROOT'].'/'.'collage_canteen'.'/'.'config.php');

$name = $_POST['name'];
$type = $_POST['type'];
$description = $_POST['description'];
$cost_price = $_POST['cost-price'];
$sell_price = $_POST['sell-price'];
$img = $_POST['img'];
$e_sale ;
 if(isset($_POST['e-sale'])){
    $e_sale = $_POST['e-sale'];
 }else{
    $e_sale = null;
 }
$outdoor;
 if(isset($_POST['outdoor'])){
    $outdoor = $_POST['outdoor'];
 }else{
    $outdoor = null;
 }
$category = $_POST['category'];
$productsJson = file_get_contents($adminSources.'products.json');
$products = json_decode($productsJson);


if(count($products)>0){
   $id = [];
   foreach($products as $product){
      $id[] = $product->id;
   }
   sort($id);
   $lastIndex = count($id)-1;
   $highestId = $id[$lastIndex];
   $currentId = $highestId+1;

}else{
   $currentId = 1;
}

$data = [
    "id"=>$currentId,
    "name"=>$name,
    "type"=>$type,
    "description"=>$description,
    "costPrice"=>$cost_price,
    "sellPrice"=>$sell_price,
    "img"=>$img,
    "esale"=>$e_sale,
    "outdoor"=>$outdoor,
    "category"=>$category
];


$products[] = (object)$data;
$productData = json_encode($products);

if(file_exists($adminSources.'products.json')){
$result = file_put_contents($adminSources.'products.json',$productData);            
if($result){
   location('products.php');
}
}

