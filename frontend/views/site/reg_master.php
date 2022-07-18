<?php

use kartik\select2\Select2;
use yii\bootstrap4\ActiveForm;
use yii\helpers\ArrayHelper;


/* @var $profs */
?>


<section id="reg_master">
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
            <h1>Регистрация мастера</h1>
        </div>
    </div>
    <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>
    <div class="row">
        <div class="col-md-5">
            <div class="reg_contact">
                <h3>Контактная информация</h3>
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
        <button class="button upload">Загрузить<i></i></button>
    </div>
</div>
            </div>
        </div>

        <div class="col-md-7">



<div class="pasport_upload">
                <h3>Фото паспорта</h3>
            <div class="p_upload_items">
                <div class="p_upload_item">
                   
                    <div class="file_upload">
                        <p>Главная страница</p>
                        
                        <span><img src="/images/file_upload.svg"> file-pasport.jpg</span>
                    </div>

                     <div class="p_upload_btn">
                        
        <button class="button upload">Загрузить<i></i></button>
                    </div>
                </div>

                <div class="p_upload_item">
                    <div class="file_upload">
                        <p>Страница прописки</p>
                        
                        <span><img src="/images/file_upload.svg">file-regitration.jpg</span>
                    </div>
                    <div class="p_upload_btn">
                        
        <button class="button upload">Загрузить<i></i></button>
                    </div>
                    
                </div>

                <div class="p_upload_item">
                    
                    <div class="file_upload">
                        <p>Селфи с паспортом</p>
                        
                        <span><img src="/images/file_upload.svg">file-selfi.jpg</span>
                    </div>
                    <div class="p_upload_btn">
                        
        <button class="button upload">Загрузить<i></i></button>
                    </div>
                </div>
            </div>
            </div>


            
            
        </div>

        <div class="col-md-12">
            <div class="reg_prof">
                <h3>Специализация</h3>
                <div class="cb_block">
                    <? foreach ($profs as $prof) {?>
                        <div class="cb_items">
                            <div class="main_checkbox">
                                <label class="checkbox">
                                    <input type="checkbox" checked>
                                    <span><?=$prof->name?></span>
                                </label>
                            </div>
                            <? foreach ($prof->jobtypes as $job) {?>
                                <label class="checkbox">
                                    <input type="checkbox">
                                    <span><?=$job->name?></span>
                                </label>
                            <? }?>
                        </div>
                    <? }?>
                </div>
            </div>
        </div>

        <div class="col-md-12">
            <div class="reg_bottom">
                <div class="cb_notifications">
                    <label class="checkbox">
    <input type="checkbox">
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




    </div>
</div>
    <?php ActiveForm::end(); ?>
</section>
