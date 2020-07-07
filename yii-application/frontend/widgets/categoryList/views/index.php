<?php
use yii\helpers\Url;
?>

<h6>Категории</h6>
<?php foreach ($categoryList as $category): ?>
    <a href="<?php echo Url::to(['catalog/category', 'categoryId' => $category->id]); ?>"><?php echo $category->name; ?></a>
<?php endforeach; ?>