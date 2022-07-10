<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $tickets common\models\SupportTicket */


$this->title = 'Support Tickets';
?>
<div class="support-ticket-index">


    <h2>Обращения пользователей</h2>

    <table class="table">
        <? foreach ($tickets as $ticket) { ?>
            <tr>
                <td><?=$ticket->autor->username?></td>
                <td><?=$ticket->subject?></td>
                <td><a href="/support-ticket/view?id=<?=$ticket->id?>">...</a></td>
            </tr>
        <? }?>
    </table>

</div>
