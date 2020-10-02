<?php
use yii\helpers\Url;
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="<?= Url::to('/')?>">Блог</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <?= \app\components\TopMenuWidget::widget() ?>

            <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
                <?php if (Yii::$app->user->isGuest): ?>
                    <li class="nav-item"><a href="<?= Url::to('/login') ?>" class="nav-link">Вход</a></li>
                    <li class="nav-item"><a href="<?= Url::to('/signup') ?>" class="nav-link">Регистрация</a></li>
                <?php else: ?>
                    <span class="navbar-text">
                        <?= \Yii::$app->user->identity['username'] ?>
                    </span>
                    <li class="nav-item"><a href="<?= Url::to('/logout') ?>" class="nav-link">Выход</a></li>
                <?php endif ?>
            </ul>
        </div>
    </div>
</nav>
