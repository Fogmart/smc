<?php

use yii\helpers\Html;
use \yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\SupportTicket */

$this->title = 'Добавление обращения';

?>
<div class="support-ticket-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="support-ticket-form">

        <?php $form = ActiveForm::begin(); ?>

        <label class="control-label" for="supportticket-subject">Тема обращения</label>
        <input type="text" id="supportticket-subject" class="form-control"
               name="subject" maxlength="100" aria-required="true" aria-invalid="true">


        <label class="control-label" >Текст обращения</label>
        <br>
        <textarea name="text"></textarea>




        <div class="form-group">
            <?= Html::submitButton('Добавить', ['class' => 'btn btn-success']) ?>
        </div>

        <?php ActiveForm::end(); ?>

    </div>


</div>
