<?php 


use SOURCE\Customer;
use SOURCE\Utility\Utility;
use SOURCE\Utility\Validator;


include_once($_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.'config.php');
// $customersJson = file_get_contents($adminSources.'customers.json');
// $customers = json_decode($customersJson);

// dd($_FILES);
$img;
$fileName =uniqid().'_'. $_FILES['img']['name'];
    $target = $_FILES['img']['tmp_name'];
    $destination = $upload.$fileName;

if(move_uploaded_file($target,$destination)){
    $img = $fileName;
}





//  if(count($customers) > 0){
//     $id = [];
//     foreach($customers as $customer){
//         $id[] = $customer->id;
//      }
//      sort($id);
//      $lastIndex = count($id)-1;
//      $highestId = $id[$lastIndex];
//      $currentId = $highestId+1;
//  }else{
//     $currentId = 1;
//  }
//  sort($id);
// $lastIndex = count($id)-1;
// $highestId = $id[$lastIndex];
// $currentId = $highestId+1;

$customer = new Customer();
$customer->name = Utility::sanitize($_POST['name']);
$customer->phone = Utility::sanitize($_POST['phone']);
$customer->email = Utility::sanitize($_POST['email']);
$customer->age = Utility::sanitize($_POST['age']);
$customer->address = Utility::sanitize($_POST['address']);
$customer->img = $img;
$customer->username = Utility::sanitize($_POST['username']);
$customer->passwoard = Utility::sanitize($_POST['passwoard']);

$result = $customer->create($customer);

if($result){
    location('customers.php');
}


// $data = [
//     "id"=>$currentId,
//     "name"=>$_POST['name'],
//     "phone"=>$_POST['phone'],
//     "email"=>$_POST['email'],
//     "age"=>$_POST['age'],
//     "address"=>$_POST['address'],
//     "img"=>$img,
//     "passwoard"=>$_POST['passwoard'],
//     "username"=>$_POST['username']
// ];
// $customers[] = (object)$data;
// $dataJson = json_encode($customers);
// if(file_exists($adminSources.'customers.json')){
// $result = file_put_contents($adminSources.'customers.json',$dataJson);

// }
// echo "<h1 style = 'color:green;text-align:center;margin-top:100px;'>Customer is Added</h1>";
// echo "<a href='customers.php' style ='text-align:center;'>Customer List</a>";