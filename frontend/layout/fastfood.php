<?php include_once($_SERVER['DOCUMENT_ROOT']).'/'.'collage_canteen'.'/'.'config.php';
$fastFoodItems = [
  ['img'=>'chicken_sand.jpg','name'=>'Chicken Sandwich','price'=>'150 tk'],
  ['img'=>'classic_chicken_cheese_burger.jpg','name'=>'Chicken Cheese Burger','price'=>'250 tk'],
  ['img'=>'fried_chicken.jpg','name'=>'Fried Chicken','price'=>'150 tk'],
  ['img'=>'grilld chicken.jpg','name'=>'Grilled Chicken','price'=>'120 tk'],
  ['img'=>'meat.jpg','name'=>'Meat Box','price'=>'350 tk'],
  ['img'=>'supreme-pizza.jpg','name'=>'Supreme Pizza','price'=>'600 tk'],
  ['img'=>'pizz_bbq.jpg','name'=>'BBQ Pizza','price'=>'750 tk'],
  ['img'=>'Potato-Wedges.jpg','name'=>'Potato Wedges','price'=>'130 tk']
];
include_once($frontEndElement.'card.php');
$fastFood =new Foods;
?>
<!DOCTYPE html>
<html lang="en">
<?php include_once($frontEndElement.'head.php'); ?>
<body>
  <!-- Header Section -->
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


      <!--Bakery Category-->


      <section id="fastfood">
        <h3>Fast Food</h3>
        <div class="fastfood container">
          <?php $fastFood->food($fastFoodItems); ?>
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