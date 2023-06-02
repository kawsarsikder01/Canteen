<?php include_once($_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.'config.php');
    $bannerImageJson = file_get_contents($adminSources.'banner.json');
    $bannerImageData = json_decode($bannerImageJson);

    use SOURCE\Banner;
    use SOURCE\Utility\Utility;
    use SOURCE\Utility\Validator;
    use Intervention\Image\ImageManager;

    // dd($_FILES);
    $img;

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
    $product = new Banner;
    $product->title = Utility::sanitize($_POST['title']);
    $product->caption = Utility::sanitize($_POST['caption']);
    if(isset($_POST['active'])){
        $product->active = Utility::sanitize($_POST['active']);
    }else{
        $product->active = null;
    }
    $product->img = $img;
    $result =  $product->create($product);
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

// if(count($bannerImageData)>0){
//     $id = [];
//     foreach($bannerImageData as $bannerId){
//        $id[] = $bannerId->id;
//     }
//     sort($id);
//     $lastIndex = count($id)-1;
//     $highestId = $id[$lastIndex];
//     $currentId = $highestId+1;
 
//  }else{
//     $currentId = 1;
//  }
// // foreach($bannerImageData as $bannerId){
// //     $id[] = $bannerId->id;
// // }
// // $lastIndex = count($id)-1;
// // $highestId = $id[$lastIndex];
// // $currentId = $highestId+1;

//     $data = [
//         "id"=>$currentId,
//         "title"=>$title,
//         "caption"=>$caption,
//         "img"=>$img,
//         "active"=>$_POST['active']
//     ];
//     $bannerImageData[] = (object) $data;
//     $dataEncode = json_encode($bannerImageData);
//     if(file_exists($adminSources.'banner.json')){
//     $result = file_put_contents($adminSources.'banner.json',$dataEncode);
//     if($result){
//         location('banner_images.php');
//     }
//     }
    


    // echo "<a href='banner_images.php'>Banner Image</a>";