<?php 
include_once($_SERVER['DOCUMENT_ROOT']).DIRECTORY_SEPARATOR.'config.php';
// class Foods{
//     private $foods;
//     private $j;
//     // private $src =$webroot.$food->img;
//     public function food($foods)
//     {
//       // $this->src = $webroot.$food->name;
//       $this->j =0;
//       $this->foods = $foods;
//          foreach($foods as $food){
//           echo '<div class="card" style="width: 18rem;">
//         <a href="#"><img src="'.$webroot.$food->img.'" height="300" class="card-img-top" alt="..."></a>
//         <div class="card-body">
//           <h5 class="card-title">'.$food->name.'</h5>
//           <a href="#" class="btn btn-primary" onclick="addToCard('.($this->j++).')">Add to Cart</a>
//           <p>tk '.$food->cost_price.'</p>
//         </div>
//       </div>';
//       };
//     }
//   }
$src = $webroot;
  function food($foods){
    global $src;
    $j=0;
    foreach($foods as $food){
      echo '<div class="card" style="width: 18rem;">
    <a href="#"><img src="'.$src.$food->img.'" height="300" class="card-img-top" alt="..."></a>
    <div class="card-body">
      <h5 class="card-title">'.$food->name.'</h5>
      <a href="#" class="btn btn-primary" onclick="addToCard('.($j++).')">Add to Cart</a>
      <p>tk '.$food->sell_price.'</p>
    </div>
  </div>';
  };
}
function homePageProduct($prducts){
  global $src;
  foreach($prducts as $prduct){
    echo '<div class="card" style="width: 18rem;">
  <a href="#"><img src="'.$src.$prduct->img.'" height="300" class="card-img-top" alt="..."></a>
  <div class="card-body">
    <h5 class="card-title">'.$prduct->name.'</h5>
    <a href="#" class="btn btn-primary" onclick="addToCard('.(1).')">Add to Cart</a>
    <p>tk '.$prduct->sellPrice.'</p>
  </div>
</div>';
};
}
