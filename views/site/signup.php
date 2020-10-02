<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

?>

<?php $form = ActiveForm::begin() ?>
    <h1>Регистрация</h1>
    <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>
    <?= $form->field($model, 'password')->passwordInput() ?>
    <?= Html::submitButton('Регистрация', ['class' => 'btn btn-primary']) ?>
<?php ActiveForm::end() ?>