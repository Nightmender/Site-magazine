<?php

/* @var $this yii\web\View */
use yii\widgets\ActiveForm;
use yii\helpers\Url;
use yii\helpers\Html;

$this->title = 'Список товаров';
?>



<div>

    		</div>




<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">



    			<div class="short_description">

                        


    				<img src="images/<?php echo $categories['img'];?>">
    				<div>
    					<h2><?php echo $categories['name'];?></h2>
    					<p><?php echo $categories['description'];?></p>
    				</div>
    			</div>
          <div class="row content">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 header_list_prod">
                <div class="row">
                  <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                    <h1>Электроника</h1>
                  </div>
                </div>
              </div>
              </div>


<?php

//echo "<pre>";
//print_r($products_array);
//echo "</pre>";



foreach ($products_array as $product_array):?>
		<div class="col-lg-4 col-md-6 col-sm-4 col-xs-12">
                <div class="product">
                  <a href="<?=Url::toRoute(['page/kart', 'id' => $product_array['id']]);?>" class="product_img">
                  <img src="images/<?= $product_array['img'];?>">
                  </a>
                  <a href="<?=Url::toRoute(['page/kart', 'id' => $product_array['id']]);?>" class="product_title"><?= $product_array['name'];?></a>
                  <div class="product_price">
                    <span class="price"><?= $product_array['price'];?> руб</span>

        <?php
            if(!empty($product_array['price_old'])): 
        ?>
            <span class="price_old_prod"><?php echo $product_array['price_old'];?> руб</span>
        <?php
            endif;
        ?>
                  </div>
                  <!-- <div class="product_btn">
                    <a href="#" class="mylist">Список желаний</a>
                  </div> -->
                </div>
              </div>
<?php endforeach;?>

          </div>
</div>

