<?php
/* @var $this yii\web\View */

use frontend\widgets\categoryList\CategoryList;
use frontend\widgets\recommendedList\RecommendedList;
use frontend\widgets\saleList\SaleList;
use yii\helpers\Url;
use yii\web\JqueryAsset;

?>
<main>
    <section class="filter">
        <div class="filter__content">
            <div class="filter__content__title">
                <p>Фильтры и сортировка</p>
                <p>&times;</p>
            </div>
            <div class="filter__content-item">
                <div class="filter__content-item-link">
                    <?= CategoryList::widget(); ?>
                </div>
            </div>
        </div>
    </section>
    <section class="catalogItem">
        <div class="catalogItem__content">
            <div class="catalogItem__content-title">
                <h5><?= $categoryName->name; ?> <span><?= $counter; ?></span></h5>
                <div class="catalogItem__content-title-btn">
                    <a href="#" id="buttonFilterMini">
                        Кнопка
                    </a>
                </div>
            </div>
            <div class="catalogItem__content-item">
                <div class="catalogItem__content-item-filter">
                    <?= CategoryList::widget(); ?>
                </div>
                <div class="catalogItem__content-item-grid">
                    <?php foreach ($productList as $product): ?>
                        <div class="catalogItem__content-item-grid-product">
                            <a href="<?= Url::to(['catalog/product', 'id' => $product->id]); ?>"><img src="<?php echo Yii::getAlias('@img'); ?>/catalog/<?php echo $product->img; ?>" alt="" /></a>
                            <a href="<?= Url::to(['catalog/product', 'id' => $product->id]); ?>"><h4><?php echo $product->name; ?></h4></a>
                            <h3><?php echo $product->package; ?></h3>
                            <p><?php echo $product->price; ?><span> руб.</span></p>
                            <a class="add-to-cart" data-id="<?= $product->id; ?>" href="<?= Url::to(['cart/add', 'id' => $product->id]); ?>">
                                <p>В корзину</p>
                                <img src="<?php echo Yii::getAlias('@img'); ?>/popularItem/cart.png" alt="" />
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>
    <?= RecommendedList::widget() ?>

    <?= SaleList::widget()?>
</main>

<?php $this->registerJsFile('@web/js/addToCart.js', [
    'depends' => JqueryAsset::className()
]);