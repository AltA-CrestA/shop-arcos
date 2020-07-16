<?php


namespace frontend\widgets\saleList;


use frontend\models\Product;
use Yii;
use yii\base\Widget;

class SaleList extends Widget
{
    public function run()
    {
        $condition = [
            'status' => Yii::$app->params['enableStatus'],
            'is_sale' => Yii::$app->params['saleProduct'],
        ];
        $saleList = Product::find()->where($condition)->orderBy('id')->all();

        return $this->render('index', [
            'saleList' => $saleList,
        ]);
    }
}