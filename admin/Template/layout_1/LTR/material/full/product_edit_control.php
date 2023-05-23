<?php include_once($_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.'config.php');
session_start();

$old_img = $_POST['old_img'];
//  dd($old_img);
$img ;
if(array_key_exists('img',$_FILES) && !empty($_FILES['img']['name']) ){
    $fileName =uniqid().'_'. $_FILES['img']['name'];
    $target = $_FILES['img']['tmp_name'];
    $destination = $upload.$fileName;
    if(move_uploaded_file($target,$destination)){
    $img = $fileName;
    }
    if(file_exists($upload.$old_img)){
        unlink($upload.$old_img);
    }else{
        dd("Image Not Edit");
    }
}else{
    $img = $old_img;
}


// $fileName =uniqid().'_'. $_FILES['img']['name'];
// $target = $_FILES['img']['tmp_name'];
// $destination = $upload.$fileName;
// if(move_uploaded_file($target,$destination)){
// $img = $fileName;
// }
$id = $_POST['id'];
$name = $_POST['name'];
$type = $_POST['type'];
$category = $_POST['category'];
$description = $_POST['description'];
$costPrice = $_POST['cost-price'];
$sellPrice = $_POST['sell-price'];
$img = $img;
$esale;
if($_POST['e-sale']) {
    $esale = $_POST['e-sale'];
}else{
    $esale = null;
}
$outdoor;
if($_POST['outdoor']) {
    $outdoor = $_POST['outdoor'];
}else{
    $outdoor = null;
}


$productData  = [
    "id"=>$id,
    "name"=>$name,
    "type"=>$type,
    "category"=>$category,
    "description"=>$description,
    "costPrice"=>$costPrice,
    "sellPrice"=>$sellPrice,
    "img"=>$img,
    "esale"=>$esale,
    "outdoor"=>$outdoor
];
$productsJson = file_get_contents($adminSources.'products.json');
$products = json_decode($productsJson);
foreach($products as $key=> $product){
    if($product->id == $id){
        break;
    }
}


$products[$key] = (object) $productData;
$productDataEncode = json_encode($products);

if(file_exists($adminSources.'products.json')){
$result = file_put_contents($adminSources.'products.json',$productDataEncode);            
if($result){
    $message = "Data is updated Successfully";
    $_SESSION['message'] = $message;
    // set_session('message',$message);
   location('products.php');
}
}
?>