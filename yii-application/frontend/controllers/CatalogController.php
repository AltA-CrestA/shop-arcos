<?php

namespace frontend\controllers;

use frontend\models\Category;
use frontend\models\Product;
use Yii;
use yii\web\Controller;

class CatalogController extends Controller
{
    public function actionIndex()
    {
        $condition = ['status' => Yii::$app->params['enableStatus']];
        $productList = Product::find()->where($condition)->orderBy('id')->all();
        $counter = Product::find()->where($condition)->count();

        return $this->render('index', [
            'productList' => $productList,
            'counter' => $counter
        ]);
    }

    public function actionCategory($categoryId)
    {
        $condition = [
            'status' => Yii::$app->params['enableStatus'],
            'category_id' => $categoryId,
            ];
        $productList = Product::find()->where($condition)->orderBy('id')->all();
        $counter = Product::find()->where($condition)->count();
        $categoryName = Category::findOne([$categoryId]);

        return $this->render('category', [
            'productList' => $productList,
            'counter' => $counter,
            'categoryName' => $categoryName
        ]);
    }

    public function actionProduct($id)
    {
        $product = Product::findOne($id);

        return $this->render('product', [
            'product' => $product,
        ]);
    }

}
