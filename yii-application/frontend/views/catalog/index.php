<?php
/* @var $this yii\web\View */

use frontend\widgets\categoryList\CategoryList;

?>
<main>
    <?php echo CategoryList::widget(); ?>
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
                    <h6>Категории</h6>
                    <a href="#">Пуговицы</a>
                    <a href="№">Наконечники</a>
                    <a href="№">Лентагвозди</a>
                    <a href="№">Нитки</a>
                    <a href="№">Подпятники</a>
                    <a href="№">Профиль ППУ</a>
                    <a href="№">Кольца декоративные</a>
                    <a href="№">Босонные изделия</a>
                    <a href="№">Прочая фурнитура</a>
                </div>
                <div class="catalogItem__content-item-grid">
                    <div class="catalogItem__content-item-grid-product">
                        <img src="<?php echo Yii::getAlias('@img'); ?>/popularItem/1.png" alt="" />
                        <h3>15 штук/упаковка</h3>
                        <p class="discond">800<span> руб.</span></p>
                        <p>500<span> руб.</span></p>
                        <a href="#">
                            <p>В корзину</p>
                            <img src="<?php echo Yii::getAlias('@img'); ?>/popularItem/cart.png" alt="" />
                        </a>
                    </div>
                    <div class="catalogItem__content-item-grid-product">
                        <img src="<?php echo Yii::getAlias('@img'); ?>/popularItem/1.png" alt="" />
                        <h3>15 штук/упаковка</h3>
                        <p class="discond">800<span> руб.</span></p>
                        <p>500<span> руб.</span></p>
                        <a href="#">
                            <p>В корзину</p>
                            <img src="<?php echo Yii::getAlias('@img'); ?>/popularItem/cart.png" alt="" />
                        </a>
                    </div>
                    <div class="catalogItem__content-item-grid-product">
                        <img src="<?php echo Yii::getAlias('@img'); ?>/popularItem/1.png" alt="" />
                        <h3>15 штук/упаковка</h3>
                        <p class="discond">800<span> руб.</span></p>
                        <p>500<span> руб.</span></p>
                        <a href="#">
                            <p>В корзину</p>
                            <img src="<?php echo Yii::getAlias('@img'); ?>/popularItem/cart.png" alt="" />
                        </a>
                    </div>
                    <div class="catalogItem__content-item-grid-product">
                        <img src="<?php echo Yii::getAlias('@img'); ?>/popularItem/1.png" alt="" />
                        <h3>15 штук/упаковка</h3>
                        <p class="discond">800<span> руб.</span></p>
                        <p>500<span> руб.</span></p>
                        <a href="#">
                            <p>В корзину</p>
                            <img src="<?php echo Yii::getAlias('@img'); ?>/popularItem/cart.png" alt="" />
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
