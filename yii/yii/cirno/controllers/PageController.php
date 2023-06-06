<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\Categories;
use app\models\Products;
use yii\web\NotAcceptableHttpException;

/*Контроллер для сайта*/
class PageController extends Controller
{

    /*
товары
     */
    public function actionListproduct()
    {
        if(isset($_GET['id']) && $_GET['id'] != "" && filter_var($_GET['id'], FILTER_VALIDATE_INT))
        {

            $categories = Categories::find()->where(['id' => $_GET['id']])->asArray()->one();

            if(count($categories) > 0)
		{
		$products_array = Products::find()->where(['category' =>$_GET['id']])->asArray()->all();
                return $this->render('listproducts', compact('categories', 'products_array'));
		}

        }
        return $this->redirect(['page/catalog']);
    }

    /*
каталог
     */
    public function actionCatalog()
    {
        $categories = Categories::find()->asArray()->all();
        return $this->render('catalog', compact('categories'));
    }

/*
контакты
*/

    public function actionContacts()
    {
        return $this->render('contacts');
    }

/*
BlackJeck
*/

    public function actionKart()
    {
        $this->layout = "product";

        if(isset($_GET['id']) && !empty($_GET['id']) && filter_var($_GET['id'], FILTER_VALIDATE_INT)){
            $id = $_GET['id'];
        }
        $product_array = Products::find()->where(['id' => $id])->asArray()->one();

        return $this->render('kart', compact('product_array', 'id'));
    }
}
