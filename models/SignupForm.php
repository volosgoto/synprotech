<?php


namespace app\models;


use yii\base\Model;

class SignupForm extends Model {

    public $name;
    public $email;
    public $password;
    public $password_repeat;

    public function rules() {
        return [
            [['name','email'], 'required'],
            [['name'], 'string'],
            [['email'], 'email'],
            ['password', 'required'],
            ['password', 'string', 'min' => 4],
            ['password_repeat', 'required'],
            ['password_repeat', 'compare', 'compareAttribute'=>'password', 'message'=>"Passwords don't match" ],


            [['email'], 'unique', 'targetClass'=>'app\models\User', 'targetAttribute'=>'email']
        ];
    }

    public function signup(){
        if ($this->validate()) {
            $user = new Users();
            $user->attributes = $this->attributes;
            return $user->create();
        }
    }
}