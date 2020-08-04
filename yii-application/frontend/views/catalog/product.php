<?php

use frontend\widgets\recommendedList\RecommendedList;
use frontend\widgets\saleList\SaleList;
use yii\helpers\Url;
use yii\web\JqueryAsset; ?>

<section class="product">
    <div class="product__content">
        <div class="product__content-item">
            <div class="product__content-item-image">
                <img src="<?= Yii::getAlias('@img'); ?>/catalog/<?= $product->img; ?>" alt="" />
            </div>
            <div class="product__content-item-info">
                <h2><?= $product->name; ?></h2>
                <a class="backMenu__link" href="<?= Url::to(['catalog/category', 'categoryId' => $product->category_id]); ?>">Вернуться в каталог</a>
                <h3><?php echo $product->package; ?></h3>
                <?php if ($product->is_sale == Yii::$app->params['saleProduct']): ?>
                    <p><strike><?= $product->old_price; ?><span> руб.</span></strike></p>
                <?php endif; ?>
                <p class="price"><?= $product->price; ?><span>₽</span></p>
                <label for="qty">Количество:</label>
                <input type="text" value="1" id="qty">
                <div class="product__content-item-info-btn">
                    <a class="pay__link add-to-cart" data-id="<?= $product->id; ?>" href="<?= Url::to(['cart/add', 'id' => $product->id]); ?>">В корзину</a>
                </div>

                <h3>Информация о товаре</h3>
                <p><?= $product->description; ?></p>
                <br />
            </div>
        </div>
    </div>
</section>
<?= RecommendedList::widget() ?>

<?= SaleList::widget()?>

<?php $this->registerJsFile('@web/js/addToCart.js', [
    'depends' => JqueryAsset::className()
]);
