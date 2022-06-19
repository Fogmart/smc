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

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Добавить', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <table class="tbl">
        <tr>
            <th>#</th>
            <th>Профессия/вид работ</th>
            <th>Город/район</th>
            <th>Цена</th>
            <th>Телефон</th>
            <th>Сложность</th>
            <th>Кем создан</th>
        </tr>
        <?foreach ($orders as $i=>$order) {?>
            <tr>
                <td><?=$i+1?></td>
                <td><?=$order->prof->name?> / <?=$order->jobType->name?></td>
                <td><?=$order->city->name?> / <?=$order->district->name?></td>
                <td><?=$order->price?></td>
                <td><?=$order->phone?></td>
                <td><?=$order->levelname?></td>
                <td><?=$order->whocrt->username?></td>
            </tr>
        <? } ?>


    </table>



</div>
