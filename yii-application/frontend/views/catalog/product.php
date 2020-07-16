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

<?php $this->registerJsFile('@web/js/addToCart.js', [
    'depends' => JqueryAsset::className()
]);
