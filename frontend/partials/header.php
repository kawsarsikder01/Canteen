
<?php
$navMenus = [
  ['menu'=>'Home','link'=>'home-page.php'],
  ['menu'=>'Menu','link'=>'menu.php'],
  ['menu'=>'Categorey','link'=>'categorey.php'],
  ['menu'=>'Reservation','link'=>'reservation.php'],
  ['menu'=>'About','link'=>'about.php'],
  ['menu'=>'Contact','link'=>'contact.php'],
  ['menu'=>'Login','link'=>'login.php']
];

$icons = [
  ['icon'=>'fa fa-shopping-cart','btn'=>'shopping-cart'],
  ['icon'=>'fa fa-user','btn'=>'users']
];
$cartItems = [
  ['img'=>'meat.jpg','cart_item'=>'cart item 01','price'=>'350 tk'],
  ['img'=>'grilld chicken.jpg','cart_item'=>'cart item 02','price'=>'120 tk'],
  ['img'=>'fried_chicken.jpg','cart_item'=>'cart item 03','price'=>'150 tk'],
  ['img'=>'chicken_sand.jpg','cart_item'=>'cart item 04','price'=>'150 tk'],
 
];
$userDashboardItems = [
  ['item'=>'manage my account','link'=>'index.php'],
  ['item'=>'my orders','link'=>'index.php'],
  ['item'=>'My Reviews','link'=>'index.php'],
  ['item'=>'My Returns & Cancellation','link'=>'index.php'],
  ['item'=>'shipping address','link'=>'shipping_address.php'],
  ['item'=>'Logout','link'=>'index.php']
];
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

foreach($navMenus as $navMenu){
        echo '<li class="nav-item">
        <a class="nav-link " href="'.$navMenu['link'].'">'.$navMenu['menu'].'</a>
      </li>'
      ;
}
echo '</ul>';
foreach($icons as $icon){
  echo '<a href="#" class="btn btn-info shopping '.$icon['btn'].' mx-4"><i class="'.$icon['icon'].' text-light"></i></a>';
}
echo '<form class="d-flex" role="search">
<input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
<button class="btn btn-outline-success" type="submit">Search</button>
</form>

</div>
</div>
</nav>';?>
