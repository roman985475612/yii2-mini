<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\LinkPager;

?>

<div class="row">
  <div class="col-12">
    <div class="bg-light mt-3 p-5 text-center">
      <h1 class="display-3">Hello, Yii2!</h1>
      <p class="lead">This is app on framework Yii2</p>
    </div>
  </div>
</div>

<div class="row row-cols-1 row-cols-md-3 g-4 mt-3">
  <?php foreach($posts as $post): ?>
    <div class="col">
      <div class="card h-100">
        <?= Html::img("@web/$post->img", ['class' => 'card-img-top', 'alt' => $post->title]) ?>
        <div class="card-header">Category: <?= $post->category->title ?></div>
        <div class="card-body">
          <h3 class="card-title"><?= $post->title ?></h3>
          <p class="card-text"><?= $post->exerpt ?></p>
          <a href="<?= Url::to(['post/view', 'id' => $post->id]) ?>" class="btn btn-outline-primary">Read more...</a>
        </div>
        <div class="card-footer">
          <small class="text-muted">Created at <?= Yii::$app->formatter->asDate($post->created_at, 'php:d.m.Y') ?></small>
        </div>
      </div>
    </div>
  <?php endforeach; ?>
</div>

<nav aria-label="Page navigation example" class="my-5 d-flex justify-content-center">
  <?= LinkPager::widget(['pagination' => $pages]); ?>
</nav>
