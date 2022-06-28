<?php

/** @var \yii\web\View $this */
/** @var string $content */

use common\widgets\Alert;
use frontend\assets\AppAsset;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;
use yii\bootstrap4\ActiveForm;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>" class="h-100">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">

        <?php $this->registerCsrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body class="d-flex flex-column h-100 auth_block">
    <?php $this->beginBody() ?>

<?php


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

<?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage();