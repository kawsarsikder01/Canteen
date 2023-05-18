<?php 

include_once($_SERVER['DOCUMENT_ROOT'].'/'.'collage_canteen'.'/'.'config.php');
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
$customersJson = file_get_contents($adminSources.'customers.json');
$customers = json_decode($customersJson);
$customers[] = (object)$data;
$dataJson = json_encode($customers);
$result = file_put_contents($adminSources.'customers.json',$dataJson);

echo "<h1 style = 'color:green;text-align:center;margin-top:100px;'>Customer is Added</h1>";
echo "<a href='customers.php' style ='text-align:center;'>Customer List</a>";