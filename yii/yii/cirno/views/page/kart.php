<?php

/* @var $this yii\web\View */
use yii\helpers\Url;

$this->title = 'Карточка товара';
?>

 <div class="col-lg-4 col-md-4 col-sm-5 col-xs-12">
    <div class="img_prod">
       <img src="images/<?php echo $product_array['img'];?>" class="img-fluid" width="350" height="350">
    </div>
</div>

<div class="col-lg-5 col-md-8 col-sm-7 col-xs-12">
    <div class="content_prod">
        <h1><?php echo $product_array['name'];?></h1>
        <p><?php echo $product_array['description'];?></p>
    </div>
</div>

<div class="col-lg-3 col-md-8 col-sm-7 col-sm-offset--5 col-xs-12">
    <div class="order_prod">
        <p class="price_prod"><?php echo $product_array['price'];?> руб</p>
        <?php
            if(!empty($product_array['price_old'])): 
        ?>
            <p class="price_old_prod"><?php echo $product_array['price_old'];?> руб</p>
        <?php
            endif;
        ?>
    </div>
</div>


