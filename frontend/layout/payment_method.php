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
  
<!--Payment Method-->
  <section id="payment_method">
    <h3>Select Your Payment Method</h3>
    <div class="payment_method container-fluid">
        <div class="credit payment_item">
            <a href="#"><i class="fa-regular fa-credit-card"></i></a>
            <h6>Credit/Debit Card</h6>
        </div>
        <div class="nagod img payment_item">
            <a href="#"><img src="../Asset/images/nagod.png" height="100px" width="100px"  alt=""></a>
            <h6>Nagod</h6>
        </div>
        <div class="rocket img payment_item">
            <a href="#"><img src="../Asset/images/rocket.jpeg" height="100px" width="100px" alt=""></a>
            <h6>Rocket</h6>
        </div>
        <div class="bKash img payment_item">
            <a href="#"><img src="../Asset/images/bkash.png" height="100px" width="100px" alt=""></a>
            <h6>bKash</h6>
        </div>
        <div  class="cash_on payment_item">
            <a href="thankyou.php"><i class="fa fa-money-check-dollar"></i></a>
            <h6>Cash On Delivery</h6>
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