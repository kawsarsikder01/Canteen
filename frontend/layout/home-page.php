<?php include_once($_SERVER['DOCUMENT_ROOT']).'/'.'collage_canteen'.'/'.'config.php';?>

<!DOCTYPE html>
<html lang="en">
  <?php include_once($frontEndElement.'head.php'); ?>
<body>
    <!--Header Section-->
    <?php include_once($frontEndElement.'header.php') ?>
    <div class="cart-items" id="cart-items">
        <div class="cart-item">
            <span class="fas fa-times"></span>
            <img src="images/meat.jpg"height="50px"width="50px" alt="">
            <div class="content">
                <h3 id="title">cart item 01</h3>
                <div class="price" id="price">$15.99/-</div>
            </div>
        </div>
        <div class="cart-item">
            <span class="fas fa-times"></span>
            <img src="images/grilld chicken.jpg"height="50px"width="50px" alt="">
            <div class="content">
                <h3>cart item 02</h3>
                <div class="price">$15.99/-</div>
            </div>
        </div>
        <div class="cart-item">
            <span class="fas fa-times"></span>
            <img src="images/fried_chicken.jpg"height="50px"width="50px" alt="">
            <div class="content">
                <h3>cart item 03</h3>
                <div class="price">$15.99/-</div>
            </div>
        </div>
        <div class="cart-item">
            <span class="fas fa-times"></span>
            <img src="images/chicken_sand.jpg"height="50px"width="50px" alt="">
            <div class="content">
                <h3>cart item 04</h3>
                <div class="price">$15.99/-</div>
            </div>
        </div>
        <a href="payment_method.php" class="cart-btn">checkout now</a>
    </div>
    <?php include_once($frontEndElement.'user.php'); ?>

<!--Slider Section-->
<div id="carouselExampleInterval" class="carousel slide container my-5" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active" data-bs-interval="4000">
        <img src="../Asset/images/slider2.jpg" class="d-block w-100"height="600" alt="...">
        <div class="carousel-caption d-none d-md-block">
            <h5>Fresh Made all,day everyday</h5>
        <p>Good bread consists of five ingredients: flour, water, salt, levain and a lot of passion. We produce bread of exceptional quality because we respect the need for a long fermentation process.</p>
          </div>
      </div>
      <div class="carousel-item" data-bs-interval="3000">
        <img src="../Asset/images/slider1.avif" class="d-block w-100"height="600" alt="...">
        <div class="carousel-caption d-md-block">
            <h5>Delicious and healthy fast food</h5>
        <p>It's this easy. Just call ahead and tell us what you like and we'll give you a time when it will be ready for you to come in and pickup. Call 610-687-1575 or you can ORDER ONLINE for pick-up.</p>
          </div>
      </div>
      <div class="carousel-item"data-bs-interval="3000">
        <img src="../Asset/images/slider7.jpg" class="d-block w-100"height="600" alt="...">
        <div class="carousel-caption  d-md-block">
            <h5>Drink a smooothie everyday</h5>
            <p>It's this easy. Just call ahead and tell us what you like and we'll give you a time when it will be ready for you to come in and pickup. Call 610-687-1575 or you can ORDER ONLINE for pick-up.</p>
          </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
      <span class="carousel-control-prev-icon bg-dark" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
      <span class="carousel-control-next-icon bg-dark" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

<!--Shop Section-->
<section id="shop">
  <h3>Shop</h3>
  <div class="container shop">
    <div class="card" style="width: 18rem;">
      <img src="../Asset/images/chicken_sand.jpg"height="300" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Chicken Sandwich</h5>
        <a href="#" class="btn btn-primary d-inline-block">Add to Cart</a>
        <p>tk 150</p>
      </div>
    </div>
    <div class="card" style="width: 18rem;">
      <a href="#"><img src="../Asset/images/mango.jpg" height="300" class="card-img-top" alt="..."></a>
      <div class="card-body">
        <h5 class="card-title">Mango Juice</h5>
        <a href="#" class="btn btn-primary">Add to Cart</a>
        <p>tk 250</p>
      </div>
    </div>
    <div class="card" style="width: 18rem;">
      <img src="../Asset/images/fried_chicken.jpg"height="300" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Fried Chicken</h5>
        <a href="#" class="btn btn-primary d-inline-block">Add to Cart</a>
        <p>tk 150</p>
      </div>
    </div>
    <div class="card" style="width: 18rem;">
      <a href="#"><img src="../Asset/images/pound-cake.jpg" height="300" class="card-img-top" alt="..."></a>
      <div class="card-body">
        <h5 class="card-title">Pound Cake</h5>
        <a href="#" class="btn btn-primary">Add to Cart</a>
        <p>tk 785</p>
      </div>
    </div>
    <div class="card" style="width: 18rem;">
      <img src="../Asset/images/pizz_bbq.jpg"height="300" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">BBQ Pizza</h5>
        <a href="#" class="btn btn-primary d-inline-block">Add to Cart</a>
        <p>tk 150</p>
      </div>
    </div>
    <div class="card" style="width: 18rem;">
      <a href="#"><img src="../Asset/images/cheerwine-drink.jpg" height="300" class="card-img-top" alt="..."></a>
      <div class="card-body">
        <h5 class="card-title">Cheerwine Drink</h5>
        <a href="#" class="btn btn-primary">Add to Cart</a>
        <p>tk 175</p>
      </div>
    </div>
    <div class="card" style="width: 18rem;">
      <a href="#"><img src="../Asset/images/orange.jpg" height="300" class="card-img-top" alt="..."></a>
      <div class="card-body">
        <h5 class="card-title">Orange Juice</h5>
        <a href="#" class="btn btn-primary">Add to Cart</a>
        <p>tk 120</p>
      </div>
    </div>
    <div class="card" style="width: 18rem;">
      <a href="#"><img src="../Asset/images/plain-bread.png" height="300" class="card-img-top" alt="..."></a>
      <div class="card-body">
        <h5 class="card-title">Plain Bread</h5>
        <a href="#" class="btn btn-primary">Add to Cart</a>
        <p>tk 785</p>
      </div>
    </div>
  </div>
</section>

<!--Footer Section-->
<footer id="footer">
<div class="right-reserved">
<p>&copy;Copyright 2023 by Collage Canteen All Right Reserved.</p>
</div>
<div class="brand-name">
<h6>Collage <span class="text-warning">Canteen</span></h6>
</div>
</footer>
<script src="../Asset/js/shopping_cart.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>
</html>