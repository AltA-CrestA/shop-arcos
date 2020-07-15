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
 * @property string|null $package
 * @property string|null $description
 * @property int|null $is_sale
 * @property float|null $old_price
 * @property float|null $price
 * @property int|null $is_recommended
 * @property int|null $status
 */
class Cart extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'product';
    }

    public function addToCart($product, $qty = 1)
    {
        if (isset($_SESSION['cart'][$product->id])) {
            $_SESSION['cart'][$product->id]['qty'] += $qty;
        } else {
            $_SESSION['cart'][$product->id] = [
                'qty' => $qty,
                'name' => $product->name,
                'price' => $product->price,
                'img' => $product->img,
            ];
        }

        $_SESSION['cart.qty'] = isset($_SESSION['cart.qty']) ? $_SESSION['cart.qty'] + $qty : $qty;

        $_SESSION['cart.sum'] = isset($_SESSION['cart.sum']) ? bcadd($_SESSION['cart.sum'], bcmul($qty, $product->price, 2), 2) : bcmul($qty, $product->price, 2);
    }

    public static function countQuantity($qty = 0)
    {
        return $_SESSION['cart.qty'] = isset($_SESSION['cart.qty']) ? $_SESSION['cart.qty'] + $qty : $qty;
    }

    public static function countSum($sum = 0)
    {
        return $_SESSION['cart.sum'] = isset($_SESSION['cart.sum']) ? bcadd($_SESSION['cart.sum'], $sum, 2) : $sum;
    }

    public function recalc($id)
    {
        $qtyMinus = $_SESSION['cart'][$id]['qty'];
        $sumMinus = bcmul($_SESSION['cart'][$id]['qty'], $_SESSION['cart'][$id]['price'], 2);

        $_SESSION['cart.qty'] -= $qtyMinus;
        $_SESSION['cart.sum'] -= $sumMinus;

        unset($_SESSION['cart'][$id]);
    }
}
