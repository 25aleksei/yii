<?php

namespace common\modules\news\models;

use Yii;

/**
 * This is the model class for table "tegs".
 *
 * @property int $id
 * @property string $title
 */
class Tegs extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tegs';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title'], 'uniqValidation'],
            [['title'], 'trim'],
            [['title'], 'required'],
            [['title'], 'string', 'max' => 100],
        ];
    }

public function uniqValidation($attribute,$message) {
$model = self::find()->where(['title' =>$this ->title])->count();
if($model == '=') {
     $this->addError($attribute, 'Ты повторился братан'); 
 }}

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
        ];
    }
}
