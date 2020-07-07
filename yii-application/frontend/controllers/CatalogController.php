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

    public function actionCategory($categoryId)
    {
        $condition = ['status' => Yii::$app->params['enableStatus']];
        $condition2 = ['category_id' => $categoryId];
        $productList = Product::find()->where($condition)->andWhere($condition2)->orderBy('id')->all();

        return $this->render('category', [
            'productList' => $productList,
        ]);
    }

}
