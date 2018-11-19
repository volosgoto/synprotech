<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property int $id
 * @property string $image
 * @property string $email
 * @property string $password
 * @property string $phone
 * @property string $role
 * @property int $is_admin
 * @property int $active_status
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
            [['email'], 'required'],
            [['is_admin', 'active_status'], 'integer'],
            [['image', 'email', 'password', 'phone', 'role'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'image' => 'Image',
            'email' => 'Email',
            'password' => 'Password',
            'phone' => 'Phone',
            'role' => 'Role',
            'is_admin' => 'Is Admin',
            'active_status' => 'Active Status',
        ];
    }
}
