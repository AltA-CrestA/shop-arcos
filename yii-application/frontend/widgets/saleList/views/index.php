<?php
use yii\helpers\Url;
?>

<section class="stocks">
    <div id="stocks" class="stocks__content">
        <h2>Акции</h2>
        <div class="stocks__content-slider">
            <div class="stocks__content-slider-buttons">
                <button class="stocks__content-slider-buttons-prev">
                    <picture><source srcset="<?php echo Yii::getAlias('@img'); ?>/popularItem/btnPrev.svg" type="image/webp"><img src="<?php echo Yii::getAlias('@img'); ?>/popularItem/btnPrev.svg" alt="" /></picture>
                </button>
                <button class="stocks__content-slider-buttons-next">
                    <picture><source srcset="<?php echo Yii::getAlias('@img'); ?>/popularItem/btnPrev.svg" type="image/webp"><img src="<?php echo Yii::getAlias('@img'); ?>/popularItem/btnPrev.svg" alt="" /></picture>
                </button>
            </div>
            <div class="stocks__content-slider-track">

                <?php foreach ($saleList as $item): ?>
                <div class="stocks__content-slider-track-item">
                    <div class="stocks__content-slider-track-item-product">
                        <div class="rebate">
                            <div class="rebate__content">
                                <picture><source srcset="<?php echo Yii::getAlias('@img'); ?>/stocks/rebate.webp" type="image/webp"><img class="img__rebate" src="<?php echo Yii::getAlias('@img'); ?>/stocks/rebate.png" alt="" /></picture>
                                <p><?= round(($item->price * 100 / $item->old_price) - 100); ?>%</p>
                            </div>
                        </div>
                        <a href="<?= Url::to(['catalog/product', 'id' => $product->id]); ?>"><img src="<?= Yii::getAlias('@img'); ?>/catalog/<?= $item->img; ?>" alt="" /></a>
                            <a href="<?= Url::to(['catalog/product', 'id' => $product->id]); ?>"><h4><?= $item->name; ?></h4></a>
                        <h3><?= $item->package; ?></h3>
                        <p><strike><?= $item->old_price; ?><span> руб.</span></strike></p>
                        <p><?= $item->price; ?><span> руб.</span></p>
                        <a class="add-to-cart" data-id="<?= $item->id; ?>" href="<?= Url::to(['cart/add', 'id' => $item->id]); ?>">
                            <p>В корзину</p>
                            <picture><source srcset="<?php echo Yii::getAlias('@img'); ?>/popularItem/cart.webp" type="image/webp"><img src="<?php echo Yii::getAlias('@img'); ?>/popularItem/cart.png" alt="" /></picture>
                        </a>
                    </div>
                </div>
                <?php endforeach; ?>

            </div>
        </div>
    </div>
</section>
