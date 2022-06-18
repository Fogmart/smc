<?php

use kartik\select2\Select2;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\JobType */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="job-type-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput() ?>

    <?=$form->field($model, 'prof_id')->widget(Select2::classname(), [
        'data' => ArrayHelper::map(\common\models\Prof::find()->all(), 'id', 'name'),
        'options' => ['placeholder' => 'профессия'],
    ]);?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
