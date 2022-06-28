<?php

/** @var \yii\web\View $this */
/** @var string $content */

use common\widgets\Alert;
use frontend\assets\AppAsset;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;

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
<body class="d-flex flex-column h-100">
<?php $this->beginBody() ?>

<section id="variants_reg">
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

                <div class="variants_reg_items block_shadow b_center">

                    <h2 class="b_center">Выберите ваше участие в системе</h2>
                    <div class="variants_items">
                        <div class="variants_item">
                            <a href="/site/reg-master">
                            <img src="/images/variants_1.jpg">
                            <button class="button">Мастер</button>
                            <p>Принимать заказы</p>
                            </a>
                        </div>

                        <div class="variants_item">
                            <a href="/site/reg-client">
                            <img src="/images/variants_2.jpg">
                            <button class="button">Клиент</button>
                            <p>Размещать заказы</p>
                            </a>
                        </div>

                        
                    </div>

                </div>
                <p class="text-grey">Есть аккаунт? <a href="/site/login">Войти</a></p>
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