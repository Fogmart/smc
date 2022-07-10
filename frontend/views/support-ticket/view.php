<?php

use yii\helpers\Html;
use \yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $ticket common\models\SupportTicket */


\yii\web\YiiAsset::register($this);
?>
<div class="support-ticket-view">

    <h2><?=$ticket->subject?></h2>

    <p>Сообщения</p>
    <table class="table">
        <? foreach ($ticket->messages as $msg) {?>
            <tr>
                <td><?=$msg->autor->username?></td>
                <td><?=$msg->message?></td>
                <td><?=$msg->whn?></td>
            </tr>
        <? }?>
    </table>
    <?php $form = ActiveForm::begin(['action' => ['support-ticket/addmsg']]); ?>
    <input type="hidden" name="ticket_id" value="<?=$ticket->id?>">
    <label class="control-label" >Текст обращения</label>
    <br>
    <textarea name="text"></textarea>

    <div class="form-group">
        <?= Html::submitButton('Добавить', ['class' => 'btn btn-success']) ?>
    </div>


    <?php ActiveForm::end(); ?>

</div>
