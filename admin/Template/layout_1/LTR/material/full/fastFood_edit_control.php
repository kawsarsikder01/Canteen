<?php 

include_once($_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.'config.php');
use SOURCE\Utility\Utility;
use SOURCE\Fastfood;
use Intervention\Image\ImageManager;

$old_img = $_POST['old_img'];
$img;
if(array_key_exists('img',$_FILES) && !empty($_FILES['img']['name']) ){
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
    if(file_exists($upload.$old_img)){
        unlink($upload.$old_img);
    }
}else{
    $img = $old_img;
}
$id = $_POST['id'];
$products = new Fastfood;
$product = $products->find($id);
// dd($product);
$product->id = $id;
$product->img = $img;
$product->name = Utility::sanitize($_POST['name']);
$product->type = Utility::sanitize($_POST['type']);
$product->description = Utility::sanitize($_POST['description']);
$product->cost_price = Utility::sanitize($_POST['cost-price']);
$product->sell_price = Utility::sanitize($_POST['sell-price']);
$product->category = Utility::sanitize($_POST['category']);

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
$result = $products->update($product);
 
if($result){
    location('fast_food.php');
}