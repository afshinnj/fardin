<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\bootstrap\ActiveForm;
use vova07\imperavi\Widget;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Abouts');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="about-index">

      <h1><?= Html::encode($this->title) ?></h1>

      <?php $form = ActiveForm::begin(); ?>
<?php //$form->field($model, 'text')->widget(\yii\redactor\widgets\Redactor::className()) ?>
<?php
echo $form->field($model, 'text')->widget(Widget::className(), [
    //'selector' => '#my-textarea-id',
    'settings' => [
        'lang' => 'en',
        'minHeight' => 200,
        'imageUpload' => Url::to(['/admin/about/image-upload']),
        'imageManagerJson' => Url::to(['/admin/about/images-get']),
        'plugins' => [
            //'imagemanager',
            //'clips',
            'fullscreen',
            'fontfamily',
            'textdirection',
            'filemanager',
            'definedlinks',
            'fontcolor',
            'fontsize',
            'table',
        ]
    ]
]);
?>
      <div class="form-group">
          <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
      </div>

      <?php ActiveForm::end(); ?>
</div>
