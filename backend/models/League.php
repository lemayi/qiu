<?php

namespace backend\models;

use Yii;
use yii\db\ActiveRecord;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "league".
 *
 * @property integer $id
 * @property string $name
 * @property string $image
 * @property integer $status
 * @property string $seo_title
 * @property string $seo_keyword
 * @property string $seo_desc
 * @property string $created_at
 * @property string $updated_at
 */
class League extends ActiveRecord
{
    const STATUS_ENABLE      = 1;
    const STATUS_DISABLE     = 2;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'league';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['name', 'filter', 'filter' => 'trim'],
            ['name', 'required'],
            ['name', 'unique'],
            ['name', 'string', 'length' => [2,50]],

            ['image', 'filter', 'filter' => 'trim'],
            ['image', 'string', 'max' => 255],

            ['status', 'required'],
            ['status', 'default', 'value' => self::STATUS_ENABLE],
            ['status', 'in', 'range' => [self::STATUS_ENABLE, self::STATUS_DISABLE]],

            ['seo_title', 'filter', 'filter' => 'trim'],
            ['seo_title', 'string', 'max' => 255],

            ['seo_keyword', 'filter', 'filter' => 'trim'],
            ['seo_keyword', 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => '联赛名称',
            'image' => '缩略图',
            'status' => '状态',
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
