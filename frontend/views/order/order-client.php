<?php

/* @var $main_div_class string */
/* @var $order common\models\Order */

?>


<div class="col-md-4">
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
            <button>Закрыть заявку</button>
            <span><?=$order->price?> <i>руб.</i></span>
        </div>
    </div>
</div>
