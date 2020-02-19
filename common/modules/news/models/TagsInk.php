<?php

namespace common\modules\news\models;

use Yii;

/**
 * This is the model class for table "tags_ink".
 *
 * @property int $ig
 * @property int $tags_id
 * @property int $item_id
 * @property string $model
 */
class TagsInk extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tags_ink';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tags_id', 'item_id', 'model'], 'required'],
            [['tags_id', 'item_id'], 'integer'],
            [['model'], 'string', 'max' => 250],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ig' => 'Ig',
            'tags_id' => 'Tags ID',
            'item_id' => 'Item ID',
            'model' => 'Model',
        ];
    }
}
