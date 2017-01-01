<?php
namespace  app\modules\rbac\components;


/**
 *
 */
class User extends \yii\web\User
{

  /**
   * @inheritdoc
   */
  public $identityClass = 'app\modules\user\models\User';

  /**
   * @inheritdoc
   */
  public $enableAutoLogin = false;

  /**
   * @inheritdoc
   */
  //public $loginUrl = ["/login"];

  /**
   *
   * @var type
   *
   */
  public $authTimeout = 31557600;


  /**
   * @inheritdoc
   */
  public function afterLogin($identity, $cookieBased, $duration) {
      /** @var \app\modules\user\models\LoginForm $identity */
      //$identity->updateLoginMeta();
      parent::afterLogin($identity, $cookieBased, $duration);
  }
}
