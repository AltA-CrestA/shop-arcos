<?php
use yii\helpers\Url;

foreach ($categoryList as $category) {
    (Url::current() == Url::to(['catalog/category', 'categoryId' => $category->id])) ? $this->title = "$category->name — Shop-Arcos" : false;
}

?>



<?php foreach ($categoryList as $category): ?>
    <a href="<?php echo Url::to(['catalog/category', 'categoryId' => $category->id]); ?>" class="<?php echo (Url::current() == Url::to(['catalog/category', 'categoryId' => $category->id])) ? 'active' : '' ;?>"><?php echo $category->name; ?></a>
<?php endforeach; ?>