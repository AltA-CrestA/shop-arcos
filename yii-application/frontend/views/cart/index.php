<?php
/* @var $this yii\web\View */

use yii\helpers\Url;

$this->title = 'Корзина — Shop-Arcos';
?>

<main>
    <section class="mainCart">
        <div class="mainCart__content">
            <div class="mainCart__content-back">
                <a href="<?php echo Url::to(['catalog/index']); ?>">Каталог</a>
                <p>/</p>
                <a href="<?php echo Url::to(['cart/index']); ?>">Корзина</a>
            </div>
            <h2>Корзина</h2>
            <div class="mainCart__content-cart">
                <div class="mainCart__content-cart-name">
                    <p>Товары</p>
                    <p>Цена</p>
                    <p>Сумма</p>
                </div>
                <div class="mainCart__content-cart-product">
                    <div class="mainCart__content-cart-product-main">
                        <img src="<?php echo Yii::getAlias('@img'); ?>/catalog/1.png" alt="" />
                        <div class="mainCart__content-cart-product-main-title">
                            <p>Наконечник "Элита"</p>
                            <div class="mainCart__content-cart-product-main-title-how">
                                <p>Кол-во</p>
                                <input type="number" />
                            </div>
                        </div>
                    </div>
                    <p class="sum">2300<span> руб.</span></p>
                    <p class="sum">4600<span> руб.</span></p>
                    <p class="delete">
                        <a href="#">&times;</a>
                    </p>
                </div>
                <div class="mainCart__content-cart-product">
                    <div class="mainCart__content-cart-product-main">
                        <img src="<?php echo Yii::getAlias('@img'); ?>/catalog/1.png" alt="" />
                        <div class="mainCart__content-cart-product-main-title">
                            <p>Наконечник "Элита"</p>
                            <div class="mainCart__content-cart-product-main-title-how">
                                <p>Кол-во</p>
                                <input type="number" />
                            </div>
                        </div>
                    </div>
                    <p class="sum">2300<span> руб.</span></p>
                    <p class="sum">4600<span> руб.</span></p>
                    <p class="delete">
                        <a href="#">&times;</a>
                    </p>
                </div>
                <div class="mainCart__content-cart-total">
                    <p>Товаров на сумму</p>
                    <p class="sum">7200<span> руб.</span></p>
                </div>
                <div class="mainCart__content-cart-btn">
                    <a href="/site/order.html">Подтвердить заказ</a>
                </div>
            </div>
        </div>
    </section>

</main>
