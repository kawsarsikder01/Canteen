<?php
include_once($_SERVER['DOCUMENT_ROOT']).DIRECTORY_SEPARATOR.'config.php';
$sliderItemJson = file_get_contents($adminSources.'banner.json');
$sliderItems = json_decode($sliderItemJson);
foreach($sliderItems as $sliderItem){
  ?> 
  

  <div class="carousel-item <?php if(isset($sliderItem->active)){ echo $sliderItem->active; }else{ echo ''; } ?>" data-bs-interval="4000">
        <img src="<?=$webroot2.$sliderItem->img?>" class="d-block w-100"height="600" alt="...">
        <div class="carousel-caption d-none d-md-block">
            <h5><?=$sliderItem->title?></h5>
        <p><?=$sliderItem->caption?></p>
          </div>
      </div>
  



<?php } ?>