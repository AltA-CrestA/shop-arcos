<?php

namespace frontend\models;

use yii\db\ActiveRecord;

/**
 * This is the model class for table "category".
 *
 * @property int $id
 * @property string $name
 * @property string|null $img
 * @property int|null $status
 */
class Category extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'category';
    }

    public static function byStyleCssWeUnited($id)
    {
        switch ($id) {
            case 1:
                echo 'one';
                break;
            case 2:
                echo 'two';
                break;
            case 3:
                echo 'three';
                break;
            case 4:
                echo 'four';
                break;
            case 5:
                echo 'five';
                break;
            case 6:
                echo 'six';
                break;
            case 7:
                echo 'seven';
                break;
            case 8:
                echo 'eight';
                break;
            case 9:
                echo 'nine';
                break;
        }
    }
}
