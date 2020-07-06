<?php

?>
<section class="filter">
    <div class="filter__content">
        <div class="filter__content__title">
            <p>Фильтры и сортировка</p>
            <p>&times;</p>
        </div>
        <div class="filter__content-item">
            <div class="filter__content-item-link">
                <h6>Категории</h6>
                <?php foreach ($categoryList as $category): ?>
                    <a href="#"><?php echo $category->name; ?></a>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>