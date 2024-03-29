<?php

use kartik\select2\Select2;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
#use yii\jui\DatePicker;

/* @var $this yii\web\View */
/* @var $model common\models\Order */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="order-form">

    <?php $form = ActiveForm::begin(); ?>

    <?=$form->field($model, 'prof_id')->widget(Select2::classname(), [
        'data' => ArrayHelper::map(\common\models\Prof::find()->all(), 'id', 'name'),
        'options' => ['placeholder' => 'профессия'],
    ]);?>

    <?=$form->field($model, 'job_type_id')->widget(Select2::classname(), [
        'data' => ArrayHelper::map(\common\models\JobType::find()->all(), 'id', 'name'),
        'options' => ['placeholder' => 'тип работ'],
    ]);?>


    <?=$form->field($model, 'city_id')->widget(Select2::classname(), [
        'data' => ArrayHelper::map(\common\models\City::find()->all(), 'id', 'name'),
        'options' => ['placeholder' => 'город'],
    ]);?>

    <?=$form->field($model, 'district_id')->widget(Select2::classname(), [
        'data' => ArrayHelper::map(\common\models\District::find()->all(), 'id', 'name'),
        'options' => ['placeholder' => 'район'],
    ]);?>


    <?= $form->field($model, 'desctipt')->textarea() ?>

    <?= $form->field($model, 'price')->textInput(['type' => 'number']) ?>

    <?= $form->field($model, 'level')->dropdownList(\common\models\Order::LEVEL) ?>

    <?= $form->field($model, 'phone')->widget(\yii\widgets\MaskedInput::className(),[
        'mask' => '+7 (999) 999 99 99',
    ]) ?>

    <?
    // ToDo: set datepicker
    ?>


    <?/*= $form->field($model, 'timelimit')->textInput() */?>

    <?/*= $form->field($model, 'timelimit')->widget(DatePicker::className(), [
            'options' => [
                'value' => Yii::$app->formatter->asDate($model->timelimit),
            ],
            'containerOptions' => [
                'autoclose' => TRUE,
                'format'    => 'dd-mm-yyyy',
                'timelimit' => 'd',
            ]
        ]
    ) */?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
