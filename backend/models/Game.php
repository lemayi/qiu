<?php

namespace backend\models;

use Yii;
use yii\db\ActiveRecord;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "game".
 *
 * @property integer $id
 * @property integer $league_id
 * @property integer $home_team
 * @property integer $visit_team
 * @property string $time
 * @property integer $status
 * @property string $created_at
 * @property string $updated_at
 */
class Game extends ActiveRecord
{
    const STATUS_ENABLE      = 1;
    const STATUS_DISABLE     = 2;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'game';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['league_id', 'home_team', 'visit_team', 'status', 'created_at', 'updated_at'], 'integer'],
            [['time', 'created_at', 'updated_at'], 'required'],
            [['time'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'league_id' => '联赛',
            'home_team' => '主队',
            'visit_team' => '客队',
            'time' => '比赛时间',
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
