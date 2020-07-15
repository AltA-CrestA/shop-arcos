<?php
/* @var $this yii\web\View */

use yii\helpers\Html;
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

            <?php if (!isset($session['cart']) || empty($session['cart'])): ?>
                <h3>Корзина пуста</h3>
            <?php else: ?>

            <div class="mainCart__content-cart">
                <div class="mainCart__content-cart-name">
                    <p>Товары</p>
                    <p>Количество</p>
                    <p>Цена</p>
                    <p>Сумма</p>
                </div>

                <?php foreach ($session['cart'] as $id => $item): ?>
                <div class="mainCart__content-cart-product">
                    <div class="mainCart__content-cart-product-main">
                        <img src="<?php echo Yii::getAlias('@img'); ?>/catalog/<?= $item['img']; ?>" alt="" />
                        <div class="mainCart__content-cart-product-main-title">
                            <p><?= $item['name']; ?></p>
                            <div class="mainCart__content-cart-product-main-title-how">
                                <p>Кол-во</p>
                                <input type="number" />
                            </div>
                        </div>
                    </div>
                    <p class="sum"><?= $item['qty']; ?><span> шт.</span></p>
                    <p class="sum"><?= $item['price']; ?><span> руб.</span></p>
                    <p class="sum"><?= $item['price'] * $item['qty']; ?><span> руб.</span></p>
                    <p class="delete">
                        <a href="<?= Url::to(['cart/delete', 'id' => $id]); ?>">&times;</a>
                    </p>
                </div>
                <?php endforeach; ?>

                <div class="mainCart__content-cart-total">
                    <p>Товаров на сумму</p>
                    <p class="sum"><?= $session['cart.sum']; ?><span> руб.</span></p>
                </div>
                <div class="mainCart__content-cart-btn">
                    <p>Что то забыли? <a href="<?= Url::to(['catalog/index'])?>">Нажмите, чтобы вернутсья</a></p>
                    <div class="cart__content-cart-btn-item">
                        <?= Html::beginForm(['cart/index'], 'post'); ?>
                        <?= Html::submitButton('Очистить корзину', ['class' => 'clear', 'value' => 'clear', 'name' => 'clear']); ?>
                        <?= Html::submitButton('Подтвердить заказ', ['class' => 'next', 'value' => 'order', 'name' => 'order']); ?>
                        <?= Html::endForm(); ?>
                    </div>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </section>

</main>
