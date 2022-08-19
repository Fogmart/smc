<?php

namespace frontend\controllers;

use common\models\Order;

class UserController extends \yii\web\Controller
{
    public function actionIndex()
    {

        return $this->render('index');
    }

    public function actionLkClient() {

        $user = \Yii::$app->user->identity;
        $orders = Order::find()
            ->where(['crt_by'=> \Yii::$app->user->identity->info->user_id])->all();

        return $this->render('lk-client', [
            'user' => $user,
            'orders' => $orders,
        ]);
    }

    public function actionLkMaster(){
        $user = \Yii::$app->user->identity;
        return $this->render('lk-master', compact('user'));
    }

}
