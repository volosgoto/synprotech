<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property string $name
 * @property string $image
 * @property string $email
 * @property string $password
 * @property string $phone
 * @property string $role
 * @property int $is_admin
 * @property int $active_status
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['email'], 'required'],
            [['is_admin', 'active_status'], 'integer'],
            [['name'], 'string', 'max' => 100],
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
            'name' => 'Name',
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
