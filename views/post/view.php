<?php
use yii\helpers\Html;
?>

<div class="row">
    <article class="col-md-8 offset-md-2">
        <?= Html::img("@web/$post->img", ['class' => 'img-fluid', 'alt' => $post->title]) ?>
        <h1><?= $post->title ?></h1>
        <p class="lead">Category: <?= $post->category->title ?></p>
        <p><?= $post->content ?></p>
        <p>Created at <?= Yii::$app->formatter->asDate($post->created_at, 'php:d.m.Y') ?></p>
    </article>
</div>