<?php include_once($_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.'config.php');
session_start();
use SOURCE\Utility\Utility;
use SOURCE\Utility\Validator;
use SOURCE\Product;
use Intervention\Image\ImageManager;
$old_img = $_POST['old_img'];
//  dd($old_img);
$img ;
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


    // $fileName =uniqid().'_'. $_FILES['img']['name'];
    // $target = $_FILES['img']['tmp_name'];
    // $destination = $upload.$fileName;
    // if(move_uploaded_file($target,$destination)){
    // $img = $fileName;
    // }
    // if(file_exists($upload.$old_img)){
    //     unlink($upload.$old_img);
    // }else{
    //     dd("Image Not Edit");
    // }
}else{
    $img = $old_img;
}


// $fileName =uniqid().'_'. $_FILES['img']['name'];
// $target = $_FILES['img']['tmp_name'];
// $destination = $upload.$fileName;
// if(move_uploaded_file($target,$destination)){
// $img = $fileName;
// }
$id = Utility::sanitize($_POST['id']);
$products = new Product;
// $product = $products->find($id);
// dd($products);
$products->id =Utility::sanitize ($_POST['id']);
$products->name =Utility::sanitize ($_POST['name']);
$products->type =Utility:: sanitize ($_POST['type']);
$products->category =Utility::sanitize ($_POST['category']);
$products->description =Utility::sanitize ($_POST['description']);
$products->costPrice =Utility::sanitize ($_POST['cost-price']);
$products->sellPrice = Utility:: sanitize ($_POST['sell-price']);
$products->img = $img;
$products->esale;
if($_POST['e-sale']) {
    $products->esale =Utility::sanitize ($_POST['e-sale']);
}else{
    $products->esale = null;
}
$products->outdoor;
if($_POST['outdoor']) {
    $products->outdoor = Utility::sanitize ($_POST['outdoor']);
}else{
    $products->outdoor = null;
}


// $productData  = [
//     "id"=>$id,
//     "name"=>$name,
//     "type"=>$type,
//     "category"=>$category,
//     "description"=>$description,
//     "costPrice"=>$costPrice,
//     "sellPrice"=>$sellPrice,
//     "img"=>$img,
//     "esale"=>$esale,
//     "outdoor"=>$outdoor
// ];

 //$data = $product->edit_data($id,$name,$type,$category,$description,$costPrice,$sellPrice,$img,$esale,$outdoor);
//  dd($data);
$result = $products->update2($products);
// $productsJson = file_get_contents($adminSources.'products.json');
// $products = json_decode($productsJson);
// foreach($products as $key=> $product){
//     if($product->id == $id){
//         break;
//     }
// }


// $products[$key] = (object) $productData;
// $productDataEncode = json_encode($products);

if($result){
    $message = "Data is updated Successfully";
    $_SESSION['message'] = $message;
    // set_session('message',$message);
   location('products.php');
}else{
    echo 'failed';
}
?>