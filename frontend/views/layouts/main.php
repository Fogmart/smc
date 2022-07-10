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
                        <a class="navbar-brand" href="#"><img src="/images/logo.svg"></a>
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
                                        <a class="dropdown-item" href="/profile">Профиль</a>
                                        <a class="dropdown-item" href="#">Баланс</a>
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

<footer class="footer mt-auto py-3 text-muted">
    <div class="container">

    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage();
