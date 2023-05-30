<?php include_once($_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.'config.php');

use SOURCE\Customer;
use SOURCE\Utility\Utility;
use SOURCE\Utility\Validator;
use Intervention\Image\ImageManager;

// $customersJson = file_get_contents($adminSources.'customers.json');
// $customers = json_decode($customersJson);
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

$id = $_POST['id'];
$customers = new Customer();
$customer = $customers->find($id);
// dd($customer);
$customer->id = $id;
$customer->name = Utility::sanitize($_POST['name']);
$customer->phone = Utility::sanitize($_POST['phone']);
$customer->email = Utility::sanitize($_POST['email']);
$customer->age = Utility::sanitize($_POST['age']);
$customer->address = Utility::sanitize($_POST['address']);
$customer->img = $img;
$customer->username = Utility::sanitize($_POST['username']);
$customer->passwoard = Utility::sanitize($_POST['passwoard']);

$result = $customers->update($customer);

if($result){
    location('customers.php');
}


// $data = [
//     "id"=>$id,
//     "name"=>$_POST['name'],
//     "phone"=>$_POST['phone'],
//     "email"=>$_POST['email'],
//     "age"=>$_POST['age'],
//     "address"=>$_POST['address'],
//     "img"=>$img,
//     "passwoard"=>$_POST['passwoard'],
//     "username"=>$_POST['username']
// ];

// $customers[$key] = (object) $data;
// $customersDataEncode = json_encode($customers);
// if(file_exists($adminSources.'customers.json')){
//     $result = file_put_contents($adminSources.'customers.json',$customersDataEncode);
    
// }