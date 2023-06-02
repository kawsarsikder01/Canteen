<?php 

include_once($_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.'config.php');
 
use SOURCE\Utility\Utility;
use SOURCE\Bakery;
use Intervention\Image\ImageManager;

// $bakeryItemJson=file_get_contents($adminSources.'bakery_item.json');
// $bakeryItems = json_decode($bakeryItemJson);
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
$products = new Bakery;
$product = $products->find($id);
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
    location('bakery_item.php');
}
// foreach($bakeryItems as $key=> $bakeryItem){
//     if($bakeryItem->id == $id){
//         break;
//     }
// }
// $bakeryItems[$key]=(object)$data;
// $bakeryItemsDataEncode = json_encode($bakeryItems);
// if(file_exists($adminSources.'bakery_item.json')){
// $result = file_put_contents($adminSources.'bakery_item.json',$bakeryItemsDataEncode);

// }
