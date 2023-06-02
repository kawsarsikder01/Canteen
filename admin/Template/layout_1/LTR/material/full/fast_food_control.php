<?php 
include_once($_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.'config.php');
use Intervention\Image\ImageManager;
use SOURCE\Fastfood;
use SOURCE\Utility\Utility;

$img = null;
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




$product = new Fastfood;

$product->name = Utility::sanitize($_POST['name']);
$product->type =Utility::sanitize($_POST['type']);
$product->img = $img;
$product->category =Utility::sanitize($_POST['category']);
$product->description =Utility::sanitize($_POST['description']);
$product->cost_price =Utility::sanitize($_POST['cost-price']);
$product->sell_price =Utility::sanitize($_POST['sell-price']);
$product->sell_price =Utility::sanitize($_POST['sell-price']);
if(isset($_POST['e-sale'])){
    $product->esale = $_POST['e-sale'];
}else{
    $product->esale = null;
}
if(isset($_POST['outdoor'])){
    $product->outdoor = $_POST['outdoor'];
}else{
    $product->outdoor = null;
}
$result = $product->create($product);
if($result){
    location('fast_food.php');
}
