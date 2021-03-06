<?php

/* @var $this \yii\web\View */
/* @var $content string */

use frontend\models\Cart;
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
use yii\helpers\Url;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="wrapper">
<?php $this->beginBody() ?>

<header class="header">
    <div class="header__content">
        <div class="header__burger-logo">
            <div class="header__burger">
                <span></span>
            </div>
            <div class="header__burger-logo-image">
                <a href="<?php echo Url::to(['site/index']); ?>"> <picture><source srcset="<?php echo Yii::getAlias('@img'); ?>/logo.webp" type="image/webp"><img src="<?php echo Yii::getAlias('@img'); ?>/logo.png" alt="" /></picture></a>
            </div>
        </div>

        <div class="header__content-menu">
            <a href="<?php echo Url::to(['site/index', '#' => 'aboutCompany']); ?>">О компании</a>
            <a href="<?php echo Url::to(['catalog/index']); ?>">Каталог</a>
            <a href="<?php echo Url::to(['site/index', '#' => 'stocks']); ?>">Акции</a>
            <a href="<?php echo Url::to(['site/index', '#' => 'popularItem']); ?>">Популярные товары</a>
            <a href="<?php echo Url::to(['site/contact']); ?>">Контакты</a>
        </div>
        <div class="header__content-contact">
            <div class="header__content-contact-phone">
                <a href="tel:+79654619991">
                    <picture><source srcset="<?php echo Yii::getAlias('@img'); ?>/phone.webp" type="image/webp"><img src="<?php echo Yii::getAlias('@img'); ?>/phone.png" alt="" /></picture>
                    <p>8(965)461-99-91</p>
                </a>
            </div>
            <div class="header__content-contact-cart">
                <a href="<?php echo Url::to(['cart/index']); ?>">
                    <h4 id="cart-count-qty"><?= Cart::countQuantity(); ?></h4>
                    <picture><source srcset="<?php echo Yii::getAlias('@img'); ?>/cart.webp" type="image/webp"><img src="<?php echo Yii::getAlias('@img'); ?>/cart.png" alt="" /></picture>
                    <p id="cart-count-sum"><?= Cart::countSum(); ?><span> руб.</span></p>
                </a>
            </div>
        </div>
    </div>
</header>
<section class="headerAfter">
    <div class="headerAfter__content">
        <div class="headerAfter__content-logo element">
            <a href="/"><picture><source srcset="<?php echo Yii::getAlias('@img'); ?>/logo.webp" type="image/webp"><img src="<?php echo Yii::getAlias('@img'); ?>/logo.png" alt="" /></picture></a>
            <!-- <p>Магазин фурнитуры<br />для мягкой мебели</p> -->
        </div>
        <div class="headerAfter__content-location element">
            <picture><source srcset="<?php echo Yii::getAlias('@img'); ?>/map.webp" type="image/webp"><img src="<?php echo Yii::getAlias('@img'); ?>/map.png" alt="" /></picture>
            <p>Краснодарский край, Отрадненский р-н,<br />ст. Отрадная, ул. Урупская 62г</p>
        </div>
        <div class="headerAfter__content-mail element">
            <picture><source srcset="<?php echo Yii::getAlias('@img'); ?>/mail.webp" type="image/webp"><img src="<?php echo Yii::getAlias('@img'); ?>/mail.png" alt="" /></picture>
            <p><a href="mailto:shop-arcos@mail.ru">shop-arcos@mail.ru</a></p>
        </div>
        <div class="headerAfter__content-time element">
            <picture><source srcset="<?php echo Yii::getAlias('@img'); ?>/time.webp" type="image/webp"><img src="<?php echo Yii::getAlias('@img'); ?>/time.png" alt="" /></picture>
            <p>Пн-Пт 8:00-18:00</p>
        </div>
        <div class="headerAfter__content-button">
            <a href="#popup" class="popup-link">Обратный звонок</a>
        </div>
    </div>
</section>

        <?= Alert::widget() ?>
        <?= $content ?>


<footer class="footer">
    <div class="footer__content">
        <div class="footer__content-logo">
            <picture><source srcset="<?php echo Yii::getAlias('@img'); ?>/logoFooter.webp" type="image/webp"><img src="<?php echo Yii::getAlias('@img'); ?>/logoFooter.png" alt="" /></picture>
        </div>
        <div class="footer__content-info">
            <div class="footer__content-info-item">
                <picture><source srcset="<?php echo Yii::getAlias('@img'); ?>/phone.svg" type="image/webp"><img src="<?php echo Yii::getAlias('@img'); ?>/phone.svg" alt="" /></picture>
                <p><a href="tel:+79654619991">8(965)461-99-91</a></p>
            </div>
            <div class="footer__content-info-item">
                <picture><source srcset="<?php echo Yii::getAlias('@img'); ?>/mail.svg" type="image/webp"><img src="<?php echo Yii::getAlias('@img'); ?>/mail.svg" alt="" /></picture>
                <p><a href="mailto:shop-arcos@mail.ru">shop-arcos@mail.ru</a></p>
            </div>
            <div class="footer__content-info-item social instBig">
                <p>Мы в социальных сетях</p>
            </div>
            <div class="footer__content-info-item">
                <picture><source srcset="<?php echo Yii::getAlias('@img'); ?>/phone.svg" type="image/webp"><img src="<?php echo Yii::getAlias('@img'); ?>/phone.svg" alt="" /></picture>
                <p><a href="tel:+79186829999">8(918)682-99-99</a></p>
            </div>
            <div class="footer__content-info-item map">
                <picture><source srcset="<?php echo Yii::getAlias('@img'); ?>/map.svg" type="image/webp"><img src="<?php echo Yii::getAlias('@img'); ?>/map.svg" alt="" /></picture>
                <p>Краснодарский край, Отрадненский р-н, ст. Отрадная, ул. Урупская 62г</p>
            </div>
            <div class="footer__content-info-item social">
                <picture><source srcset="<?php echo Yii::getAlias('@img'); ?>/inst.svg" type="image/webp"><img src="<?php echo Yii::getAlias('@img'); ?>/inst.svg" alt="" /></picture>
                <p class="instMin">Мы в социальных сетях</p>
            </div>
        </div>
    </div>
    <div class="footer__contentDown">
        <p>ARCOS © 2020. Все права защищены</p>
    </div>
</footer>

<div class="wr">
    <nav class="menuShare">
        <input type="checkbox" href="#" class="menu-open" name="menu-open" id="menu-open" />
        <label class="menu-open-button" for="menu-open">
            <picture><source srcset="<?php echo Yii::getAlias('@img'); ?>/call/main.webp" type="image/webp"><img src="<?php echo Yii::getAlias('@img'); ?>/call/main.png" alt="" /></picture>
        </label>
        <a class="menu-item phone_share_btn" href="tel:+79832693953">
            <picture><source srcset="<?php echo Yii::getAlias('@img'); ?>/call/call.webp" type="image/webp"><img src="<?php echo Yii::getAlias('@img'); ?>/call/call.png" alt="" /></picture>
        </a>
        <a class="menu-item phone_share_btn" href="https://viber.click/79832693953">
            <picture><source srcset="<?php echo Yii::getAlias('@img'); ?>/call/viber.webp" type="image/webp"><img src="<?php echo Yii::getAlias('@img'); ?>/call/viber.png" alt="" /></picture>
        </a>
        <a class="menu-item whatsapp_share_btn" href="https://wa.me/79832693953">
            <picture><source srcset="<?php echo Yii::getAlias('@img'); ?>/call/wats.webp" type="image/webp"><img src="<?php echo Yii::getAlias('@img'); ?>/call/wats.png" alt="" /></picture>
        </a>
    </nav>
</div>

<div id="popup" class="popup">
    <div class="popup__body">
        <div class="popup__content">
            <h2>Получить консультацию</h2>
            <p>Мы позвоним Вам в течении 10 минут</p>
            <a href="#" class="popup__clouse close-popup">&times;</a>
            <div class="popup__message"></div>
            <div class="popup__item">
                <div class="popup__item-inpit">
                    <div class="inpit__image">
                        <picture><source srcset="<?= Yii::getAlias('@img'); ?>/popup/name.webp" type="image/webp"><img src="<?php echo Yii::getAlias('@img'); ?>/popup/name.png" alt="" /></picture>
                    </div>
                    <input type="text" placeholder="Ваше имя" name="name-popup" id="name-popup" />
                </div>
                <div class="popup__item-inpit">
                    <div class="inpit__image">
                        <picture><source srcset="<?= Yii::getAlias('@img'); ?>/popup/phone.webp" type="image/webp"><img src="<?php echo Yii::getAlias('@img'); ?>/popup/phone.png" alt="" /></picture>
                    </div>
                    <input type="tel" placeholder="Ваш телефон" name="phone-popup" id="phone-popup" />
                </div>
                <div class="popup__item-formBtn">
                    <button type="submit" name="submit-popup" id="submit-popup">Отправить</button>
                </div>
                <p>Нажимая кнопку Вы соглашаетесь с политикой конфиденциальности</p>
            </div>
        </div>
    </div>
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
