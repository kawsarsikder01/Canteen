<?php include_once($_SERVER['DOCUMENT_ROOT']).'/'.'collage_canteen'.'/'.'config.php';
$bakeryItems = [
  ['img'=>'cake.jpeg','name'=>'Cake','price'=>'785 tk'],
  ['img'=>'italian-bread.webp','name'=>'Italian Bread','price'=>'120 tk'],
  ['img'=>'breads_pies.jpg','name'=>'Bread Pie','price'=>'75 tk'],
  ['img'=>'jera-biscuit.webp','name'=>'Jera Biscuits','price'=>'110 tk'],
  ['img'=>'plain-bread.png','name'=>'Plain Bread','price'=>'65 tk'],
  ['img'=>'plain-cake.jpg','name'=>'Plain Cake','price'=>'125 tk'],
  ['img'=>'pound-cake.jpg','name'=>'Pound Cake','price'=>'160 tk'],
  ['img'=>'Til-Toast.jpg','name'=>'Till Toast','price'=>'180 tk']
];
include_once($frontEndElement.'card.php');
$bakeryFood = new Foods;
?>


<!DOCTYPE html>
<html lang="en">
<?php include_once($frontEndElement.'head.php'); ?>
<body>
  <!-- Header Section -->
<?php include_once($frontEndElement.'header.php') ?>

<div class="cart-items">
    <div id="cart-items"></div>
        
        <a href="payment_method.php" class="cart-btn">Checkout now</a>
    </div>
    <?php include_once($frontEndElement.'user.php'); ?>

      <!--Bakery Category-->
      <section id="bakery">
        <h3>Bakery Item</h3>
        <div class="bakery container">
          <?php $bakeryFood->food($bakeryItems); ?>
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
    <script src="../Asset/js/bakery.js"></script> 
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>