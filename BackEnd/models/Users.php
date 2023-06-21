<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property int $id
 * @property string $email
 * @property string $nomor_hp
 * @property string|null $username
 * @property string|null $password
 * @property string|null $password_reset_token
 * @property string|null $auth_key
 * @property string|null $access_token
 * @property string|null $role
 */
class Users extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['email', 'nomor_hp'], 'required'],
            [['password', 'password_reset_token'], 'string'],
            [['email', 'nomor_hp'], 'string', 'max' => 255],
            [['username'], 'string', 'max' => 30],
            [['auth_key', 'access_token'], 'string', 'max' => 50],
            [['role'], 'string', 'max' => 10],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'email' => 'Email',
            'nomor_hp' => 'Nomor Hp',
            'username' => 'Username',
            'password' => 'Password',
            'password_reset_token' => 'Password Reset Token',
            'auth_key' => 'Auth Key',
            'access_token' => 'Access Token',
            'role' => 'Role',
        ];
    }
}
