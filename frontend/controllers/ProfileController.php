<?php

namespace frontend\controllers;

use common\models\User;
use yii\web\UploadedFile;

class ProfileController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $user_id = \Yii::$app->user->identity->getId();
        $user = User::findIdentity($user_id);
        $userinfo = $user->info;

        return $this->render('index', compact('user', 'userinfo'));
    }

    public function actionSave(){
        $user_id = \Yii::$app->user->identity->getId();
        $user = User::findIdentity($user_id);
        $userinfo = $user->info;


        if ($this->request->isPost) {
            $userinfo->newavatar = UploadedFile::getInstance($userinfo, 'newavatar');
            $userinfo->newdoc1 = UploadedFile::getInstance($userinfo, 'newdoc1');
            $userinfo->newdoc2 = UploadedFile::getInstance($userinfo, 'newdoc2');
            $userinfo->newdoc3 = UploadedFile::getInstance($userinfo, 'newdoc3');
            $userinfo->save();
//            print_r($doc1);
        }
        return $this->render('index', compact('user', 'userinfo'));


    }

}
