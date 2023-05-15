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

      <section id="menu">
        <h3>Our Menu</h3>
        <div class="menu">
            <div class="menu-item">
                <h5>Fast Food</h5>
                <ul>
                    <li>BBQ Chicken Cheese Burger &#8594; &#8594; &#8594; &#8594; &#8594;tk 450</li>
                    <li>Beef Cheese Burst Burger &#8594; &#8594; &#8594; &#8594; &#8594;tk 560</li>
                    <li>Fatmat Meat Box &#8594; &#8594; &#8594; &#8594; &#8594; &#8594;tk 450</li>
                    <li>Mushroom Mania Pizza &#8594; &#8594; &#8594; &#8594; &#8594; &#8594;tk 860</li>
                    <li>The Cheese Buddy Pizza &#8594; &#8594; &#8594; &#8594; &#8594; &#8594;tk 1250</li>
                    <li>Fried Chicken &#8594; &#8594; &#8594; &#8594; &#8594; &#8594;tk 450</li>
                </ul>
            </div>
            <div class="menu-item">
                <h5>Bakery Item</h5>
                <ul>
                    <li>Special Biscuit &#8594; &#8594; &#8594; &#8594; &#8594;tk 440</li>
                    <li>Toast Biscuit &#8594; &#8594; &#8594; &#8594; &#8594;tk 240</li>
                    <li>Dry Cake &#8594; &#8594; &#8594; &#8594; &#8594; &#8594;tk 420</li>
                    <li>Milk Kaccha &#8594; &#8594; &#8594; &#8594; &#8594; &#8594;tk 400</li>
                    <li>Nimki &#8594; &#8594; &#8594; &#8594; &#8594; &#8594;tk 1250</li>
                    <li>Milki Bread &#8594; &#8594; &#8594; &#8594; &#8594; &#8594;tk 90</li>
                    <li>Special Bread &#8594; &#8594; &#8594; &#8594; &#8594; &#8594;tk 110</li>
                </ul>
            </div>
            <div class="menu-item">
                <h5>Drinks</h5>
                <ul>
                    <li>Strawberry Shake &#8594; &#8594; &#8594; &#8594; &#8594;tk 120</li>
                    <li>Grape Juice &#8594; &#8594; &#8594; &#8594; &#8594;tk 150</li>
                    <li>Pineapple Juice &#8594; &#8594; &#8594; &#8594; &#8594; &#8594;tk 100</li>
                    <li>Olive Juice &#8594; &#8594; &#8594; &#8594; &#8594; &#8594;tk 110</li>
                    <li>Salted Lassi &#8594; &#8594; &#8594; &#8594; &#8594; &#8594;tk 49</li>
                    <li>Chocolate Lassi &#8594; &#8594; &#8594; &#8594; &#8594; &#8594;tk 49</li>
                    <li>Cold Coffe &#8594; &#8594; &#8594; &#8594; &#8594; &#8594;tk 70</li>
                </ul>
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