<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\User $user */

$verifyLink = Yii::$app->urlManager->createAbsoluteUrl(['site/verify-email', 'token' => $user->verification_token]);
?>
<div class="verify-email">
    <p>Пользователь <?= Html::encode($user->username) ?> пожелал зарегистрироваться на портале в качестве мастера.</p>

    <p>Для активации аккаунта, пожалуйста перейдите по ссылке:</p>

    <p><?= Html::a(Html::encode($verifyLink), $verifyLink) ?></p>
</div>
