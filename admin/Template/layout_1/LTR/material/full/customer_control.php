<?php 

include_once($_SERVER['DOCUMENT_ROOT'].'/'.'collage_canteen'.'/'.'config.php');
$customersJson = file_get_contents($adminSources.'customers.json');
$customers = json_decode($customersJson);
foreach($customers as $customer){
    $id[] = $customer->id;
 }
 sort($id);
$lastIndex = count($id)-1;
$highestId = $id[$lastIndex];
$currentId = $highestId+1;
$data = [
    "id"=>4,
    "name"=>$_POST['name'],
    "phone"=>$_POST['phone'],
    "email"=>$_POST['email'],
    "age"=>$_POST['age'],
    "address"=>$_POST['address'],
    "img"=>$_POST['img'],
    "passwoard"=>$_POST['passwoard'],
    "username"=>$_POST['username']
];
$customers[] = (object)$data;
$dataJson = json_encode($customers);
if(file_exists($adminSources.'customers.json')){
$result = file_put_contents($adminSources.'customers.json',$dataJson);
if($result){
    location('customers.php');
}
}
// echo "<h1 style = 'color:green;text-align:center;margin-top:100px;'>Customer is Added</h1>";
// echo "<a href='customers.php' style ='text-align:center;'>Customer List</a>";