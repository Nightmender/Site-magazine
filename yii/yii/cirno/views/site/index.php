<?php

/* @var $this yii\web\View */
use yii\helpers\Url;

$this->title = 'Магазин телевизоров Зомбо-ящик';
?>
<div class="container-fluid tabs_block_main">
      <div class="container">
        <div class="row">
          <ul class="nav nav-tabs">
            <li class="active"><a href="#tab1" data-toggle="tab">Электроника</a></li>
          </ul>
        </div>
      </div>

          <div class="col-lg-3 col-md-3 col-sm-5 col-xs-12 left_banner_menu">
    			
            </div>

    			
          <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 catalog">
              
          <div class="row content">
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
                    <a href="#" class="cart"><i class="glyphicon glyphicon-shopping-cart"></i></a>
                    <a href="#" class="mylist">Список желаний</a>
                  </div> -->
                </div>
              </div>
<?php endforeach;?>
             </div>
            </div>

    <!--  <div class="container">
        <div class="row">
          <div class="tab-content">
            <div class="tab-pane fade in active" id="tab1">
            	<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
            		<div class="product">
            			<a href="#" class="product_img">
            				<span>-10%</span>
            				<img src="images/prod1.jpg">
            			</a>
            			<a href="#" class="product_title">Телевизор ламповый h21</a>
            			<div class="product_price">
            				<span class="price">23500 руб</span>
            				<span class="price_old">23700 руб</span>
            			</div>
            			<div class="product_btn">
            				<a href="#" class="cart"><i class="glyphicon glyphicon-shopping-cart"></i></a>
            				<a href="#" class="mylist">Список желаний</a>
            			</div>
            		</div>
            	</div>
            	<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
            		<div class="product">
            			<a href="#" class="product_img">
            				<span>-10%</span>
            				<img src="images/prod2.jpg">
            			</a>
            			<a href="#" class="product_title">Комплектующие для пк</a>
            			<div class="product_price">
            				<span class="price">30000 руб</span>
            				<span class="price_old">31000 руб</span>
            			</div>
            			<div class="product_btn">
            				<a href="#" class="cart"><i class="glyphicon glyphicon-shopping-cart"></i></a>
            				<a href="#" class="mylist">Список желаний</a>
            			</div>
            		</div>
            	</div>
            	<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
            		<div class="product">
            			<a href="#" class="product_img">
            				<span>-10%</span>
            				<img src="images/prod3.jpg">
            			</a>
            			<a href="#" class="product_title">Телевизор плазменый LG</a>
            			<div class="product_price">
            				<span class="price">30500 руб</span>
            				<span class="price_old">30700 руб</span>
            			</div>
            			<div class="product_btn">
            				<a href="#" class="cart"><i class="glyphicon glyphicon-shopping-cart"></i></a>
            				<a href="#" class="mylist">Список желаний</a>
            			</div>
            		</div>
            	</div>
            	<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
            		<div class="product">
            			<a href="#" class="product_img">
            				<span>-10%</span>
            				<img src="images/prod4.jpg">
            			</a>
            			<a href="#" class="product_title">Телевизор ламповый h12 для просмотра поней</a>
            			<div class="product_price">
            				<span class="price">21000 руб</span>
            				<span class="price_old">23000 руб</span>
            			</div>
            			<div class="product_btn">
            				<a href="#" class="cart"><i class="glyphicon glyphicon-shopping-cart"></i></a>
            				<a href="#" class="mylist">Список желаний</a>
            			</div>
            		</div>
            	</div>
            </div>
            <div class="tab-pane fade" id="tab2">
            	<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
            		<div class="product">
            			<a href="#" class="product_img">
            				<span>-10%</span>
            				<img src="images/prod1.jpg">
            			</a>
            			<a href="#" class="product_title">Телевизор ламповый h12 для просмотра поней</a>
            			<div class="product_price">
            				<span class="price">21000 руб</span>
            				<span class="price_old">23000 руб</span>
            			</div>
            			<div class="product_btn">
            				<a href="#" class="cart"><i class="glyphicon glyphicon-shopping-cart"></i></a>
            				<a href="#" class="mylist">Список желаний</a>
            			</div>
            		</div>
            	</div>
            	<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
            		<div class="product">
            			<a href="#" class="product_img">
            				<span>-10%</span>
            				<img src="images/prod2.jpg">
            			</a>
            			<a href="#" class="product_title">Комплектующие для пк</a>
            			<div class="product_price">
            				<span class="price">30000 руб</span>
            				<span class="price_old">31000 руб</span>
            			</div>
            			<div class="product_btn">
            				<a href="#" class="cart"><i class="glyphicon glyphicon-shopping-cart"></i></a>
            				<a href="#" class="mylist">Список желаний</a>
            			</div>
            		</div>
            	</div>
            </div>
            <div class="tab-pane fade" id="tab3">
            	<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
            		<div class="product">
            			<a href="#" class="product_img">
            				<span>-10%</span>
            				<img src="images/prod1.jpg">
            			</a>
            			<a href="#" class="product_title">Телевизор ламповый h12 для просмотра поней</a>
            			<div class="product_price">
            				<span class="price">21000 руб</span>
            				<span class="price_old">23000 руб</span>
            			</div>
            			<div class="product_btn">
            				<a href="#" class="cart"><i class="glyphicon glyphicon-shopping-cart"></i></a>
            				<a href="#" class="mylist">Список желаний</a>
            			</div>
            		</div>
            	</div>
            	<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
            		<div class="product">
            			<a href="#" class="product_img">
            				<span>-10%</span>
            				<img src="images/prod2.jpg">
            			</a>
            			<a href="#" class="product_title">Комплектующие для пк</a>
            			<div class="product_price">
            				<span class="price">30000 руб</span>
            				<span class="price_old">31000 руб</span>
            			</div>
            			<div class="product_btn">
            				<a href="#" class="cart"><i class="glyphicon glyphicon-shopping-cart"></i></a>
            				<a href="#" class="mylist">Список желаний</a>
            			</div>
            		</div>
            	</div>
            </div>
          </div>
        </div>
      </div> -->
    </div>
