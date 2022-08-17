<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap4\ActiveForm $form */
/** @var \frontend\models\SignupForm $model */

use kartik\select2\Select2;
use yii\bootstrap4\Html;
use yii\bootstrap4\ActiveForm;
use yii\helpers\ArrayHelper;

?>

<section id="reg_client">
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="logo_black">
    <div class="logo_item">
        <img src="/images/logo_black.svg">
        <span>SMC</span>
    </div>
</div>
        </div>
    </div>


    <div class="row">
        <div class="col-md-12">
            <h1>Регистрация Клиента</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            
        </div>


        <div class="col-md-12">
            <div class="reg_contact">
                <h3>Контактная информация</h3>
                <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>
                <?= $form->field($model, 'email')
                    ->textInput(['autofocus' => true, 'placeholder' => "Email*", 'class'=>'input'])->label('') ?>
                <?= $form->field($model, 'password')
                    ->textInput(['autofocus' => true, 'placeholder' => "Пароль*", 'class'=>'input'])->label('') ?>


                <?= $form->field($model, 'phone')
                    ->textInput(['autofocus' => true, 'placeholder' => "Телефон*", 'class'=>'input'])->label('') ?>
                <?= $form->field($model, 'fio')
                    ->textInput(['placeholder' => "ФИО*", 'class'=>'input'])->label('') ?>

                <?=$form->field($model, 'city_id')->widget(Select2::classname(), [
                    'data' => ArrayHelper::map(\common\models\City::find()->all(), 'id', 'name'),
                    'options' => ['placeholder' => 'Выберите город*', 'class'=>'select'],
                ])->label('');?>


                <div class="avatar_upload">
    <img src="/images/avatar.png">
    <div class="">
        <p>Аватар пользователя</p>
        <span><img src="/images/file_upload.svg"> <span id="signupform-newavatar-lbl"/></span>
        <?= $form->field($model, 'newavatar')->fileInput()->label('') ?>
    </div>
</div>


            </div>
        </div>

        


            <div class="col-md-12">
                <div class="reg_bottom">
                <div class="cb_notifications">
                        <label class="checkbox">
                        <input type="checkbox" class="input">
                        <span>Получать уведомления</span>
                    </label>
                </div>

                <button class="button">Регистрация</button>



                <div class="bottom_link">
                    <p class="text-grey">Есть аккаунт? <a href="/site/login">Войти</a></p>
                <p class="text-grey">Центр поддержки клиентов: <a href="#">8 800 100 00 00</a><br>
Звонок по России бесплатный</p>
                </div>
            </div>
            
        </div>
        <?php ActiveForm::end(); ?>




    </div>
</div>    
</section>
