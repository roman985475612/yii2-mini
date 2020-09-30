<?php
use yii\helpers\Html;
use yii\helpers\Url;
?>

<div class="row">
    <article class="col-md-8 offset-md-2">
        <?= Html::img("@web/$post->img", ['class' => 'img-fluid', 'alt' => $post->title]) ?>
        <h1><?= $post->title ?></h1>
        <p class="lead">
            Category: 
            <a href="<?= Url::to(['post/category', 'alias' => $post->category->alias]) ?>" class="btn btn-link">
                <?= $post->category->title ?>
            </a>
        </p>
        <p><?= $post->content ?></p>
        <p>Created at <?= Yii::$app->formatter->asDate($post->created_at, 'php:d.m.Y') ?></p>
    </article>
</div>