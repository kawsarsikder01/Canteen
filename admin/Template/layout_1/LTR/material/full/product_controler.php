<?php 
include_once($_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.'config.php');

use SOURCE\Product;
use SOURCE\Utility\Utility;
use Intervention\Image\ImageManager;

$manager = new ImageManager(['driver' => 'imagick']);
$filename = uniqid()."_".$_FILES['img']['name'];

try{
    $image = $manager->make($_FILES['img']['tmp_name'])
                    ->save($upload.$filename);
    $img = $filename ;
}catch(Intervention\Image\Exception\NotWritableException $e){
    dd($e);
}catch(Exception $e){
    dd($e);
}


// $fileName =uniqid().'_'. $_FILES['img']['name'];
// $target = $_FILES['img']['tmp_name'];
// $destination = $upload.$fileName;
// if(move_uploaded_file($target,$destination)){
// $img = $fileName;
// }

// dd($_FILES);

$product = new Product();

$product->name = Utility::sanitize($_POST['name']);
$product->type = Utility::sanitize ($_POST['type']);
$product->description = Utility::sanitize ($_POST['description']);
$product->costPrice = Utility::sanitize ($_POST['cost-price']);
$product->sellPrice = Utility::sanitize ($_POST['sell-price']);
$product->img = $img;
$product->uuid = uniqid();
// dd($img);
$product->esale ;
 if(isset($_POST['e-sale'])){
   $product->esale = Utility::sanitize ($_POST['e-sale']);
 }else{
   $product->esale = null;
 }
$product->outdoor;
 if(isset($_POST['outdoor'])){
    $product->outdoor = Utility::sanitize ($_POST['outdoor']);
 }else{
    $product->outdoor = null;
 }
$product->category = Utility::sanitize ($_POST['category']);

// $productsJson = file_get_contents($adminSources.'products.json');
// $products = json_decode($productsJson);
//$data = $product->data($name,$type,$description,$cost_price,$sell_price,$img,$e_sale,$outdoor,$category);
// dd($data);

  $result = $product->store2($product);


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

