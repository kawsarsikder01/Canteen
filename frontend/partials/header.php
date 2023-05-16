
<?php
include_once($_SERVER['DOCUMENT_ROOT']).'/'.'collage_canteen'.'/'.'config.php';

$iconJson = file_get_contents($frontEndSources.'menu_icon.json');
$icons = json_decode($iconJson);
$menuJson = file_get_contents($frontEndSources.'menu.json');
$menuItems = json_decode($menuJson);
$userJson = file_get_contents($frontEndSources.'user_dashboard.json');
$userDashboardItems = json_decode($userJson);

// $cartItems = [
//   ['img'=>'meat.jpg','cart_item'=>'cart item 01','price'=>'350 tk'],
//   ['img'=>'grilld chicken.jpg','cart_item'=>'cart item 02','price'=>'120 tk'],
//   ['img'=>'fried_chicken.jpg','cart_item'=>'cart item 03','price'=>'150 tk'],
//   ['img'=>'chicken_sand.jpg','cart_item'=>'cart item 04','price'=>'150 tk'],
 
// ];

echo '<header class="header">
<nav class="navbar navbar-expand-lg bg-body-tertiary  bg-dark"data-bs-theme="dark">
  <div class="container my-2">
    <a class="navbar-brand" href="home-page.php">College <span class="text-warning">Canteen</span></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ms-auto me-5 mb-lg-0">
    ';

foreach($menuItems as $menuItem){
        echo '<li class="nav-item">
        <a class="nav-link " href="'.$menuItem->link.'">'.$menuItem->menu.'</a>
      </li>'
      ;
}
echo '</ul>';
foreach($icons as $icon){
  echo '<a href="#" class="btn btn-info shopping '.$icon->btn.' mx-4"><i class="'.$icon->icon.' text-light"></i></a>';
}
echo '<form class="d-flex" role="search">
<input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
<button class="btn btn-outline-success" type="submit">Search</button>
</form>

</div>
</div>
</nav>';?>
