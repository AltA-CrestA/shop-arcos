<?php
/* @var $this yii\web\View */

use frontend\widgets\categoryList\CategoryList;
use yii\helpers\Url;
use yii\web\JqueryAsset;

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
                    <?= CategoryList::widget(); ?>
                </div>
            </div>
        </div>
    </section>
    <section class="catalogItem">
        <div class="catalogItem__content">
            <div class="catalogItem__content-title">
                <h5><?= $categoryName->name; ?> <span><?= $counter; ?></span></h5>
                <div class="catalogItem__content-title-btn">
                    <a href="#" id="buttonFilterMini">
                        Кнопка
                    </a>
                </div>
            </div>
            <div class="catalogItem__content-item">
                <div class="catalogItem__content-item-filter">
                    <?= CategoryList::widget(); ?>
                </div>
                <div class="catalogItem__content-item-grid">
                    <?php foreach ($productList as $product): ?>
                        <div class="catalogItem__content-item-grid-product">
                            <a href="<?= Url::to(['catalog/product', 'id' => $product->id]); ?>"><img src="<?php echo Yii::getAlias('@img'); ?>/catalog/<?php echo $product->img; ?>" alt="" /></a>
                            <a href="<?= Url::to(['catalog/product', 'id' => $product->id]); ?>"><h4><?php echo $product->name; ?></h4></a>
                            <h3><?php echo $product->package; ?></h3>
                            <p><?php echo $product->price; ?><span> руб.</span></p>
                            <a class="add-to-cart" data-id="<?= $product->id; ?>" href="<?= Url::to(['cart/add', 'id' => $product->id]); ?>">
                                <p>В корзину</p>
                                <img src="<?php echo Yii::getAlias('@img'); ?>/popularItem/cart.png" alt="" />
                            </a>
                        </div>
                    <?php endforeach; ?>
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
</main>

<?php $this->registerJsFile('@web/js/addToCart.js', [
    'depends' => JqueryAsset::className()
]);