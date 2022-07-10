<?php

namespace frontend\controllers;

use common\models\SupportMessage;
use common\models\SupportTicket;
use common\models\SupportTicketSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * SupportTicketController implements the CRUD actions for SupportTicket model.
 */
class SupportTicketController extends Controller
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
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all SupportTicket models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $my_tickets = \Yii::$app->user->identity->tickets;

        return $this->render('index', compact( 'my_tickets'));
    }

    /**
     * Displays a single SupportTicket model.
     * @param int $id ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        $ticket = $this->findModel($id);
        return $this->render('view',  compact('ticket'));
    }

    /**
     * Creates a new SupportTicket model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new SupportTicket();

        if ($this->request->isPost) {

            $ticket = new SupportTicket();
            $ticket->src_user_id = \Yii::$app->user->identity->getId();
            $ticket->subject = $this->request->post('subject');
            $ticket->save();
            $msg = new SupportMessage();
            $msg->ticket_id = $ticket->id;
            $msg->user_id = $ticket->src_user_id;
            $msg->message = $this->request->post('text');
            $msg->save();
            return $this->redirect(['view', 'id' => $ticket->id]);
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    public function actionAddmsg(){
        $msg = new SupportMessage();
        $msg->ticket_id = $this->request->post('ticket_id');
        $msg->user_id = \Yii::$app->user->identity->getId();
        $msg->message = $this->request->post('text');
        $msg->save();
        return $this->redirect(['view', 'id' => $msg->ticket_id]);
    }

    /**
     * Updates an existing SupportTicket model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing SupportTicket model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the SupportTicket model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return SupportTicket the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = SupportTicket::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
