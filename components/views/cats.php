<?php
use yii\helpers\Url;
?>

<?php if (!empty($cats)): ?>
    <nav id="navCats" class="list-group">
        <?php foreach($cats as $cat): ?>
            <a class="list-group-item list-group-item-action" href="<?= Url::to(['post/category', 'alias' => $cat['alias']])?>">
                <?= $cat['title'] ?>
            </a>
        <?php endforeach ?>
    </nav>
<?php endif ?>