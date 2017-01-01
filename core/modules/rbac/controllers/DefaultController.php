<?php

namespace app\modules\rbac\controllers;
use Yii;
use yii\web\Controller;
use app\modules\rbac\models\LoginForm;
use yii\filters\AccessControl;
/**
 * Default controller for the `rbac` module
 */
class DefaultController extends Controller
{
  /**
   * @inheritdoc
   */
  public function behaviors()
  {
      return [
        'access' => [
            'class' => AccessControl::className(),
            'only' => ['index'],
            'rules' => [
                [
                    'actions' => ['index'],
                    'allow' => true,
                    'roles' => ['@'],
                ],
            ],
        ],
      ];
  }
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        return $this->renderPartial('index');
    }

    public function actionLogin()
    {
      if (!Yii::$app->user->isGuest) {
          return $this->goHome();
      }

      $model = new LoginForm();
      if ($model->load(Yii::$app->request->post()) && $model->login()) {
          return $this->redirect(['/admin']);
      }
      return $this->renderPartial('login', [
          'model' => $model,
      ]);
    }
}
