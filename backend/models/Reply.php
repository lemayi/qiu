<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "reply".
 *
 * @property integer $id
 * @property integer $link_id
 * @property integer $level
 * @property integer $author_id
 * @property integer $replyer_id
 * @property integer $status
 * @property string $created_at
 * @property string $updated_at
 */
class Reply extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'reply';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['link_id', 'level', 'author_id', 'replyer_id', 'status', 'created_at', 'updated_at'], 'integer'],
            [['created_at', 'updated_at'], 'required']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'link_id' => 'Link ID',
            'level' => 'Level',
            'author_id' => 'Author ID',
            'replyer_id' => 'Replyer ID',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
