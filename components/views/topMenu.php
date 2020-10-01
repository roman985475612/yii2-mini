<?php
use yii\helpers\Url;
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav m-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link px-5" href="<?= Url::to('/')?>">HOME</a>
                </li>
                <?php foreach($cats as $cat): ?>
                    <li class="nav-item px-5">
                        <a class="nav-link" href="<?= Url::to(['post/category', 'alias' => $cat['alias']])?>"><?= strtoupper($cat['title']) ?></a>
                    </li>
                <?php endforeach ?>
            </ul>
        </div>
    </div>
</nav>
