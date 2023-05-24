<?php include_once($_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.'config.php');
    $bannerImageJson = file_get_contents($adminSources.'banner.json');
    $bannerImageData = json_decode($bannerImageJson);


    // dd($_FILES);
    $img;
    if(array_key_exists('img',$_FILES) && !empty($_FILES['img']['name'])){
        $fileName =uniqid().'_'. $_FILES['img']['name'];
    $target = $_FILES['img']['tmp_name'];
    $destination = $upload.$fileName;

if(move_uploaded_file($target,$destination)){
    $img = $fileName;
}
if(file_exists($upload.$old_img)){
    unlink($upload.$old_img);
}
}else{
    $img = $_POST['old_img'];
}
$title ;
if(isset($_POST['title'])){
    $title = $_POST['title'];
}else{
    $title = null;
}
$caption;
if(isset($_POST['caption'])){
    $caption = $_POST['caption'];
}else{
    $caption = null;
}

if(count($bannerImageData)>0){
    $id = [];
    foreach($bannerImageData as $bannerId){
       $id[] = $bannerId->id;
    }
    sort($id);
    $lastIndex = count($id)-1;
    $highestId = $id[$lastIndex];
    $currentId = $highestId+1;
 
 }else{
    $currentId = 1;
 }
// foreach($bannerImageData as $bannerId){
//     $id[] = $bannerId->id;
// }
// $lastIndex = count($id)-1;
// $highestId = $id[$lastIndex];
// $currentId = $highestId+1;

    $data = [
        "id"=>$currentId,
        "title"=>$title,
        "caption"=>$caption,
        "img"=>$img,
        "active"=>$_POST['active']
    ];
    $bannerImageData[] = (object) $data;
    $dataEncode = json_encode($bannerImageData);
    if(file_exists($adminSources.'banner.json')){
    $result = file_put_contents($adminSources.'banner.json',$dataEncode);
    if($result){
        location('banner_images.php');
    }
    }
    


    // echo "<a href='banner_images.php'>Banner Image</a>";