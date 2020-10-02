<?php
use yii\helpers\Url;
?>

<ul class="navbar-nav mr-auto mb-2 mb-lg-0">
    <li class="nav-item">
        <a class="nav-link" href="<?= Url::to('/')?>">Главная</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?= Url::to('/')?>">Услуги</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?= Url::to('/')?>">О нас</a>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
            Категории
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <?php foreach($cats as $cat): ?>
                <li>
                    <a class="dropdown-item" href="<?= Url::to(['post/category', 'alias' => $cat['alias']])?>">
                        <?= $cat['title'] ?>
                    </a>
                </li>
            <?php endforeach ?>
        </ul>
    </li>                                    
</ul>
