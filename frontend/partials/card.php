<?php 
class Foods{
    private $foods;
    private $j;
    public function food($foods)
    {
      $this->j =0;
      $this->foods = $foods;
         foreach($foods as $food){
          echo '<div class="card" style="width: 18rem;">
        <a href="#"><img src="../Asset/images/'.$food['img'].'" height="300" class="card-img-top" alt="..."></a>
        <div class="card-body">
          <h5 class="card-title">'.$food['name'].'</h5>
          <a href="#" class="btn btn-primary" onclick="addToCard('.($this->j++).')">Add to Cart</a>
          <p>'.$food['price'].'</p>
        </div>
      </div>';
      };
    }
  }