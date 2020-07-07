<?php

?>

<h6>Категории</h6>
<?php foreach ($categoryList as $category): ?>
    <a href="#"><?php echo $category->name; ?></a>
<?php endforeach; ?>