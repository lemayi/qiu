<?php

namespace backend\models;

use Yii;
use yii\db\ActiveRecord;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "user".
 *
 * @property integer $id
 * @property string $username
 * @property string $auth_key
 * @property string $password_hash
 * @property string $password_reset_token
 * @property string $email
 * @property string $mobile
 * @property integer $mobile_bind
 * @property integer $email_bind
 * @property integer $role_id
 * @property integer $status
 * @property integer $login_count
 * @property string $last_login_ip
 * @property string $last_login_time
 * @property integer $created_at
 * @property integer $updated_at
 */
class User extends \yii\db\ActiveRecord
{
    const STATUS_ENABLE      = 1;
    const STATUS_DISABLE     = 2;
    const BIND_YES           = 1;
    const BIND_NO            = 0;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [

            [['username', 'role_id'], 'required'],
            [['mobile_bind', 'email_bind', 'role_id', 'status', 'login_count', 'last_login_time', 'created_at', 'updated_at'], 'integer'],
            [['username'], 'string', 'max' => 50],
            [['password_hash', 'password_reset_token', 'email'], 'string', 'max' => 255],
            
            [['status'], 'default', 'value' => self::STATUS_ENABLE],
            [['status'], 'in', 'range' => [self::STATUS_ENABLE, self::STATUS_DISABLE]],
            [['mobile_bind', 'email_bind'], 'default', 'value' => self::BIND_NO],
            [['mobile_bind', 'email_bind'], 'in', 'range' => [self::BIND_NO, BIND_YES]],
            [['email'], 'email'],
            [['mobile'], 'string', 'max' => 13],
            [['mobile'], 'number'],
            [['mobile_bind', 'email_bind'], 'in', 'range' => [0,1]],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => '会员名称',
            'auth_key' => '密码',
            'password_hash' => '密码',
            'password_reset_token' => 'Password Reset Token',
            'email' => '邮箱',
            'mobile' => '手机号',
            'mobile_bind' => '是否绑定手机号',
            'email_bind' => '是否绑定Email',
            'role_id' => '会员组',
            'status' => '状态',
            'login_count' => '登录次数',
            'last_login_ip' => '最后登录IP',
            'last_login_time' => '最后登录时间',
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

    public function scenarios()
    {
        return [
            'create' => ['username', 'password'],
            'update' => ['username', 'email', 'password'],
        ];
    }

    // relation role table
    public function getRole()
    {
        return $this->hasOne(Role::className(), ['id' => 'role_id']);
    }

    // status array
    public function getStatusList()
    {
        return [
            self::STATUS_ENABLE    => '启用',
            self::STATUS_DISABLE   => '禁用'
        ];
    }

    // status array
    public function getBindList()
    {
        return [
            self::BIND_NO    => '否',
            self::BIND_YES   => '是'
        ];
    }
}
