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

    public static function findIdentity($id)
    {
        return static::findOne($id);
    }
    /**
     * @inheritdoc
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
//        return static::findOne(['access_token' => $token]);
    }
    /**
     * Finds user by username
     *
     * @param  string      $username
     * @return static|null
     */
    public static function findByUsername($username)
    {
        return static::findOne(['username' => $username]);
    }
    /**
     * @inheritdoc
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * @inheritdoc
     */
    public function getAuthKey()
    {
        return $this->auth_key;
    }
    /**
     * @inheritdoc
     */
    public function validateAuthKey($authKey)
    {
        return $this->auth_key === $authKey;
    }
    /**
     * Validates password
     *
     * @param  string  $password password to validate
     * @return boolean if password provided is valid for current user
     */
    public function validatePassword($password)
    {
//        return $this->password === $password;
        return Yii::$app->security->validatePassword($password, $this->password);
    }
    public function generateAuthKey(){
        $this->auth_key = Yii::$app->security->generateRandomString();
    }
    public function setPassword($password){
        $passwordToHash = Yii::$app->security->generatePasswordHash($password);
        return $this->password = $passwordToHash;
    }
}
