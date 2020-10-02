<?php

namespace app\models;

use yii\base\Model;

class SignupForm extends Model
{
    public $username;

    public $password;

    public function rules()
    {
        return [
            [['username', 'password'], 'required'],
            [
                'username', 
                'unique', 
                'targetClass' => User::class,
                'message' => 'Логин должен быть уникальным!'
            ]
        ];
    }
    
    public function attributeLabels()
    {
        return [
            'username' => 'Имя пользователя',
            'password' => 'Пароль',
        ];
    }
}