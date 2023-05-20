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
foreach($bannerImageData as $bannerId){
    $id[] = $bannerId->id;
}
$lastIndex = count($id)-1;
$highestId = $id[$lastIndex];
$currentId = $highestId+1;

    $data = [
        "id"=>$currentId,
        "title"=>$title,
        "caption"=>$caption,
        "img"=>$img
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