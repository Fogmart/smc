<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $user common\models\User */
/* @var $user_info common\models\UserInfo */

$this->title = 'Update User ';

?>
<div class="user-edit">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($user, 'email')->textInput() ?>
    <?= $form->field($user, 'new_password')->textInput() ?>
    <?= $form->field($user_info, 'fio')->textInput() ?>
    <?=$form->field($user_info, 'city_id')->widget(Select2::classname(), [
        'data' => ArrayHelper::map(\common\models\City::find()->all(), 'id', 'name'),
        'options' => ['placeholder' => 'город'],
        'value' => $user_info->city_id
    ]);?>
    <?= $form->field($user_info, 'phone')->textInput() ?>
    <?=$form->field($user_info, 'type_id')->widget(Select2::classname(), [
        'data' => \common\models\UserInfo::TYPES,
        'options' => ['placeholder' => 'тип пользователя'],
        'value' => $user_info->type_id
    ]);?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
