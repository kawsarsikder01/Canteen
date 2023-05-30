<?php include_once($_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.'config.php');
use SOURCE\Customer;

$id  = $_POST['id'];

$customer  =  new Customer;
$result = $customer->destroy($id);


    if($result){
        location('customers.php');
    }

// $customersJson = file_get_contents($adminSources.'customers.json');
// $customers = json_decode($customersJson);
// foreach($customers as $key=> $customer){
//     if($customer->id == $id){
       
//         break;
//     }
// }
//  array_splice($customers,$key,1);

// $CustomerDataEncode = json_encode($customers);
// if(file_exists($adminSources.'customers.json')){
//     $result = file_put_contents($adminSources.'customers.json',$CustomerDataEncode);
//     if($result){
//         location('customers.php');
//     }
// }
// else{
//     echo "file not found";
// }

?>