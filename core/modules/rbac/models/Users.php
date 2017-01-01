<?php

namespace app\modules\rbac\models;

use Yii;

/**
 * This is the model class for table "{{%user}}".
 *
 * @property integer $id
 * @property string $role_id
 * @property integer $status
 * @property string $email
 * @property string $username
 * @property string $password
 * @property string $password_salt
 * @property string $auth_key
 * @property string $login_ip
 * @property string $login_time
 * @property string $create_time
 * @property string $update_time
 * @property string $ban_time
 * @property string $ban_reason
 * @property string $login_code
 * @property string $folder
 */
class Users extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%user}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username', 'password'], 'required'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'role_id' => Yii::t('app', 'Role ID'),
            'status' => Yii::t('app', 'Status'),
            'email' => Yii::t('app', 'Email'),
            'username' => Yii::t('app', 'Username'),
            'password' => Yii::t('app', 'Password'),
            'password_salt' => Yii::t('app', 'Password Salt'),
            'auth_key' => Yii::t('app', 'Auth Key'),
            'login_ip' => Yii::t('app', 'Login Ip'),
            'login_time' => Yii::t('app', 'Login Time'),
            'create_time' => Yii::t('app', 'Create Time'),
            'update_time' => Yii::t('app', 'Update Time'),
            'ban_time' => Yii::t('app', 'Ban Time'),
            'ban_reason' => Yii::t('app', 'Ban Reason'),
            'login_code' => Yii::t('app', 'Login Code'),
            'folder' => Yii::t('app', 'Folder'),
        ];
    }

    public function beforeSave($insert) {
        $this->password = Yii::$app->security->generatePasswordHash($this->password);
        return parent::beforeSave($insert);
    }
}
