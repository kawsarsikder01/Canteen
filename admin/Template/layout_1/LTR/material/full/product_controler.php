<?php 
include_once($_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.'config.php');

use SOURCE\Product;
use SOURCE\Utility\Utility;

$fileName =uniqid().'_'. $_FILES['img']['name'];
$target = $_FILES['img']['tmp_name'];
$destination = $upload.$fileName;
if(move_uploaded_file($target,$destination)){
$img = $fileName;
}

// dd($_FILES);


$name = Utility::sanitize($_POST['name']);
$type = Utility::sanitize ($_POST['type']);
$description = Utility::sanitize ($_POST['description']);
$cost_price = Utility::sanitize ($_POST['cost-price']);
$sell_price = Utility::sanitize ($_POST['sell-price']);
$img = $img;
// dd($img);
$e_sale ;
 if(isset($_POST['e-sale'])){
    $e_sale = Utility::sanitize ($_POST['e-sale']);
 }else{
    $e_sale = null;
 }
$outdoor;
 if(isset($_POST['outdoor'])){
    $outdoor = Utility::sanitize ($_POST['outdoor']);
 }else{
    $outdoor = null;
 }
$category = Utility::sanitize ($_POST['category']);
// $productsJson = file_get_contents($adminSources.'products.json');
// $products = json_decode($productsJson);
$product = new Product();
$data = $product->data($name,$type,$description,$cost_price,$sell_price,$img,$e_sale,$outdoor,$category);
// dd($data);
$result = $product->store($data);

if($result){
   location('products.php');
}
// if(count($products)>0){
//    $id = [];
//    foreach($products as $product){
//       $id[] = $product->id;
//    }
//    sort($id);
//    $lastIndex = count($id)-1;
//    $highestId = $id[$lastIndex];
//    $currentId = $highestId+1;

// }else{
//    $currentId = 1;
// }

// $data = [
//     "id"=>$currentId,
//     "name"=>$name,
//     "type"=>$type,
//     "description"=>$description,
//     "costPrice"=>$cost_price,
//     "sellPrice"=>$sell_price,
//     "img"=>$img,
//     "esale"=>$e_sale,
//     "outdoor"=>$outdoor,
//     "category"=>$category
// ];

// $products[] = (object)$data;
// $productData = json_encode($products);

// if(file_exists($adminSources.'products.json')){
// $result = file_put_contents($adminSources.'products.json',$productData);            

// }

