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

<?php $form = ActiveForm::begin(); ?>
<div class="col-md-12">
    <div class="reg_contact">
        <h3>Заполните все поля</h3>

        <?=$form->field($model, 'prof_id')->widget(Select2::classname(), [
            'data' => ArrayHelper::map(\common\models\Prof::find()->all(), 'id', 'name'),
            'options' => ['placeholder' => 'профессия', 'required'=>true],
        ])->label(false);?>

        <?=$form->field($model, 'job_type_id')->widget(Select2::classname(), [
            'data' => ArrayHelper::map(\common\models\JobType::find()->all(), 'id', 'name'),
            'options' => ['placeholder' => 'Выберите тип работ*'],
        ])->label(false);?>

        <?=$form->field($model, 'city_id')->widget(Select2::classname(), [
            'data' => ArrayHelper::map(\common\models\City::find()->all(), 'id', 'name'),
            'options' => ['placeholder' => 'Выберите город*'],
        ])->label(false);?>

        <?=$form->field($model, 'district_id')->widget(Select2::classname(), [
            'data' => ArrayHelper::map(\common\models\District::find()->all(), 'id', 'name'),
            'options' => ['placeholder' => 'Выберите район*'],
        ])->label(false);?>

        <?= $form->field($model, 'desctipt')->textarea(['placeholder'=> 'Описание заявки', 'class'=>'form-control form-control-textarea'])->label(false) ?>

        <?= $form->field($model, 'price')->textInput(['type' => 'price', 'placeholder'=> 'Цена заявки*', 'class'=>''])->label(false) ?>

        <?= $form->field($model, 'level')->dropdownList(\common\models\Order::LEVEL)->label('Сложность заявки') ?>

        <?= $form->field($model, 'phone')->widget(\yii\widgets\MaskedInput::className(),[
            'mask' => '+7 (999) 999 99 99',
            'options' => ['placeholder' => 'Телефон*', 'required'=>true, 'class'=>''],
        ])->label(false) ?>

    </div>
</div>

<div class="col-md-12">
    <div class="reg_bottom">
        <?= Html::submitButton('Разместить заявку', ['class' => 'myBtn']) ?>
    </div>
</div>
<?php ActiveForm::end(); ?>