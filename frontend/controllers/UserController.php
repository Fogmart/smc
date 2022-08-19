<?php

namespace frontend\controllers;

class UserController extends \yii\web\Controller
{
    public function actionIndex()
    {

        return $this->render('index');
    }

    public function actionLkClient(){
        //return $this->render('lk-client');
        $user = \Yii::$app->user->identity;
        return $this->render('lk-client', compact('user'));
    }

    public function actionLkMaster(){
        $user = \Yii::$app->user->identity;
        return $this->render('lk-master', compact('user'));
    }

}
