<?php include_once($_SERVER['DOCUMENT_ROOT']).DIRECTORY_SEPARATOR.'config.php';?>
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
<!--Login Section-->

<section id="login">
    <h3>Login</h3>
    <div class="container login">
        <form action="">
            <input type="email"class="d-block m-auto"  name="email"id="email" placeholder="username or email">
            <input type="password"class="d-block m-auto my-3"name ="password" placeholder="password">
           <button type="button" class="d-block m-auto button px-5">SING IN</button>
           <button type="button" class="d-block m-auto button button1 px-5">SING UP</button>
           <a href="#">Forgot Password</a>
        </form>
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