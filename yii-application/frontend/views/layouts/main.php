<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
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
<body>
<?php $this->beginBody() ?>

<header class="header">
    <div class="header__content">
        <div class="header__content-menu">
            <a href="#">О компании</a>
            <a href="#">Каталог</a>
            <a href="#">Акции</a>
            <a href="#">Популярные товары</a>
            <a href="#">Контакты</a>
        </div>
        <div class="header__content-phone">
            <a href="tel:+79654619991">
                <img src="/img/phone.png" alt="" />
                <p>8(965)461-99-91</p>
            </a>
        </div>
        <div class="header__content-cart">
            <h4>12</h4>
            <img src="/img/cart.png" alt="" />
            <p>5897<span> руб.</span></p>
        </div>
    </div>
</header>
<section class="headerAfter">
    <div class="headerAfter__content">
        <div class="headerAfter__content-logo element">
            <img src="/img/logo.png" alt="" />
            <p>Магазин фурнитуры<br />для мягкой мебели</p>
        </div>
        <div class="headerAfter__content-location element">
            <img src="/img/map.png" alt="" />
            <p>Краснодарский край, Отрадненский р-н,<br />ст. Отрадная, ул. Урупская 62г</p>
        </div>
        <div class="headerAfter__content-mail element">
            <img src="/img/mail.png" alt="" />
            <p><a href="mailto:shop-arcos@mail.ru">shop-arcos@mail.ru</a></p>
        </div>
        <div class="headerAfter__content-time element">
            <img src="/img/time.png" alt="" />
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
            <img src="/img/logoFooter.png" alt="" />
        </div>
        <div class="footer__content-info">
            <div class="footer__content-info-item">
                <img src="/img/phone.svg" alt="" />
                <p><a href="tel:+79654619991">8(965)461-99-91</a></p>
            </div>
            <div class="footer__content-info-item">
                <img src="/img/mail.svg" alt="" />
                <p><a href="mailto:shop-arcos@mail.ru">shop-arcos@mail.ru</a></p>
            </div>
            <div class="footer__content-info-item social">
                <p>Мы в социальных сетях</p>
            </div>
            <div class="footer__content-info-item">
                <img src="/img/phone.svg" alt="" />
                <p><a href="tel:+79186829999">8(918)682-99-99</a></p>
            </div>
            <div class="footer__content-info-item map">
                <img src="/img/map.svg" alt="" />
                <p>Краснодарский край, Отрадненский р-н, ст. Отрадная, ул. Урупская 62г</p>
            </div>
            <div class="footer__content-info-item social">
                <img src="/img/inst.svg" alt="" />
            </div>
        </div>
    </div>
    <div class="footer__contentDown">
        <p>ARCOS с 2020. Все права защищены</p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
