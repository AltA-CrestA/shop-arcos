<?php


namespace frontend\widgets\recommendedList;


use frontend\models\Product;
use Yii;
use yii\base\Widget;

class RecommendedList extends Widget
{
    public function run()
    {
        $condition = [
            'status' => Yii::$app->params['enableStatus'],
            'is_recommended' => Yii::$app->params['recommendedProduct'],
        ];
        $recommendedList = Product::find()->where($condition)->orderBy('id')->all();

        return $this->render('index', [
            'recommendedList' => $recommendedList,
        ]);
    }
}