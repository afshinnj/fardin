<?php
use yii\helpers\Html;
use app\modules\admin\models\Subject;
/* @var $this yii\web\View */

$this->title = 'IFardin';
?>
<div class="site-index">
    <div class="body-content">

      <?php foreach ($Gallery as $key):?>
        <div class="row ">
          <div class="col-md-8 col-md-offset-2 ">

            <div class="panel panel-default">
              <div class="panel-body">
                <?php
                 $subject = Subject::findOne(['id' => $key['subject']]);
                 echo '<p class="text-info">'.$subject['text']."</p>";
                 ?>
                <?= Html::img($key['photo'],['class'=> 'img-rounded img-responsive'])?>
              </div>
              <div class="panel-heading">

                <?= $key['text']?>
                <hr>
                <?php
                    $tag = explode(',',$key['tag']);
                    foreach ($tag as $keys) {
                      echo '<lable class="label label-info">'.Html::a($keys,$keys).'</lable> ';
                    }
                ?>
              </div>
            </div>

          </div>
        </div>

      <?php endforeach?>

    </div>
</div>
