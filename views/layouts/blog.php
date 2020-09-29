<?php 

use app\assets\AppAsset;
use app\models\Category;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;

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
        <header><?= $this->render('_navbar') ?></header>

        <main>
            <div class="row">
                <div class="col-md-8"><?= $content ?></div>
                <div class="col-md-4"><?= $this->render('_sidebar') ?></div>
            </div>
        </main>

        <footer class="bg-light mt-3 p-3 text-center"><?= $this->render('_footer') ?></footer>
    </div>
    <?php $this->endBody() ?>
  </body>
</html>
<?php $this->endPage() ?>