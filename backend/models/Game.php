<?php

namespace backend\models;

use Yii;

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
class Game extends \yii\db\ActiveRecord
{
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
            [['league_id', 'home_team', 'visit_team', 'time', 'status', 'created_at', 'updated_at'], 'integer'],
            [['time', 'created_at', 'updated_at'], 'required']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'league_id' => 'League ID',
            'home_team' => 'Home Team',
            'visit_team' => 'Visit Team',
            'time' => 'Time',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
