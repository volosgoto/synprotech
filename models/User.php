<?php

namespace app\models;

use Yii;
use yii\web\IdentityInterface;

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
class User extends \yii\db\ActiveRecord implements IdentityInterface
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

    public static function findIdentity($id) {
        return User::findOne($id);
    }

    public static function findIdentityByAccessToken($token, $type = null) {
        // TODO: Implement findIdentityByAccessToken() method.
    }

    public function getId() {
        return $this->id;
    }

    public function getAuthKey() {
        // TODO: Implement getAuthKey() method.
    }

    public function validateAuthKey($authKey) {
        // TODO: Implement validateAuthKey() method.
    }


    public static function findByUsername($username)
    {
        return User::find()->where(['name' => $username])->one();

    }


    public function validatePassword($password)
    {
        return ($this->password == $password) ? true : false;

    }


    public function saveImage($file){ // Object
        $prefix = Yii::$app->security->generateRandomString(4); // Prefix to exclude rewrite file

        if ($file->error == 0) {
            $this->image = $prefix . $file->name;
            $this->save();
        }
        return false;
    }


    // public function create()
    // {
    //     $model = new User();
    //         $model->save();
    //         if($model->save())
    //         {
    //             return $this->redirect(['auth/login']);
    //         }
    //     return $this->render('signup', ['model'=>$model]);
    // }
}
    



