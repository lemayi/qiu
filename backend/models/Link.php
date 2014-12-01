<?php

namespace backend\models;

use Yii;

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
            [['title', 'intro', 'image', 'created_at', 'updated_at'], 'required'],
            [['title', 'intro', 'image'], 'string', 'max' => 255]
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
            'team_id' => 'Team ID',
            'player_id' => 'Player ID',
            'type_id' => 'Type ID',
            'title' => 'Title',
            'intro' => 'Intro',
            'image' => 'Image',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
