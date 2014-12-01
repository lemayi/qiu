<?php

namespace backend\models;

use Yii;
use yii\db\ActiveRecord;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "season".
 *
 * @property integer $id
 * @property integer $league
 * @property string $name
 * @property integer $status
 * @property string $created_at
 * @property string $updated_at
 */
class Season extends ActiveRecord
{
    const STATUS_ENABLE      = 1;
    const STATUS_DISABLE     = 2;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'season';
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
            ['name', 'string', 'length' => [2,100]],

            ['status', 'required'],
            ['status', 'default', 'value' => self::STATUS_ENABLE],
            ['status', 'in', 'range' => [self::STATUS_ENABLE, self::STATUS_DISABLE]],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'league' => '联赛',
            'name' => '赛季名称',
            'status' => '状态',
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
