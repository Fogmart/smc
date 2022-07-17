<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\UserBalanceSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'User Balances';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-balance-index">

    <h1>Баланс</h1>

    <p>
        <?= Html::a('Добавить', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <table class="tbl">
        <tr>
            <th>#</th>
            <th>Сколько</th>
            <th>Когда</th>
        </tr>
        <?foreach ($balance_lst as $i=>$b) {?>
            <tr>
                <td><?=$i+1?></td>
                <td><?=$b->val?></td>
                <td><?=$b->whn?></td>
            </tr>
        <? } ?>


    </table>


</div>
