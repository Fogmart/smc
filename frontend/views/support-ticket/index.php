<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\SupportTicketSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Support Tickets';
?>
<div class="support-ticket-index">


    <p>
        <?= Html::a('Добавить обращение', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <h2>Мои обращения</h2>

    <table>
        <? foreach ($my_tickets as $ticket) { ?>
            <tr>
                <td><?=$ticket->subject?></td>
                <td><a href="/support/<?=$ticket->id?>">...</a></td>
            </tr>
        <? }?>
    </table>

</div>
