<?php

/** @var yii\web\View $this */
/** @var common\models\User $user */

$verifyLink = Yii::$app->urlManager->createAbsoluteUrl(['site/verify-email', 'token' => $user->verification_token]);
?>
Здравствуйте <?= $user->username ?>,

Спасибо за регистрацию на портале SM Center.

Для активации вашего аккаунта, пожалуйста перейдите по ссылке:

<?= $verifyLink ?>
