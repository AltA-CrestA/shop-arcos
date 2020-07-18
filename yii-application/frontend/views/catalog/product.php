<?php

use yii\helpers\Url;
use yii\web\JqueryAsset; ?>

<section class="product">
    <div class="product__content">
        <div class="product__content-item">
            <div class="product__content-item-image">
                <img src="<?= Yii::getAlias('@img'); ?>/catalog/<?= $product->img; ?>" alt="" />
            </div>
            <div class="product__content-item-info">
                <h2><?= $product->name; ?></h2>
                <a class="backMenu__link" href="<?= Url::to(['catalog/category', 'categoryId' => $product->category_id]); ?>">Вернуться в каталог</a>
                <p class="price"><?= $product->price; ?><span>₽</span></p>
                <div class="product__content-item-info-btn">
                    <a class="pay__link add-to-cart" data-id="<?= $product->id; ?>" href="<?= Url::to(['cart/add', 'id' => $product->id]); ?>">В корзину</a>
                </div>

                <h3>Информация о товаре</h3>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad dolorem ea exercitationem harum illo incidunt laudantium nisi placeat reiciendis soluta? Blanditiis ducimus facere fuga ipsum libero molestiae molestias provident rem similique temporibus? Aperiam eos exercitationem fugit illo illum laboriosam, laborum maiores maxime nam porro qui quo repudiandae suscipit temporibus voluptatem.
                </p>
                <br />
            </div>
        </div>
    </div>
</section>
<section class="popularItem">
	<div id="popularItem" class="popularItem__content">
					<h2>Какие то там товары</h2>
					<div class="popularItem__content-slider">
						<div class="popularItem__content-slider-buttons">
							<button class="popularItem__content-slider-buttons-prev">
								<img src="/img/popularItem/btnPrev.svg" alt="" />
							</button>
							<button class="popularItem__content-slider-buttons-next">
								<img src="/img/popularItem/btnPrev.svg" alt="" />
							</button>
						</div>
						<div class="popularItem__content-slider-track">
							<div class="popularItem__content-slider-track-item">
								<div class="popularItem__content-slider-track-item-product">
									<img src="/img/popularItem/1.png" alt="" />
									<h4>Наименование товара</h4>
									<h3>15 штук/упаковка</h3>
									<p>500<span> руб.</span></p>
									<a href="#">
										<p>В корзину</p>
										<img src="/img/popularItem/cart.png" alt="" />
									</a>
								</div>
							</div>
							<div class="popularItem__content-slider-track-item">
								<div class="popularItem__content-slider-track-item-product">
									<img src="/img/popularItem/1.png" alt="" />
									<h4>Наименование товара</h4>
									<h3>15 штук/упаковка</h3>
									<p>500<span> руб.</span></p>
									<a href="#">
										<p>В корзину</p>
										<img src="/img/popularItem/cart.png" alt="" />
									</a>
								</div>
							</div>
							<div class="popularItem__content-slider-track-item">
								<div class="popularItem__content-slider-track-item-product">
									<img src="/img/popularItem/1.png" alt="" />
									<h4>Наименование товара</h4>
									<h3>15 штук/упаковка</h3>
									<p>500<span> руб.</span></p>
									<a href="#">
										<p>В корзину</p>
										<img src="/img/popularItem/cart.png" alt="" />
									</a>
								</div>
							</div>
							<div class="popularItem__content-slider-track-item">
								<div class="popularItem__content-slider-track-item-product">
									<img src="/img/popularItem/1.png" alt="" />
									<h4>Наименование товара</h4>
									<h3>15 штук/упаковка</h3>
									<p>500<span> руб.</span></p>
									<a href="#">
										<p>В корзину</p>
										<img src="/img/popularItem/cart.png" alt="" />
									</a>
								</div>
							</div>
							<div class="popularItem__content-slider-track-item">
								<div class="popularItem__content-slider-track-item-product">
									<img src="/img/popularItem/1.png" alt="" />
									<h4>Наименование товара</h4>
									<h3>15 штук/упаковка</h3>

									<p>500<span> руб.</span></p>
									<a href="#">
										<p>В корзину</p>
										<img src="/img/popularItem/cart.png" alt="" />
									</a>
								</div>
							</div>
							<div class="popularItem__content-slider-track-item">
								<div class="popularItem__content-slider-track-item-product">
									<img src="/img/popularItem/1.png" alt="" />
									<h4>Наименование товара</h4>
									<h3>15 штук/упаковка</h3>
									<p>500<span> руб.</span></p>
									<a href="#">
										<p>В корзину</p>
										<img src="/img/popularItem/cart.png" alt="" />
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
</section>
<section class="stocks">
				<div id="stocks" class="stocks__content">
					<h2>Еще какие то там</h2>
					<div class="stocks__content-slider">
						<div class="stocks__content-slider-buttons">
							<button class="stocks__content-slider-buttons-prev">
								<img src="/img/popularItem/btnPrev.svg" alt="" />
							</button>
							<button class="stocks__content-slider-buttons-next">
								<img src="/img/popularItem/btnPrev.svg" alt="" />
							</button>
						</div>
						<div class="stocks__content-slider-track">
							<div class="stocks__content-slider-track-item">
								<div class="stocks__content-slider-track-item-product">
									<div class="rebate">
										<div class="rebate__content">
											<img class="img__rebate" src="/img/stocks/rebate.png" alt="" />
											<p>-15%</p>
										</div>
									</div>
									<img src="/img/popularItem/1.png" alt="" />
									<h4>Наименование товара</h4>
									<h3>15 штук/упаковка</h3>
									<p>500<span> руб.</span></p>
									<a href="#">
										<p>В корзину</p>
										<img src="/img/popularItem/cart.png" alt="" />
									</a>
								</div>
							</div>
							<div class="stocks__content-slider-track-item">
								<div class="stocks__content-slider-track-item-product">
									<div class="rebate">
										<div class="rebate__content">
											<img class="img__rebate" src="/img/stocks/rebate.png" alt="" />
											<p>-15%</p>
										</div>
									</div>
									<img src="/img/popularItem/1.png" alt="" />
									<h4>Наименование товара</h4>
									<h3>15 штук/упаковка</h3>
									<p>500<span> руб.</span></p>
									<a href="#">
										<p>В корзину</p>
										<img src="/img/popularItem/cart.png" alt="" />
									</a>
								</div>
							</div>
							<div class="stocks__content-slider-track-item">
								<div class="stocks__content-slider-track-item-product">
									<div class="rebate">
										<div class="rebate__content">
											<img class="img__rebate" src="/img/stocks/rebate.png" alt="" />
											<p>-15%</p>
										</div>
									</div>
									<img src="/img/popularItem/1.png" alt="" />
									<h4>Наименование товара</h4>
									<h3>15 штук/упаковка</h3>
									<p>500<span> руб.</span></p>
									<a href="#">
										<p>В корзину</p>
										<img src="/img/popularItem/cart.png" alt="" />
									</a>
								</div>
							</div>
							<div class="stocks__content-slider-track-item">
								<div class="stocks__content-slider-track-item-product">
									<div class="rebate">
										<div class="rebate__content">
											<img class="img__rebate" src="/img/stocks/rebate.png" alt="" />
											<p>-15%</p>
										</div>
									</div>
									<img src="/img/popularItem/1.png" alt="" />
									<h4>Наименование товара</h4>
									<h3>15 штук/упаковка</h3>
									<p>500<span> руб.</span></p>
									<a href="#">
										<p>В корзину</p>
										<img src="/img/popularItem/cart.png" alt="" />
									</a>
								</div>
							</div>
							<div class="stocks__content-slider-track-item">
								<div class="stocks__content-slider-track-item-product">
									<div class="rebate">
										<div class="rebate__content">
											<img class="img__rebate" src="/img/stocks/rebate.png" alt="" />
											<p>-15%</p>
										</div>
									</div>
									<img src="/img/popularItem/1.png" alt="" />
									<h4>Наименование товара</h4>
									<h3>15 штук/упаковка</h3>
									<p>500<span> руб.</span></p>
									<a href="#">
										<p>В корзину</p>
										<img src="/img/popularItem/cart.png" alt="" />
									</a>
								</div>
							</div>
							<div class="stocks__content-slider-track-item">
								<div class="stocks__content-slider-track-item-product">
									<div class="rebate">
										<div class="rebate__content">
											<img class="img__rebate" src="/img/stocks/rebate.png" alt="" />
											<p>-15%</p>
										</div>
									</div>
									<img src="/img/popularItem/1.png" alt="" />
									<h4>Наименование товара</h4>
									<h3>15 штук/упаковка</h3>
									<p>500<span> руб.</span></p>
									<a href="#">
										<p>В корзину</p>
										<img src="/img/popularItem/cart.png" alt="" />
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
</section>

<?php $this->registerJsFile('@web/js/addToCart.js', [
    'depends' => JqueryAsset::className()
]);
