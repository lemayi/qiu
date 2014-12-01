<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "team".
 *
 * @property integer $id
 * @property string $name
 * @property string $image
 * @property string $seo_title
 * @property string $seo_keyword
 * @property string $seo_desc
 * @property string $created_at
 * @property string $updated_at
 */
class Team extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'team';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'image', 'seo_title', 'seo_keyword', 'seo_desc', 'created_at', 'updated_at'], 'required'],
            [['seo_desc'], 'string'],
            [['created_at', 'updated_at'], 'integer'],
            [['name'], 'string', 'max' => 100],
            [['image', 'seo_title', 'seo_keyword'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'image' => 'Image',
            'seo_title' => 'Seo Title',
            'seo_keyword' => 'Seo Keyword',
            'seo_desc' => 'Seo Desc',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
