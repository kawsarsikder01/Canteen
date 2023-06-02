<?php include_once($_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.'config.php');
use SOURCE\Banner;
$id  = $_POST['id'];
$prodcut = new Banner;
$result = $prodcut->destroy($id);

 if($result){
    location('banner_images.php');
}else{
    echo "Delete Request Failed";
}



// $bannerImageJson = file_get_contents($adminSources.'banner.json');
//     $bannerImageData = json_decode($bannerImageJson);
// foreach($bannerImageData as $key=> $banner){
//     if($banner->id == $id){
       
//         break;
//     }
// }
//  array_splice($bannerImageData,$key,1);

// $bannerDataEncode = json_encode($bannerImageData);
// if(file_exists($adminSources.'banner.json')){
//     $result = file_put_contents($adminSources.'banner.json',$bannerDataEncode);
//     if($result){
//         location('banner_images.php');
//     }
// }
// else{
//     echo "file not found";
// }

?>