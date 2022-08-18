<?php
/* @var $this yii\web\View
/* @var $user common\models\User
/* @var $userinfo common\models\UserInfo

 */

use yii\bootstrap4\ActiveForm; ?>


<p>
    <?=$user->username?>
</p>

<?php $form = ActiveForm::begin(
        [
                'id' => 'form-signup',
                'action' =>['profile/save'],
                'options' => ['enctype' => 'multipart/form-data']
        ]); ?>


<div class="p_upload_items">
    <div class="p_upload_item">
        <div class="file_upload">
            <p>Аватар</p>
            <? if ($userinfo->avatar) {?>
                <img class="img_preview" src="<?=$userinfo->avatar?>"/>
            <? }?>
            <span><img src="/images/file_upload.svg"> <span id="userinfo-newavatar-lbl"/></span>
            <?= $form->field($userinfo, 'newavatar')->fileInput()->label('') ?>
        </div>
    </div>

    <div class="p_upload_item">
        <div class="file_upload">
            <p>Главная страница</p>
            <? if ($userinfo->doc1) {?>
                <img class="img_preview" src="/<?=$userinfo->doc1?>"/>
            <? }?>
            <span><img src="/images/file_upload.svg"> <span id="userinfo-newdoc1-lbl"/></span>
            <?= $form->field($userinfo, 'newdoc1')->fileInput()->label('') ?>
        </div>
    </div>

    <div class="p_upload_item">
        <div class="file_upload">
            <p>Страница прописки</p>
            <? if ($userinfo->doc2) {?>
                <img class="img_preview" src="/<?=$userinfo->doc2?>"/>
            <? }?>
            <span><img src="/images/file_upload.svg"> <span id="userinfo-newdoc2-lbl"/></span>
            <?= $form->field($userinfo, 'newdoc2')->fileInput()->label('') ?>
        </div>
    </div>

    <div class="p_upload_item">

        <div class="file_upload">
            <p>Селфи с паспортом</p>
            <? if ($userinfo->doc3) {?>
                <img class="img_preview" src="/<?=$userinfo->doc3?>"/>
            <? }?>
            <span><img src="/images/file_upload.svg"> <span id="userinfo-newdoc3-lbl"/></span>
            <?= $form->field($userinfo, 'newdoc3')->fileInput()->label('') ?>
        </div>
    </div>
</div>

    <input type="submit" class="button" value="Сохранить">

<?php ActiveForm::end(); ?>


