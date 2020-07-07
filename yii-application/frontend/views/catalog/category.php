<?php
/* @var $this yii\web\View */

use frontend\widgets\categoryList\CategoryList;

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
                    <?php echo CategoryList::widget(); ?>
                </div>
            </div>
        </div>
    </section>
    <section class="catalogItem">
        <div class="catalogItem__content">
            <div class="catalogItem__content-title">
                <h5>Название категории <span>16</span></h5>
                <div class="catalogItem__content-title-btn">
                    <a href="#" id="buttonFilterMini">
                        Кнопка
                    </a>
                </div>
            </div>
            <div class="catalogItem__content-item">
                <div class="catalogItem__content-item-filter">
                    <?php echo CategoryList::widget(); ?>
                </div>
                <div class="catalogItem__content-item-grid">
                    <?php foreach ($productList as $product): ?>
                        <div class="catalogItem__content-item-grid-product">
                            <img src="<?php echo Yii::getAlias('@img'); ?>/catalog/<?php echo $product->img; ?>" alt="" />
                            <h4><?php echo $product->name; ?></h4>
                            <h3><?php echo $product->package; ?></h3>
                            <p><?php echo $product->price; ?><span> руб.</span></p>
                            <a href="#">
                                <p>В корзину</p>
                                <img src="<?php echo Yii::getAlias('@img'); ?>/popularItem/cart.png" alt="" />
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>
</main>