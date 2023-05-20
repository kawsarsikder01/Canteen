<?php include_once($_SERVER['DOCUMENT_ROOT'].'/'.'collage_canteen'.'/'.'config.php');

$id  = $_POST['id'];
$productsJson = file_get_contents($adminSources.'products.json');
$products = json_decode($productsJson);
foreach($products as $key=> $product){
    if($product->id == $id){
       
        break;
    }
}
$deleteProduct = array_splice($products,$key,1);

$prodcutDataEncode = json_encode($products);
if(file_exists($adminSources.'products.json')){
    $result = file_put_contents($adminSources.'products.json',$prodcutDataEncode);
    if($result){
        location('products.php');
    }
}
else{
    echo "file not found";
}

?>