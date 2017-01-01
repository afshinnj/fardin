<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use app\modules\admin\models\Subject;
AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">

    <div class="container">
      <div class="row ">
        <div class="col-md-3 col-md-offset-2" style="text-align: center">
          <div class="panel panel-default">
            <div class="panel-body">
                <?= Html::img('images/fardin.jpg', ['class'=> 'img-circle img-responsive'])?>
                <hr>
                <?= Html::a('Home','home')?> . <?= Html::a('About','about')?> . <?= Html::a('Contact','contact')?>
            </div>
          </div>
        </div>
      </div>
      <div class="row ">
        <div class="col-md-8 col-md-offset-2" style="text-align: center">
          <div class="panel panel-default">
            <div class="panel-body">
              <ul class="subject">
              <?php
                $sub = Subject::find()->all();
                foreach ($sub as $key):
              ?>
              <li><?= $key['text'];?></li>

              <?php endforeach ?>
            </ul>

            </div>
          </div>
        </div>
      </div>
        <?= $content ?>
    </div>
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
