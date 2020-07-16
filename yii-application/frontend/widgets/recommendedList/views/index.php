<?php
use yii\helpers\Url;
?>

<section class="popularItem">
    <div id="popularItem" class="popularItem__content">
        <h2>Популярные товары</h2>
        <div class="popularItem__content-slider">
            <div class="popularItem__content-slider-buttons">
                <button class="popularItem__content-slider-buttons-prev">
                    <picture><source srcset="<?php echo Yii::getAlias('@img'); ?>/popularItem/btnPrev.svg" type="image/webp"><img src="<?php echo Yii::getAlias('@img'); ?>/popularItem/btnPrev.svg" alt="" /></picture>
                </button>
                <button class="popularItem__content-slider-buttons-next">
                    <picture><source srcset="<?php echo Yii::getAlias('@img'); ?>/popularItem/btnPrev.svg" type="image/webp"><img src="<?php echo Yii::getAlias('@img'); ?>/popularItem/btnPrev.svg" alt="" /></picture>
                </button>
            </div>
            <div class="popularItem__content-slider-track">

                <?php foreach ($recommendedList as $item): ?>
                <div class="popularItem__content-slider-track-item">
                    <div class="popularItem__content-slider-track-item-product">
                        <img src="<?php echo Yii::getAlias('@img'); ?>/catalog/<?= $item->img; ?>" alt="" />
                        <h4><?= $item->name; ?></h4>
                        <h3><?= $item->package; ?></h3>
                        <p><?= $item->price; ?><span> руб.</span></p>
                        <a href="#">
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
