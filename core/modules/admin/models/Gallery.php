<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "{{%gallery}}".
 *
 * @property integer $id
 * @property integer $subject
 * @property string $text
 * @property string $photo
 * @property string $video
 * @property string $tag
 */
class Gallery extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%gallery}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tag','text','photo','subject'], 'required'],
            [['text', 'photo', 'video', 'tag'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'text' => Yii::t('app', 'Subject'),
            'text' => Yii::t('app', 'Text'),
            'photo' => Yii::t('app', 'Photo'),
            'video' => Yii::t('app', 'Video'),
            'tag' => Yii::t('app', 'Tag'),
        ];
    }
}
