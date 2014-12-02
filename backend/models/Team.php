<?php

namespace backend\models;

use Yii;
use yii\db\ActiveRecord;
use yii\behaviors\TimestampBehavior;

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
class Team extends ActiveRecord
{
    const STATUS_ENABLE      = 1;
    const STATUS_DISABLE     = 2;

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
            [['seo_desc'], 'string'],
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
            'name' => '球队名称',
            'image' => '缩略图',
            'seo_title' => 'Seo Title',
            'seo_keyword' => 'Seo Keyword',
            'seo_desc' => 'Seo Desc',
            'created_at' => '创建日期',
            'updated_at' => '更新日期',
        ];
    }

    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
        ];
    }


    // status array
    public function getStatusList()
    {
        return [
            self::STATUS_ENABLE    => '启用',
            self::STATUS_DISABLE   => '禁用'
        ];
    }
}
