<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\OrderSearch */
/* @var $orders common\models\Order */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Orders';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="order-index">
    <?if (Yii::$app->user->identity->isclient) {?>
    <p>
        <?= Html::a('Добавить', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <? }?>

    <section id="list_jobs">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Список заказов</h1>
                </div>
            </div>
        </div>
    </section>

    <section id="list_items">
        <div class="container">
            <div class="row">
                <?foreach ($orders as $i=>$order) {?>
                    <div class="col-md-4">
                        <div class="job_item">
                            <div class="top_item">
                                <div class="item_left">
                                    <h2><?=$order->jobType->name?></h2>
                                    <div class="city">
                                        <?=$order->city->name?>
                                    </div>
                                    <div class="raion">
                                        <?=$order->district->name?>
                                    </div>
                                    <div class="date"><?=$order->whn?></div>
                                </div>
                                <div class="item_right">
                                    <div class="id_item">
                                        ID <?=$order->id?>
                                    </div>

                                    <div class="prof">
                                        <?=$order->prof->name?>
                                    </div>

                                    <div class="raiting">
                                        <p>Сложность</p>

                                        <? for ($i=1; $i<=$order->level; $i++) {?>
                                            <img src="/images/star_full.svg">
                                        <? }?>
                                        <? for ($i=$order->level; $i< 5; $i++) {?>
                                            <img src="/images/star_empty.svg">
                                        <? }?>


                                    </div>

                                    <div class="status">
                                        Ожидает
                                    </div>
                                </div>
                            </div>
                            <div class="description">
                                <?=$order->desctipt?>

                            </div>

                            <div class="btn_price">
                                <?if (Yii::$app->user->identity->ismaster && !$order->ismy) {?>
                                    <?php

                                    $form = \yii\widgets\ActiveForm::begin(['action' => ['order/take-order'],]); ?>
                                        <input type="hidden" value="<?=$order->id?>" name="ordid">
                                        <button>Взять заказ</button>
                                    <?php \yii\widgets\ActiveForm::end(); ?>
                                <?}?>
                                <span><?=$order->price?> <i>руб.</i></span>
                            </div>

                            <div class="client_contact">
                                <div class="phone">
                                    <img src="/images/phone.svg">
                                    <div class="phone_num">
                                        <?if ($order->ismy) {
                                            echo $order->phone;
                                        } else {
                                            echo '+7 999 ...' ;
                                        } ?>
                                    </div>
                                </div>

                                <div class="txt_warning">
                                    Номер телефона клиента будет доступен только после получения заказа
                                </div>
                            </div>
                        </div>
                    </div>

                <? } //foreach ($orders ?>



            </div>
        </div>
    </section>



</div>
