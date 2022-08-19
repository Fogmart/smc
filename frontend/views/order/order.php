<?php

/* @var $main_div_class string */
/* @var $order common\models\Order */

?>

    <div class="<?=$main_div_class?>">
        <div class="job_item">
            <div class="top_item">
                <div class="item_left">
                    <h2><?=$order->jobType->name?></h2>
                    <div class="city">
                        <?=$order->city->name?>
                    </div>
                    <div class="raion">
                        <?=$order->district->name?>
                    </div>
                    <div class="date"><?=$order->whn?></div>
                </div>
                <div class="item_right">
                    <div class="id_item">
                        ID <?=$order->id?>
                    </div>

                    <div class="prof">
                        <?=$order->prof->name?>
                    </div>

                    <div class="raiting">
                        <p>Сложность</p>
                        <? for ($i=1; $i<=$order->level; $i++) {?>
                            <img src="/images/star_full.svg">
                        <? }?>
                        <? for ($i=$order->level; $i< 5; $i++) {?>
                            <img src="/images/star_empty.svg">
                        <? }?>
                    </div>

                    <div class="status">
                        <?=$order->statusname?>
                    </div>
                </div>
            </div>
            <div class="description">
                <?=$order->desctipt?>

            </div>

            <div class="btn_price">
                <?if (Yii::$app->user->identity->ismaster && !$order->ismy) {?>
                    <?php
                    $form = \yii\widgets\ActiveForm::begin(['action' => ['order/take-order'],]); ?>
                        <input type="hidden" value="<?=$order->id?>" name="ordid">
                        <button>Взять заказ</button>
                    <?php \yii\widgets\ActiveForm::end(); ?>
                <?}?>
                <span><?=$order->price?> <i>руб.</i></span>
            </div>

            <div class="client_contact">
                <div class="phone">
                    <img src="/images/phone.svg">
                    <div class="phone_num">
                        <?if ($order->ismy) {
                            echo $order->phone;
                        } else {
                            echo '+7 999 ...' ;
                        } ?>
                    </div>
                </div>

                <div class="txt_warning">
                    Номер телефона клиента будет доступен только после получения заказа
                </div>
            </div>
        </div>
    </div>

