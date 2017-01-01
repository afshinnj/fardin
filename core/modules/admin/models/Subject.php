<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "{{%subject}}".
 *
 * @property integer $id
 * @property string $text
 */
class Subject extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%subject}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['text'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'text' => Yii::t('app', 'Text'),
        ];
    }

    /**
 *
 * @staticvar type $dropdown
 * @return type
 *
 */
public static function Dropdown() {

    static $dropdown;
    if ($dropdown === null) {
        // get all records from database and generate
        $models = static::find()->all();
        //$dropdown[] = '';
        foreach ($models as $model) {
            $dropdown[$model->id] = $model->text;
        }
    }

    return $dropdown;
}
}
