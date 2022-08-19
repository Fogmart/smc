<?php

namespace frontend\models;

use common\models\UserInfo;
use Yii;
use yii\base\Model;
use common\models\User;
use yii\web\UploadedFile;

/**
 * Signup form
 */
class SignupForm extends Model
{
    public $username;
    public $email;
    public $password;
    public $fio;
    public $phone;
    public $avatar;
    public $type_id;
    public $city_id;

    public $newavatar;
    public $newdoc1;
    public $newdoc2;
    public $newdoc3;


    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            ['username', 'trim'],
//            ['username', 'required'],
//            ['username', 'unique', 'targetClass' => '\common\models\User', 'message' => 'Логин уже занят'],
            ['username', 'string', 'min' => 2, 'max' => 255],

            ['email', 'trim'],
            ['email', 'email'],
            ['email', 'string', 'max' => 255],
            ['email', 'unique', 'targetClass' => '\common\models\User', 'message' => 'email уже занят'],

//            ['password', 'required'],
            ['password', 'string', 'min' => Yii::$app->params['user.passwordMinLength']],

            [['type_id'], 'integer'],
            [['city_id'], 'integer'],
            [['fio'], 'string', 'max' => 100],
            [['avatar'], 'string', 'max' => 500],
            [['phone'], 'string', 'max' => 20],
            [['newavatar','newdoc1', 'newdoc2', 'newdoc3'], 'safe'],

        ];
    }

    /**
     * Signs user up.
     *
     * @return bool whether the creating new account was successful and email was sent
     */
    public function signup()
    {
        if (!$this->username) $this->username = $this->email;
        if (!$this->validate()) {
            return null;
        }
        
        $user = new User();
        $user->username = $this->username;
        $user->email = $this->email;
        $user->status = '1'; // Status 9 is non-active user
        $user->setPassword($this->password);
        $user->generateAuthKey();
        $user->generateEmailVerificationToken();
        $user->save();

        $uInfo = new UserInfo();
        $uInfo->user_id = $user->id;
        $uInfo->type_id = $this->type_id;
        $uInfo->fio = $this->fio;
        $uInfo->phone = $this->phone;
        $uInfo->city_id = $this->city_id;

        $uInfo->newavatar = UploadedFile::getInstance($this, 'newavatar');
        $uInfo->newdoc1 = UploadedFile::getInstance($this, 'newdoc1');
        $uInfo->newdoc2 = UploadedFile::getInstance($this, 'newdoc2');
        $uInfo->newdoc3 = UploadedFile::getInstance($this, 'newdoc3');

        $uInfo->save();
        
        // Email to user to self-activate
        /*if($this->type_id == 1) {
            $this->sendEmail($user);
        }
        // Email to admin to activate master
        if($this->type_id == 2) {
            $this->sendVerifiationEmailToAdmin($user);
        }*/

        return 1;
    }

    /**
     * Sends confirmation email to user
     * @param User $user user model to with email should be send
     * @return bool whether the email was sent
     */
    protected function sendVerifiationEmailToAdmin(User $user) {
        return Yii::$app
            ->mailer
            ->compose(
                ['html' => 'emailVerifyByAdmin-html', 'text' => 'emailVerifyByAdmin-text'],
                ['user' => $user]
            )
            ->setFrom([Yii::$app->params['supportEmail'] => Yii::$app->name . ' robot'])
            ->setTo(Yii::$app->params['adminEmail'])
            ->setSubject('Регистрация на портале ' . Yii::$app->name)
            ->send();
    }

    /**
     * Sends confirmation email to user
     * @param User $user user model to with email should be send
     * @return bool whether the email was sent
     */
    protected function sendEmail($user)
    {
        return Yii::$app
            ->mailer
            ->compose(
                ['html' => 'emailVerify-html', 'text' => 'emailVerify-text'],
                ['user' => $user]
            )
            ->setFrom([Yii::$app->params['supportEmail'] => Yii::$app->name . ' robot'])
            ->setTo($this->email)
            ->setSubject('Регистрация на портале ' . Yii::$app->name)
            ->send();
    }

    public function attributeLabels()
    {
        return [
            'Username' => 'Имя',
            'type_id' => 'Статус',
            'password' => 'Пароль',
            'fio' => 'ФИО',
            'avatar' => 'Avatar',
            'phone' => 'Телефон',
        ];
    }
}
