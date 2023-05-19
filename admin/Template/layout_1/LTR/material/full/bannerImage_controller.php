<?php include_once($_SERVER['DOCUMENT_ROOT'].'/'.'collage_canteen'.'/'.'config.php');
    $bannerImageJson = file_get_contents($adminSources.'banner.json');
    $bannerImageData = json_decode($bannerImageJson);

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
$img ;
if(isset($_POST['img'])){
    $img = $_POST['img'];
}else{
    $img = null;
}

    $data = [
        "id"=>4,
        "title"=>$title,
        "caption"=>$caption,
        "img"=>$img
    ];
    $bannerImageData[] = (object) $data;
    $dataEncode = json_encode($bannerImageData);
    $result = file_put_contents($adminSources.'banner.json',$dataEncode);


    echo "<a href='banner_images.php'>Banner Image</a>";