<?php

namespace frontend\controllers;

use frontend\models\Product;
use Yii;
use yii\web\Controller;

class CatalogController extends Controller
{
    public function actionIndex()
    {
        $condition = ['status' => Yii::$app->params['enableStatus']];
        $productList = Product::find()->where($condition)->orderBy('id')->all();

        return $this->render('index', [
            'productList' => $productList,
        ]);
    }

}
