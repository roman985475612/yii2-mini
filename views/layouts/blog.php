<?php 

use app\assets\AppAsset;
use app\models\Category;
use yii\helpers\Html;
use yii\helpers\Url;

$categories = Category::find()->all();

if (class_exists('yii\debug\Module')) {
    $this->off(\yii\web\View::EVENT_END_BODY, [\yii\debug\Module::getInstance(), 'renderToolbar']);
}

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!doctype html>
<html lang="<?= Yii::$app->language ?>">
  <head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="<?= Html::encode($this->context->keywords) ?>">
    <meta name="description" content="<?= Html::encode($this->context->description) ?>">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->context->title) ?></title>
    <?php $this->head() ?>
  </head>
  <body>
    <?php $this->beginBody() ?>
    <div class="container">
        <header>
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
                            <?php foreach($categories as $category): ?>
                                <li class="nav-item px-5">
                                    <a class="nav-link" href="<?= Url::to(['post/category', 'alias' => $category->alias])?>"><?= strtoupper($category->title) ?></a>
                                </li>
                            <?php endforeach ?>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>

        <main>
            <?= $content ?>
        </main>

        <footer class="bg-light mt-3 p-3 text-center">
            <div class="container">
                <p class="lead">Copyright (c) 2020</p>
            </div>
        </footer>
    </div>
    <?php $this->endBody() ?>
  </body>
</html>
<?php $this->endPage() ?>