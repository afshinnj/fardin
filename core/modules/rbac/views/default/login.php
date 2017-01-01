<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use app\assets\AppAsset;
use yii\bootstrap\ActiveForm;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode('Login') ?></title>
    <?php $this->head() ?>
</head>
<body id="LoginPage">
<?php $this->beginBody() ?>

<div class="wrap">
    <div class="container">

<?php //Yii::$app->security->generatePasswordHash('123456');?>
      <?php $form = ActiveForm::begin([
          'id' => 'login-form',
          'options' => ['class' => 'form-signin'],

      ]); ?>

          <?= $form->field($model, 'username')->textInput(['placeholder' => 'Username'])->label(false) ?>

          <?= $form->field($model, 'password')->passwordInput(['placeholder'=>'Password'])->label(false) ?>

          <div class="form-group">

                  <?= Html::submitButton('Login', ['class' => 'btn btn-lg btn-primary btn-block', 'name' => 'login-button']) ?>
          </div>

      <?php ActiveForm::end(); ?>


    </div>
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
