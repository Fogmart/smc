<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\UserBalance */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-balance-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'val')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
