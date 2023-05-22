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

<!--Shipping Address Section-->

<section id="address">
    <h3>Shipping Address</h3>
    <div class="address">
        <form class=" needs-validation" novalidate>
            <div class="col-md-6 d-block">
              <label for="validationCustom01" class="form-label">Full Name</label>
              <input type="text" class="form-control" id="validationCustom01"  required>
             
            </div>
            <div class="col-md-6">
              <label for="validationCustom02" class="form-label">Mobile Number</label>
              <input type="number" class="form-control" id="validationCustom02" value="Otto" required>
              
            </div>
            <div class="col-md-6">
                <label for="validationCustom04" class="form-label">Division</label>
                <select class="form-select" id="validationCustom04" required>
                  <option selected disabled value="">Choose...</option>
                  <option>Dhaka</option>
                  <option>Chattogram</option>
                  <option>Barishal</option>
                  <option>Khulna</option>
                  <option>Mymensingh</option>
                  <option>Rangpur</option>
                  <option>Sylhet</option>
                  <option>Rajshahi</option>
                </select>
               
              </div>
           
            <div class="col-md-6">
                <label for="validationCustom03" class="form-label">City</label>
                <input type="text" class="form-control" id="validationCustom03" required>
                
              </div>
            <div class="col-md-6">
              <label for="validationCustom04" class="form-label">Area</label>
              <input type="text" class="form-control" id="validationCustom03" required>
            </div>
            <div class="col-md-6">
                <label for="validationCustom04" class="form-label">Address</label>
                <input type="text" class="form-control" id="validationCustom03" required>
              </div>
            
           
            <div class="col-12">
              <a class="btn btn-info my-5" type="submit">Save</a>
            </div>
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