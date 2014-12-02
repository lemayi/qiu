<?php

namespace backend\models;

use Yii;
use yii\db\ActiveRecord;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "link".
 *
 * @property integer $id
 * @property integer $league_id
 * @property integer $team_id
 * @property integer $player_id
 * @property integer $type_id
 * @property string $title
 * @property string $intro
 * @property string $image
 * @property integer $status
 * @property string $created_at
 * @property string $updated_at
 */
class Link extends \yii\db\ActiveRecord
{

    const STATUS_ENABLE      = 1;
    const STATUS_DISABLE     = 2;

    const TYPE_LINK          = 1;
    const TYPE_WORD          = 2;
    const TYPE_IMAGE         = 3;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'link';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['league_id', 'team_id', 'player_id', 'type_id', 'status', 'created_at', 'updated_at'], 'integer'],
            [['title', 'intro', 'created_at', 'updated_at'], 'required'],
            [['title', 'intro'], 'string', 'max' => 255]
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
            'season_id' => '赛季',
            'team_id' => '球队',
            'player_id' => '球员',
            'type_id' => '帖子类型',
            'title' => '标题',
            'intro' => '简介',
            'status' => '状态',
            'url' => '链接地址',
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

    // type array
    public function getLinkTypeList()
    {
        return [
            self::TYPE_LINK    => '链接',
            self::TYPE_WORD    => '文字',
            self::TYPE_IMAGE   => '图片',
        ];
    }

}
