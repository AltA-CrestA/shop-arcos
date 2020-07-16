<?php

use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\MaskedInput; ?>

<main>
    <section class="order">
        <div class="order__content">
            <div class="order__content-back">
                <a href="<?= Url::to(['catalog/index'])?>">Каталог</a>
                <p>/</p>
                <a href="<?= Url::to(['cart/index'])?>">Корзина</a>
                <p>/</p>
                <a href="/">Оформление заказа</a>
            </div>
            <h2>Оформление заказа</h2>

            <?php $form = ActiveForm::begin(); ?>
            <div class="order__content-person">
                <h2>Персональные данные</h2>
                <div class="order__content-person-grid">
                    <?= $form->field($order, 'surname')->input('text', ['placeholder' => 'Фамилия'])->label(false); ?>
                    <?= $form->field($order, 'name')->input('text', ['placeholder' => 'Имя'])->label(false); ?>
                    <?= $form->field($order, 'phone')->label(false)->widget(MaskedInput::className(), [
                        'mask' => '+9 999 999-99-99',
                        'options' => ['placeholder' => 'Телефон']
                    ]); ?>
                    <?= $form->field($order, 'email')->input('email', ['placeholder' => 'E-mail'])->label(false); ?>
                </div>
            </div>
            <div class="order__content-delivery">
                <h2>Адрес доставки</h2>
                <div class="order__content-delivery-grid">
                    <?= $form->field($order, 'city')->input('text', ['placeholder' => 'Город'])->label(false); ?>
                    <?= $form->field($order, 'address')->input('text', ['placeholder' => 'Улица, дом, квартира'])->label(false); ?>
                </div>
            </div>
            <div class="order__content-textarea">
                <h2>Коментарий к заказу</h2>
                <div class="order__content-textarea-grid">
                    <?= $form->field($order, 'text')->textarea(['rows' => 10, 'cols' => 30])->label(false); ?>
                </div>
            </div>
            <div class="order__content-pay">
                <h2>Способ оплаты</h2>
                <div class="order__content-pay-grid">
                    <?= $form->field($order, 'payment')->radioList([
                        'site' => 'Оплата через сайт',
                    ])->label(false); ?>
                </div>
            </div>
            <div class="order__content-btn">
                <div class="order__content-btn-grid">
                    <div class="order__content-btn-grid-checkbox">
                        <?= Html::checkbox('checkbox', false, ['label' => 'Я согласен с&nbsp;' . Html::a('политикой кондефициальности', ['site/policy'])]) ?>
                    </div>
                    <?= Html::submitButton('Подтвердить заказ')?>
                </div>
            </div>
            <?php $form = ActiveForm::end(); ?>
        </div>
    </section>
</main>
