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
                <?foreach ($orders as $i=>$order) {
                    echo $this->render('order', [
                        'order' => $order,
                        'main_div_class' => 'col-md-4',
                    ]);
                } ?>



            </div>
        </div>
    </section>



</div>
