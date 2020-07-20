<?php
use yii\helpers\Url;
?>

<?php foreach ($categoryList as $category): ?>
    <a href="<?php echo Url::to(['catalog/category', 'categoryId' => $category->id]); ?>" class="<?php echo (Url::current() == Url::to(['catalog/category', 'categoryId' => $category->id])) ? 'active' : '' ;?>"><?php echo $category->name; ?></a>
<?php endforeach; ?>