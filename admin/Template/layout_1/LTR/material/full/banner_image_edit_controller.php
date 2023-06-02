<?php include_once($_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.'config.php');

    use SOURCE\Banner;
    use SOURCE\Utility\Utility;
    use SOURCE\Utility\Validator;
    use Intervention\Image\ImageManager;
    $old_img = $_POST['old_img'];
    $img = null;
    if(array_key_exists('img',$_FILES) && !empty($_FILES['img']['name'])){
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
if(file_exists($upload.$old_img)){
    unlink($upload.$old_img);
}
}else{
    $img = $_POST['old_img'];
}

$id = $_POST['id'];

$banners = new Banner;
$banner = $banners->find($id);
$banner->id = $id;
$banner->title = Utility::sanitize($_POST['title']);
$banner->caption = Utility::sanitize($_POST['caption']);
$banner->img = $img;
if(isset($_POST['active'])){
    $banner->active = Utility::sanitize($_POST['active']);
}else{
    $banner->active = null;
}

$result = $banners->update($banner);
if($result){
    location('banner_images.php');
}

// $title ;
// if(isset($_POST['title'])){
//     $title = $_POST['title'];
// }else{
//     $title = null;
// }
// $caption;
// if(isset($_POST['caption'])){
//     $caption = $_POST['caption'];
// }else{
//     $caption = null;
// }

// foreach($bannerImageData as $key=>$bannerData){
//     if($bannerData->id == $id){
//         break;
//     }
// }

//     $data = [
//         "id"=>$id,
//         "title"=>$title,
//         "caption"=>$caption,
//         "img"=>$img,
//         "active"=>$_POST['active']
//     ];
//     $bannerImageData[$key] = (object) $data;
//     $dataEncode = json_encode($bannerImageData);
//     if(file_exists($adminSources.'banner.json')){
//     $result = file_put_contents($adminSources.'banner.json',$dataEncode);
//     if($result){
//         location('banner_images.php');
//     }
//     }
    


    // echo "<a href='banner_images.php'>Banner Image</a>";