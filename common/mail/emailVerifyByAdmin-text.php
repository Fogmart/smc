<?php

/** @var yii\web\View $this */
/** @var common\models\User $user */

$verifyLink = Yii::$app->urlManager->createAbsoluteUrl(['site/verify-email', 'token' => $user->verification_token]);
?>
Пользователь <?= $user->username ?> пожелал зарегистрироваться на портале в качестве мастера

Для активации аккаунта, пожалуйста перейдите по ссылке:

<?= $verifyLink ?>
