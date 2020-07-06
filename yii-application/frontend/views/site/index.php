<?php

/* @var $this yii\web\View */

$this->title = 'Главная — Shop-Arcos';
?>

<main>
    <section class="mainSection">
        <div class="slider">
            <div class="slider__item">
                <picture><source srcset="<?php echo Yii::getAlias('@img'); ?>/slider/01.webp" type="image/webp"><img src="<?php echo Yii::getAlias('@img'); ?>/slider/01.jpg" alt="" /></picture>
            </div>
            <div class="slider__item">
                <picture><source srcset="<?php echo Yii::getAlias('@img'); ?>/slider/01.webp" type="image/webp"><img src="<?php echo Yii::getAlias('@img'); ?>/slider/01.jpg" alt="" /></picture>
            </div>
            <div class="slider__item">
                <picture><source srcset="<?php echo Yii::getAlias('@img'); ?>/slider/01.webp" type="image/webp"><img src="<?php echo Yii::getAlias('@img'); ?>/slider/01.jpg" alt="" /></picture>
            </div>
            <div class="slider__item">
                <picture><source srcset="<?php echo Yii::getAlias('@img'); ?>/slider/01.webp" type="image/webp"><img src="<?php echo Yii::getAlias('@img'); ?>/slider/01.jpg" alt="" /></picture>
            </div>
        </div>
        <div class="goOver">
            <div class="goOver__content">
                <h2>ФУРНИТУРА ДЛЯ МЕБЕЛИ</h2>
                <a href="#">
                    <p>Перейти в каталог</p>
                    <picture><source srcset="<?php echo Yii::getAlias('@img'); ?>/arrow.svg" type="image/webp"><img src="<?php echo Yii::getAlias('@img'); ?>/arrow.svg" alt="" /></picture>
                </a>
            </div>
        </div>
    </section>
    <section class="minButton">
        <div class="minButton__content">
            <div class="minButton__content-goOver">
                <a href="#">Перейти в каталог</a>
            </div>
            <div class="minButton__content-call">
                <a href="#popup" class="popup-link">Обратный звонок</a>
            </div>
        </div>
    </section>

    <section class="catalog">
        <div class="catalog__content">
            <h2>Каталог товаров</h2>
            <div class="catalog__content-grid">
                <div class="catalog__content-grid-item">
                    <a href="#">
                        <picture><source srcset="<?php echo Yii::getAlias('@img'); ?>/catalog/1.webp" type="image/webp"><img src="<?php echo Yii::getAlias('@img'); ?>/catalog/1.png" alt="" /></picture>
                        <p>Пуговицы</p>
                    </a>
                </div>
                <div class="catalog__content-grid-item">
                    <a href="#">
                        <picture><source srcset="<?php echo Yii::getAlias('@img'); ?>/catalog/1.webp" type="image/webp"><img src="<?php echo Yii::getAlias('@img'); ?>/catalog/1.png" alt="" /></picture>
                        <p>Наконечники</p>
                    </a>
                </div>
                <div class="catalog__content-grid-item">
                    <a href="#">
                        <picture><source srcset="<?php echo Yii::getAlias('@img'); ?>/catalog/1.webp" type="image/webp"><img src="<?php echo Yii::getAlias('@img'); ?>/catalog/1.png" alt="" /></picture>
                        <p>Лентагвозди</p>
                    </a>
                </div>
                <div class="catalog__content-grid-item">
                    <a href="#">
                        <picture><source srcset="<?php echo Yii::getAlias('@img'); ?>/catalog/1.webp" type="image/webp"><img src="<?php echo Yii::getAlias('@img'); ?>/catalog/1.png" alt="" /></picture>
                        <p>Нитки</p>
                    </a>
                </div>
                <div class="catalog__content-grid-item">
                    <a href="#">
                        <picture><source srcset="<?php echo Yii::getAlias('@img'); ?>/catalog/1.webp" type="image/webp"><img src="<?php echo Yii::getAlias('@img'); ?>/catalog/1.png" alt="" /></picture>
                        <p>Подпятники</p>
                    </a>
                </div>
                <div class="catalog__content-grid-item">
                    <a href="#">
                        <picture><source srcset="<?php echo Yii::getAlias('@img'); ?>/catalog/1.webp" type="image/webp"><img src="<?php echo Yii::getAlias('@img'); ?>/catalog/1.png" alt="" /></picture>
                        <p>Профиль ППУ</p>
                    </a>
                </div>
                <div class="catalog__content-grid-item">
                    <a href="#">
                        <picture><source srcset="<?php echo Yii::getAlias('@img'); ?>/catalog/1.webp" type="image/webp"><img src="<?php echo Yii::getAlias('@img'); ?>/catalog/1.png" alt="" /></picture>
                        <p>Кольца декоративные</p>
                    </a>
                </div>
                <div class="catalog__content-grid-item">
                    <a href="#">
                        <picture><source srcset="<?php echo Yii::getAlias('@img'); ?>/catalog/1.webp" type="image/webp"><img src="<?php echo Yii::getAlias('@img'); ?>/catalog/1.png" alt="" /></picture>
                        <p>Босонные изделия</p>
                    </a>
                </div>
                <div class="catalog__content-grid-item">
                    <a href="#">
                        <picture><source srcset="<?php echo Yii::getAlias('@img'); ?>/catalog/1.webp" type="image/webp"><img src="<?php echo Yii::getAlias('@img'); ?>/catalog/1.png" alt="" /></picture>
                        <p>Прочая фурнитура</p>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="popularItem">
        <div class="popularItem__content">
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
                    <div class="popularItem__content-slider-track-item">
                        <div class="popularItem__content-slider-track-item-product">
                            <picture><source srcset="<?php echo Yii::getAlias('@img'); ?>/popularItem/1.webp" type="image/webp"><img src="<?php echo Yii::getAlias('@img'); ?>/popularItem/1.png" alt="" /></picture>
                            <h3>15 штук/упаковка</h3>
                            <p class="discond">800<span> руб.</span></p>
                            <p>500<span> руб.</span></p>
                            <a href="#">
                                <p>В корзину</p>
                                <picture><source srcset="<?php echo Yii::getAlias('@img'); ?>/popularItem/cart.webp" type="image/webp"><img src="<?php echo Yii::getAlias('@img'); ?>/popularItem/cart.png" alt="" /></picture>
                            </a>
                        </div>
                    </div>
                    <div class="popularItem__content-slider-track-item">
                        <div class="popularItem__content-slider-track-item-product">
                            <picture><source srcset="<?php echo Yii::getAlias('@img'); ?>/popularItem/1.webp" type="image/webp"><img src="<?php echo Yii::getAlias('@img'); ?>/popularItem/1.png" alt="" /></picture>
                            <h3>15 штук/упаковка</h3>
                            <p class="discond">800<span> руб.</span></p>
                            <p>500<span> руб.</span></p>
                            <a href="#">
                                <p>В корзину</p>
                                <picture><source srcset="<?php echo Yii::getAlias('@img'); ?>/popularItem/cart.webp" type="image/webp"><img src="<?php echo Yii::getAlias('@img'); ?>/popularItem/cart.png" alt="" /></picture>
                            </a>
                        </div>
                    </div>
                    <div class="popularItem__content-slider-track-item">
                        <div class="popularItem__content-slider-track-item-product">
                            <picture><source srcset="<?php echo Yii::getAlias('@img'); ?>/popularItem/1.webp" type="image/webp"><img src="<?php echo Yii::getAlias('@img'); ?>/popularItem/1.png" alt="" /></picture>
                            <h3>15 штук/упаковка</h3>
                            <p class="discond">800<span> руб.</span></p>
                            <p>500<span> руб.</span></p>
                            <a href="#">
                                <p>В корзину</p>
                                <picture><source srcset="<?php echo Yii::getAlias('@img'); ?>/popularItem/cart.webp" type="image/webp"><img src="<?php echo Yii::getAlias('@img'); ?>/popularItem/cart.png" alt="" /></picture>
                            </a>
                        </div>
                    </div>
                    <div class="popularItem__content-slider-track-item">
                        <div class="popularItem__content-slider-track-item-product">
                            <picture><source srcset="<?php echo Yii::getAlias('@img'); ?>/popularItem/1.webp" type="image/webp"><img src="<?php echo Yii::getAlias('@img'); ?>/popularItem/1.png" alt="" /></picture>
                            <h3>15 штук/упаковка</h3>
                            <p class="discond">800<span> руб.</span></p>
                            <p>500<span> руб.</span></p>
                            <a href="#">
                                <p>В корзину</p>
                                <picture><source srcset="<?php echo Yii::getAlias('@img'); ?>/popularItem/cart.webp" type="image/webp"><img src="<?php echo Yii::getAlias('@img'); ?>/popularItem/cart.png" alt="" /></picture>
                            </a>
                        </div>
                    </div>
                    <div class="popularItem__content-slider-track-item">
                        <div class="popularItem__content-slider-track-item-product">
                            <picture><source srcset="<?php echo Yii::getAlias('@img'); ?>/popularItem/1.webp" type="image/webp"><img src="<?php echo Yii::getAlias('@img'); ?>/popularItem/1.png" alt="" /></picture>
                            <h3>15 штук/упаковка</h3>
                            <p class="discond">800<span> руб.</span></p>
                            <p>500<span> руб.</span></p>
                            <a href="#">
                                <p>В корзину</p>
                                <picture><source srcset="<?php echo Yii::getAlias('@img'); ?>/popularItem/cart.webp" type="image/webp"><img src="<?php echo Yii::getAlias('@img'); ?>/popularItem/cart.png" alt="" /></picture>
                            </a>
                        </div>
                    </div>
                    <div class="popularItem__content-slider-track-item">
                        <div class="popularItem__content-slider-track-item-product">
                            <picture><source srcset="<?php echo Yii::getAlias('@img'); ?>/popularItem/1.webp" type="image/webp"><img src="<?php echo Yii::getAlias('@img'); ?>/popularItem/1.png" alt="" /></picture>
                            <h3>15 штук/упаковка</h3>
                            <p class="discond">800<span> руб.</span></p>
                            <p>500<span> руб.</span></p>
                            <a href="#">
                                <p>В корзину</p>
                                <picture><source srcset="<?php echo Yii::getAlias('@img'); ?>/popularItem/cart.webp" type="image/webp"><img src="<?php echo Yii::getAlias('@img'); ?>/popularItem/cart.png" alt="" /></picture>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="stocks">
        <div class="stocks__content">
            <h2>Акции</h2>
            <div class="stocks__content-slider">
                <div class="stocks__content-slider-buttons">
                    <button class="stocks__content-slider-buttons-prev">
                        <picture><source srcset="<?php echo Yii::getAlias('@img'); ?>/popularItem/btnPrev.svg" type="image/webp"><img src="<?php echo Yii::getAlias('@img'); ?>/popularItem/btnPrev.svg" alt="" /></picture>
                    </button>
                    <button class="stocks__content-slider-buttons-next">
                        <picture><source srcset="<?php echo Yii::getAlias('@img'); ?>/popularItem/btnPrev.svg" type="image/webp"><img src="<?php echo Yii::getAlias('@img'); ?>/popularItem/btnPrev.svg" alt="" /></picture>
                    </button>
                </div>
                <div class="stocks__content-slider-track">
                    <div class="stocks__content-slider-track-item">
                        <div class="stocks__content-slider-track-item-product">
                            <div class="rebate">
                                <div class="rebate__content">
                                    <picture><source srcset="<?php echo Yii::getAlias('@img'); ?>/stocks/rebate.webp" type="image/webp"><img class="img__rebate" src="<?php echo Yii::getAlias('@img'); ?>/stocks/rebate.png" alt="" /></picture>
                                    <p>-15%</p>
                                </div>
                            </div>
                            <picture><source srcset="<?php echo Yii::getAlias('@img'); ?>/popularItem/1.webp" type="image/webp"><img src="<?php echo Yii::getAlias('@img'); ?>/popularItem/1.png" alt="" /></picture>
                            <h3>15 штук/упаковка</h3>
                            <p class="discond">800<span> руб.</span></p>
                            <p>500<span> руб.</span></p>
                            <a href="#">
                                <p>В корзину</p>
                                <picture><source srcset="<?php echo Yii::getAlias('@img'); ?>/popularItem/cart.webp" type="image/webp"><img src="<?php echo Yii::getAlias('@img'); ?>/popularItem/cart.png" alt="" /></picture>
                            </a>
                        </div>
                    </div>
                    <div class="stocks__content-slider-track-item">
                        <div class="stocks__content-slider-track-item-product">
                            <div class="rebate">
                                <div class="rebate__content">
                                    <picture><source srcset="<?php echo Yii::getAlias('@img'); ?>/stocks/rebate.webp" type="image/webp"><img class="img__rebate" src="<?php echo Yii::getAlias('@img'); ?>/stocks/rebate.png" alt="" /></picture>
                                    <p>-15%</p>
                                </div>
                            </div>
                            <picture><source srcset="<?php echo Yii::getAlias('@img'); ?>/popularItem/1.webp" type="image/webp"><img src="<?php echo Yii::getAlias('@img'); ?>/popularItem/1.png" alt="" /></picture>
                            <h3>15 штук/упаковка</h3>
                            <p class="discond">800<span> руб.</span></p>
                            <p>500<span> руб.</span></p>
                            <a href="#">
                                <p>В корзину</p>
                                <picture><source srcset="<?php echo Yii::getAlias('@img'); ?>/popularItem/cart.webp" type="image/webp"><img src="<?php echo Yii::getAlias('@img'); ?>/popularItem/cart.png" alt="" /></picture>
                            </a>
                        </div>
                    </div>
                    <div class="stocks__content-slider-track-item">
                        <div class="stocks__content-slider-track-item-product">
                            <div class="rebate">
                                <div class="rebate__content">
                                    <picture><source srcset="<?php echo Yii::getAlias('@img'); ?>/stocks/rebate.webp" type="image/webp"><img class="img__rebate" src="<?php echo Yii::getAlias('@img'); ?>/stocks/rebate.png" alt="" /></picture>
                                    <p>-15%</p>
                                </div>
                            </div>
                            <picture><source srcset="<?php echo Yii::getAlias('@img'); ?>/popularItem/1.webp" type="image/webp"><img src="<?php echo Yii::getAlias('@img'); ?>/popularItem/1.png" alt="" /></picture>
                            <h3>15 штук/упаковка</h3>
                            <p class="discond">800<span> руб.</span></p>
                            <p>500<span> руб.</span></p>
                            <a href="#">
                                <p>В корзину</p>
                                <picture><source srcset="<?php echo Yii::getAlias('@img'); ?>/popularItem/cart.webp" type="image/webp"><img src="<?php echo Yii::getAlias('@img'); ?>/popularItem/cart.png" alt="" /></picture>
                            </a>
                        </div>
                    </div>
                    <div class="stocks__content-slider-track-item">
                        <div class="stocks__content-slider-track-item-product">
                            <div class="rebate">
                                <div class="rebate__content">
                                    <picture><source srcset="<?php echo Yii::getAlias('@img'); ?>/stocks/rebate.webp" type="image/webp"><img class="img__rebate" src="<?php echo Yii::getAlias('@img'); ?>/stocks/rebate.png" alt="" /></picture>
                                    <p>-15%</p>
                                </div>
                            </div>
                            <picture><source srcset="<?php echo Yii::getAlias('@img'); ?>/popularItem/1.webp" type="image/webp"><img src="<?php echo Yii::getAlias('@img'); ?>/popularItem/1.png" alt="" /></picture>
                            <h3>15 штук/упаковка</h3>
                            <p class="discond">800<span> руб.</span></p>
                            <p>500<span> руб.</span></p>
                            <a href="#">
                                <p>В корзину</p>
                                <picture><source srcset="<?php echo Yii::getAlias('@img'); ?>/popularItem/cart.webp" type="image/webp"><img src="<?php echo Yii::getAlias('@img'); ?>/popularItem/cart.png" alt="" /></picture>
                            </a>
                        </div>
                    </div>
                    <div class="stocks__content-slider-track-item">
                        <div class="stocks__content-slider-track-item-product">
                            <div class="rebate">
                                <div class="rebate__content">
                                    <picture><source srcset="<?php echo Yii::getAlias('@img'); ?>/stocks/rebate.webp" type="image/webp"><img class="img__rebate" src="<?php echo Yii::getAlias('@img'); ?>/stocks/rebate.png" alt="" /></picture>
                                    <p>-15%</p>
                                </div>
                            </div>
                            <picture><source srcset="<?php echo Yii::getAlias('@img'); ?>/popularItem/1.webp" type="image/webp"><img src="<?php echo Yii::getAlias('@img'); ?>/popularItem/1.png" alt="" /></picture>
                            <h3>15 штук/упаковка</h3>
                            <p class="discond">800<span> руб.</span></p>
                            <p>500<span> руб.</span></p>
                            <a href="#">
                                <p>В корзину</p>
                                <picture><source srcset="<?php echo Yii::getAlias('@img'); ?>/popularItem/cart.webp" type="image/webp"><img src="<?php echo Yii::getAlias('@img'); ?>/popularItem/cart.png" alt="" /></picture>
                            </a>
                        </div>
                    </div>
                    <div class="stocks__content-slider-track-item">
                        <div class="stocks__content-slider-track-item-product">
                            <div class="rebate">
                                <div class="rebate__content">
                                    <picture><source srcset="<?php echo Yii::getAlias('@img'); ?>/stocks/rebate.webp" type="image/webp"><img class="img__rebate" src="<?php echo Yii::getAlias('@img'); ?>/stocks/rebate.png" alt="" /></picture>
                                    <p>-15%</p>
                                </div>
                            </div>
                            <picture><source srcset="<?php echo Yii::getAlias('@img'); ?>/popularItem/1.webp" type="image/webp"><img src="<?php echo Yii::getAlias('@img'); ?>/popularItem/1.png" alt="" /></picture>
                            <h3>15 штук/упаковка</h3>
                            <p class="discond">800<span> руб.</span></p>
                            <p>500<span> руб.</span></p>
                            <a href="#">
                                <p>В корзину</p>
                                <picture><source srcset="<?php echo Yii::getAlias('@img'); ?>/popularItem/cart.webp" type="image/webp"><img src="<?php echo Yii::getAlias('@img'); ?>/popularItem/cart.png" alt="" /></picture>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="aboutCompany">
        <div class="aboutCompany__content">
            <h2>О компании</h2>
            <div class="aboutCompany__content-item">
                <div class="aboutCompany__content-item-left">
                    <picture><source srcset="<?php echo Yii::getAlias('@img'); ?>/about.webp" type="image/webp"><img src="<?php echo Yii::getAlias('@img'); ?>/about.png" alt="" /></picture>
                </div>
                <div class="aboutCompany__content-item-right">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat nobis sunt facere eaque,
                        asperiores neque ipsum, dolorum consequatur eligendi blanditiis alias, debitis reiciendis
                        aspernatur commodi tempore in error ad eius magnam illo nulla temporibus? Praesentium
                        commodi quisquam, optio beatae distinctio reiciendis nemo illum laborum ullam vel fuga,
                        eum aperiam quas pariatur sunt nulla dicta cum, ad explicabo tempore minima nihil dolorum
                        ipsa sit. Quis labore facere, voluptatibus eum distinctio rem dolorem blanditiis dolores
                        esse expedita voluptas nisi ducimus nulla soluta.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="why">
        <div class="why__content">
            <h2>Почему выбирают нас?</h2>
            <div class="why__content-item">
                <div class="why__content-item-flex">
                    <div class="why__content-item-flex-box">
                        <div class="why__content-item-flex-box-icon">
                            <h3>Оперативность</h3>
                            <picture><source srcset="<?php echo Yii::getAlias('@img'); ?>/why/time.webp" type="image/webp"><img src="<?php echo Yii::getAlias('@img'); ?>/why/time.png" alt="" /></picture>
                        </div>
                        <p>Быстрая доставка по всей России</p>
                    </div>
                    <div class="why__content-item-flex-box">
                        <div class="why__content-item-flex-box-icon">
                            <h3>Доступность</h3>
                            <picture><source srcset="<?php echo Yii::getAlias('@img'); ?>/why/wallet.webp" type="image/webp"><img src="<?php echo Yii::getAlias('@img'); ?>/why/wallet.png" alt="" /></picture>
                        </div>
                        <p>Прямые поставки из Китая, делают наш товар дешевле, чем у других поставщиков</p>
                    </div>
                    <div class="why__content-item-flex-box">
                        <div class="why__content-item-flex-box-icon">
                            <h3>Оперативность</h3>
                            <picture><source srcset="<?php echo Yii::getAlias('@img'); ?>/why/garant.webp" type="image/webp"><img src="<?php echo Yii::getAlias('@img'); ?>/why/garant.png" alt="" /></picture>
                        </div>
                        <p>
                            При необходимости можем отправить образцы почтой,чтобы вы убедились в качестве нашего
                            товара
                        </p>
                    </div>
                </div>
                <div class="why__content-item-flex why__image">
                    <picture><source srcset="<?php echo Yii::getAlias('@img'); ?>/about.webp" type="image/webp"><img src="<?php echo Yii::getAlias('@img'); ?>/about.png" alt="" /></picture>
                </div>
                <div class="why__content-item-flex why__flex__second">
                    <div class="why__content-item-flex-box">
                        <div class="why__content-item-flex-box-icon">
                            <h3>Профессионализм</h3>
                            <picture><source srcset="<?php echo Yii::getAlias('@img'); ?>/why/job.webp" type="image/webp"><img src="<?php echo Yii::getAlias('@img'); ?>/why/job.png" alt="" /></picture>
                        </div>
                        <p>Все наши сотрудники - специалисты своего дела</p>
                    </div>
                    <div class="why__content-item-flex-box">
                        <div class="why__content-item-flex-box-icon">
                            <h3>Качество</h3>
                            <picture><source srcset="<?php echo Yii::getAlias('@img'); ?>/why/quality.webp" type="image/webp"><img src="<?php echo Yii::getAlias('@img'); ?>/why/quality.png" alt="" /></picture>
                        </div>
                        <p>
                            Мы ручаемся за качество, так как сами используем нашу фурнитуру в нашей мебельной
                            фабрике
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>
