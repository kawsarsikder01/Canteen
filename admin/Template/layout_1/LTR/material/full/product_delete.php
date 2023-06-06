<?php include_once($_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.'config.php');

use SOURCE\Utility\Utility;
use SOURCE\Utility\Validator;
use SOURCE\Product;

$id  =Utility::sanitize($_POST['id']);


$product = new Product;
$result = $product->destroy2($id);

if($result){
            location('products.php');
        }


        
// $productsJson = file_get_contents($adminSources.'products.json');
// $products = json_decode($productsJson);
// foreach($products as $key=> $product){
//     if($product->id == $id){
       
//         break;
//     }
// }
// $deleteProduct = array_splice($products,$key,1);

// $prodcutDataEncode = json_encode($products);
// if(file_exists($adminSources.'products.json')){
//     $result = file_put_contents($adminSources.'products.json',$prodcutDataEncode);
//     if($result){
//         location('products.php');
//     }
// }
// else{
//     echo "file not found";
// }

?>