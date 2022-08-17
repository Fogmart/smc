<?php

/** @var \yii\web\View $this */
/** @var string $content */

use backend\assets\AppAsset;
use common\widgets\Alert;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;
use yii\helpers\Url;

AppAsset::register($this);
\lo\widgets\modal\ModalAjaxAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="d-flex flex-column h-100">
<?php $this->beginBody() ?>

    <header id="sticky_header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <button class="navbar-toggler" type="button" data-toggle="offcanvas">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <a class="navbar-brand" href="#"><img src="images/logo.svg"></a>
                        <div class="navbar-collapse offcanvas-collapse" id="navbarSupportedContent">
                            <button class="offcanvas-close" type="button" data-toggle="offcanvas-close">
                                ×
                            </button>
                            <ul class="navbar-nav mr-auto">


                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                                       aria-haspopup="true" aria-expanded="false">
                                        Пользователи
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="<?=Url::to(['user/masters'])?>">Мастера</a>
                                        <a class="dropdown-item" href="<?=Url::to(['user/clients'])?>">Клиенты</a>
                                        <a class="dropdown-item" href="<?=Url::to(['user/firms'])?>">Фирмы</a>
                                        <a class="dropdown-item" href="#">Модераторы</a>


                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Администраторы</a>
                                    </div>
                                </li>


                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                                       aria-haspopup="true" aria-expanded="false">
                                        Справочники
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="<?=Url::to(['city/index'])?>">Города</a>
                                        <a class="dropdown-item" href="<?=Url::to(['district/index'])?>">Районы</a>
                                        <a class="dropdown-item" href="<?=Url::to(['prof/index'])?>">Профессии</a>
                                        <a class="dropdown-item" href="<?=Url::to(['job-type/index'])?>">Виды работ</a>

                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="<?=Url::to(['city/prof-procent'])?>">Комиссии списаний</a>
                                    </div>
                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                                       aria-haspopup="true" aria-expanded="false">
                                        Информация
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="#">Новости</a>
                                        <a class="dropdown-item" href="#">Оферта</a>
                                        <a class="dropdown-item" href="#">Политика конфиденциальности</a>
                                </li>

                                <li class="nav-item active">
                                    <a class="nav-link" href="#">Список заказов</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="<?=Url::to(['support-ticket/index'])?>">Техническая поддержка</a>

                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                                       aria-haspopup="true" aria-expanded="false">
                                        <img src="/images/avatar.png">
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="#">Профиль</a>
                                        <a class="dropdown-item" href="#">Уведомления</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="<?=Url::to(['site/logout'])?>">Выйти</a>
                                    </div>
                                </li>
                            </ul>

                        </div>
                    </nav>
                </div>
            </div>
        </div>

    </header>

<main role="main" class="flex-shrink-0">
    <div class="container">
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</main>



<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage();
