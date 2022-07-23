<?php

namespace backend\controllers;

use common\models\User;
use common\models\UserInfo;
use common\models\UserSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * UserController implements the CRUD actions for User model.
 */
class UserController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [

                    ],
                ],
            ]
        );
    }

    /**
     * Displays a single User model.
     * @param int $id
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new User model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $user = new User();
        $user_info = new UserInfo();

        if ($this->request->isPost) {
            $user->load($this->request->post());
            $user->save();
            $user_info->load($this->request->post());
            $user_info->user_id = $user->id;
            $user_info->save();
        }

        return $this->render('update', compact(['user', 'user_info']));
    }

    /**
     * Updates an existing User model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id = "")
    {
        $user = $this->findModel($id);
        $user_info = $user->info;

        if ($this->request->isPost ) {
            $user->load($this->request->post());
            $user->save();
            $user_info->load($this->request->post());
            $user_info->save();
            return $this->redirect(['index']);
        }

        return $this->render('update', compact(['user', 'user_info']));
    }

    /**
     * Deletes an existing User model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the User model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id
     * @return User the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = User::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    public function actionClients(){
        $user_lst = User::find()->joinWith('info')->where(['type_id' => "1"])->all();
        $title = "Клиенты";
        return $this->render('index',
            compact('user_lst', 'title')
        );
    }

    public function actionMasters(){
        $user_lst = User::find()->joinWith('info')->where(['type_id' => "2"])->all();
        $title = "Мастера";
        return $this->render('index',
            compact('user_lst', 'title')
        );
    }

    public function actionIndex(){
        $user_lst = User::find()->joinWith('info')->all();
        $title = "Пользователи";
        return $this->render('index',
            compact('user_lst', 'title')
        );
    }




}
