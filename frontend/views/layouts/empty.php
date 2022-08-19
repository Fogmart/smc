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
    <body>
    <?php $this->beginBody() ?>
    <?= $content ?>
    <?php $this->endBody() ?>

    </body>
    </html>
<?php $this->endPage();
