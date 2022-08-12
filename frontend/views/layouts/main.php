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
\frontend\assets\VendorAsset::register($this);
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

    <link rel="shortcut icon" href="/images/logo_white.svg">
    <link rel="manifest" href="/manifest.json">
    <link rel="icon" href="/images/logo_white.svg" type="image/x-icon" />

    <link rel="apple-touch-icon" href="/images/logo_white.svg">
    <meta name="theme-color" content="black" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="SMCentr">
    <meta name="msapplication-TileImage" content="/images/logo_white.svg">
    <meta name="msapplication-TileColor" content="#FFFFFF">

    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-title" content="smcentr.su">

    <link rel="apple-touch-icon shortcut icon" href="/images/logo_white.svg">
    <link rel="apple-touch-icon shortcut icon" sizes="76x76" href="/images/logo_white.svg">
    <link rel="apple-touch-icon shortcut icon" sizes="120x120" href="/images/logo_white.svg">
    <link rel="apple-touch-icon shortcut icon" sizes="152x152" href="/images/logo_white.svg">

    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="d-flex flex-column h-100">
<?php $this->beginBody() ?>


<? if(!Yii::$app->user->isGuest) { ?>
    <header id="sticky_header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <button class="navbar-toggler" type="button" data-toggle="offcanvas">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <a class="navbar-brand" href="/"><img src="/images/logo.svg"></a>
                        <div class="navbar-collapse offcanvas-collapse" id="navbarSupportedContent">
                            <button class="offcanvas-close" type="button" data-toggle="offcanvas-close">
                                ×
                            </button>
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item active">
                                    <a class="nav-link" href="/order/">Список заказов</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/support">Техническая поддержка</a>
                                </li>

                                <li class="nav-item">

                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                                       aria-haspopup="true" aria-expanded="false">
                                        <img src="<?=Yii::$app->user->identity->avatar?>">
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <?if (Yii::$app->user->identity->ismaster ) {?>
                                            <a class="dropdown-item" href="/user/lk-master">Профиль</a>
                                        <? } else {?>
                                            <a class="dropdown-item" href="/profile">Профиль</a>
                                        <? } ?>
                                        <a class="dropdown-item" href="/user-balance">Баланс</a>
                                        <a class="dropdown-item" href="#">История заказов</a>
                                        <a class="dropdown-item" href="#">Уведомления</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="/site/logout">Выйти</a>
                                    </div>
                                </li>
                            </ul>

                        </div>
                    </nav>
                </div>
            </div>
        </div>

    </header>
<? } ?>


<main role="main" class="flex-shrink-0">
    <div class="container">
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</main>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <ul>
                    <li><a href="">Способы оплаты</a></li>
                    <li><a href="">Политика конфиденциальности</a></li>
                </ul>
                
                
            </div>

<div class="col-md-4">
                
            </div>

<div class="col-md-4">
                <p>Центр поддержки клиентов: <a href="">8 800 100 00 00</a><br>
Звонок по России бесплатный</p>
            </div>
        </div>
    </div>
</footer>







<?php $this->endBody() ?>

<script  src="/js/pwa.js"></script>
</body>
</html>
<?php $this->endPage();
