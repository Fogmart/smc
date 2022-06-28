<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap4\ActiveForm $form */
/** @var \common\models\LoginForm $model */

use yii\bootstrap4\Html;
use yii\bootstrap4\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>




<section id="auth_block">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="logo_white">
                    <div class="logo_item">
                        <img src="/images/logo_white.svg">
                        <span>SMC</span>
                    </div>

                    <p>качество, быстрота, надёжность</p>
                </div>

                <div class="auth_items block_shadow b_center">

                    <h2 class="b_center">Вход в систему</h2>

                    <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

                    <?= $form->field($model, 'username')
                        ->textInput(['autofocus' => true, 'placeholder' => "E-mail", 'class'=>'input'])->label('') ?>
                    <?= $form->field($model, 'password')
                        ->passwordInput(['placeholder' => "Пароль", 'class'=>'input'])->label('') ?>
                        <?= Html::submitButton('Войти', ['class' => 'button', 'name' => 'login-button']) ?>
                    <?php ActiveForm::end(); ?>

                    <p class="m_t_15"><a href="#">Забыли пароль?</a></p>
                </div>
                <p class="text-grey">Нет аккаунта? <a href="/site/variants-reg">Зарегистрируйтесь</a></p>
                <p class="text-grey">Центр поддержки клиентов: <a href="#">8 800 100 00 00</a><br>
                    Звонок по России бесплатный</p>
            </div>
        </div>
    </div>
</section>

