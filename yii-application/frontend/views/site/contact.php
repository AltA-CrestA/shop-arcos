<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;
use yii\widgets\MaskedInput;

$this->title = 'Контактная форма';

?>
<div class="site-contact">

    <main>
        <section class="contact">
            <div class="contact__content">
                <?= ($session) ? $session->getFlash('success') : false; ?>
                <div class="contact__content-form">
                    <h2><?= Html::encode($this->title) ?></h2>
                    <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

                    <?= $form->field($model, 'name')->textInput(['placeholder' => 'ФИО*'])->label(false) ?>

                    <?= $form->field($model, 'phone', [
                        'inputOptions' => ['class' => 'form-control transparent']
                    ])->textInput()->widget(MaskedInput::className(), [
                        'mask' => '+9 999 999-99-99',
                        'options' => ['placeholder' => 'Телефон*']
                    ])->label(false); ?>

                    <?= $form->field($model, 'body')->textarea(['rows' => 6])->label(false) ?>

                    <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                        'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
                    ])->label('Проверочный код') ?>

                    <div class="contact__content-form-btn">
                        <?= Html::submitButton('Отправить сообщение', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                    </div>

                    <?php ActiveForm::end(); ?>
                </div>
                <div class="contact__content-map">
                    <script
                            type="text/javascript"
                            charset="utf-8"
                            async
                            src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Af3c6dfc34a3ca6ed0381eab79173ef0c803857204cbc150cb42e93254088a270&amp;lang=ru_RU&amp;scroll=true"
                    ></script>
                </div>
            </div>
        </section>
    </main>

</div>
