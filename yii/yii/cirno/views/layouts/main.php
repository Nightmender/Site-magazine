<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use yii\helpers\Url;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<header>
      <div class="container">
        <div class="row header_top">
          <div class="logo col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <a href="/"><img src="images/logo.png"></a>
          </div>
          <div class="btn_top_wrap col-lg-8 col-md-8 col-sm-12 col-xs-12">
            <div class="btn_and_search">
              <div class="btn_top">
              </div>             
            </div>
          </div>
        </div>
      </div>
      <div class="container-fluid menu_top">
        <div class="container">
          <div class="row">

<?php
NavBar::begin([
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => ' ',
        ],
    ]);

    echo Nav::widget([
        'options' => ['class' => 'navbar-nav'],
        'items' => [
            ['label' => 'Главная', 'url' => ['/site/index']],
            ['label' => 'Каталог', 'url' => ['/page/catalog']],
            ['label' => 'Контакты', 'url' => ['/page/contacts']],
        ],
    ]);

    NavBar::end();

    ?>            
                            
    	    			<div class="footer_menu">
	<?php if(!Yii::$app->user->isGuest): ?>
               <ul> <a href="<?= yii\helpers\Url::to(['/site/logout'])?>"><?=Yii::$app->user->identity['username']?>(Выход)</a></ul>
                <?php else: ?>
               <ul> <a href="<?= yii\helpers\Url::to(['/site/login'])?>"></i>Вход</a>
                <a href="<?= yii\helpers\Url::to(['/site/signup'])?>"></i>Регистрация</a></ul>
                <?php endif; ?>
	
	    			</div>


                  <!-- 
                  <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                          <span class="sr-only">Toggle navigation</span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                        </button>
                  </div>

                  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                      <li class="active"><a href="#">Одежда</a></li>
                      <li><a href="#">Обувь</a></li>
                      <li><a href="#">Снаряжение</a></li>
                      <li><a href="#">Амуниция</a></li>
                      <li><a href="#">Сувениры</a></li>
                    </ul>
                  </div> -->
          </div>
        </div>
      </div>
    </header>


    <div class="container ban_block_wrap">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ban_block">
          <div>
            <img src="images/ban1.jpg">
            <a href="<?= yii\helpers\Url::to(['/page/listproduct', 'id' => 1])?>">
              <h2>Телевизоры для дома</h2>
              <p>Широкий выбор телевизоров LG</p>
              <span>Подробнее</span>
            </a>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ban_block">
          <div>
            <img src="images/ban2.jpg">
            <a href="<?= yii\helpers\Url::to(['/page/listproduct', 'id' => 2])?>">
              <h2>Комплектующие для ПК</h2>
              <p>Качественные процессоры</p>
              <span>Подробнее</span>
            </a>
          </div>
        </div>
      </div>
    </div>

    <?=$content;?>

    <div class="container-fluid write_email_and_sseti">
    	<div class="container">
    		<div class="row write_email_and_sseti_wrap">
    			<div class="col-lg-6 col-md-6 col-sm-7 col-xs-12 write_email">
    				
    			</div>
    			<div class="col-lg-6 col-md-6 col-sm-5 hidden-xs sseti_wrap">
    				<div>
	    				<a href="#"><i class="fa fa-facebook"></i></a>
	    				<a href="#"><i class="fa fa-vk"></i></a>
	    				<a href="#"><i class="fa fa-instagram"></i></a>
    				</div>
    			</div>
    		</div>
    	</div>
    </div>
    <div class="container-fluid footer">
    	<div class="container">
    		<div class="row menu_footer_and_contact">
	    		<div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
	    			<div class="footer_menu">
		    			<h3>Категории</h3>
		    			<ul>
		    				<li><a href="<?= yii\helpers\Url::to(['/page/listproduct', 'id' => 1])?>">Телевизоры</a></li>
		    				<li><a href="<?= yii\helpers\Url::to(['/page/listproduct', 'id' => 2])?>">Комплектующие</a></li>
		    			</ul>
	    			</div>
	    			<div class="footer_menu">
		    			<h3>Учетная запись</h3>
		    			<ul>
		    				<li><a href="<?= yii\helpers\Url::to(['/site/login'])?>">Войти</a></li>
		    				<li><a href="<?= yii\helpers\Url::to(['/site/signup'])?>">Зарегистрироваться</a></li>
	<li><a href="<?= yii\helpers\Url::to(['/admin/products'])?>">Админка</a></li>
		    			</ul>
	    			</div>
	    		</div>
	    		<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 contacts">
	    			<h3>Контакты</h3>
	    			<p><i class="glyphicon glyphicon-map-marker"></i>Адрес: ул. Ленина, 9 г. Ангарск, 603089</p>
	    			<p><i class="glyphicon glyphicon-phone-alt"></i>Служба поддержки: 8 (800) 000-00-00</p>
	    			<p><i class="glyphicon glyphicon-envelope"></i>E-mail: info@myshop.ru</p>
	    		</div>
	    	</div>
	    	<div class="row">
	    		<div class="col-lg-12 copy">
	    			<p>© 2019 не является действующим интернет-магазином</p>
	    		</div>
    		</div>
    	</div>
    </div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
