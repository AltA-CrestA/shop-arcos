<?php

namespace frontend\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "product".
 *
 * @property int $id
 * @property string $name
 * @property int|null $category_id
 * @property string|null $img
 * @property string|null $description
 * @property float|null $price
 * @property int|null $status
 */
class Product extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'product';
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'category_id' => 'Category ID',
            'img' => 'Img',
            'description' => 'Description',
            'price' => 'Price',
            'status' => 'Status',
        ];
    }
}
