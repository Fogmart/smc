<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $user common\models\User */


\yii\web\YiiAsset::register($this);
?>

<section id="list_jobs">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Профиль клиента</h1>
            </div>
        </div>
    </div>
</section>

<section id="profile_master">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="profile_master">
                    <div class="profile_img">
                        <?php
                            if($user->info->avatar !==null) {
                                $avatar = $user->info->avatar;
                                echo '<img width="121px" src='.$avatar.'>';
                                ?>
                            <?php } else { ?>
                                <img src="/images/avatar.png">
                            <?php }
                        ?>
                    </div>
                    <div class="profile_info">
                        <div class="fio">
                            <?=$user->fio?>
                        </div>
                        <div class="city">
                            <?=$user->info->city->name?>
                        </div>
                    </div>
                </div>
                <div class="btn_profile_edit">
                    <button>Редактировать профиль</button>
                </div>
            </div>
            <div class="col-md-4">
                <a href="../order/create"><button>Создать заявку</button></a>
            </div>
        </div>
    </div>
</section>

<!-- Созданные заявки -->
<section id="list_items">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>Заявки без исполнителя</h3>
            </div>
        </div>
        <div class="row">
            <?php
            $i = 0;
            foreach ($orders as $key=>$order) if ($i < 2) {
                echo $this->render('/order/order-client', [
                    'order' => $order,
                    'main_div_class' => 'col-md-12',
                ]);
            }
            ?>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="btn_center">
                    <button>Показать все заявки без исполнителя</button>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>

<!-- Заявки в работе -->
<section id="list_items">
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <h3>Активные заявки</h3>
            </div>
        </div>


        <div class="row">
            <div class="col-md-4">
                <div class="job_item">
                    <div class="top_item">
                        <div class="item_left">
                            <h2>Ремонт сантехники</h2>
                            <div class="city">
                                Москва
                            </div>
                            <div class="raion">
                                Красноселький район
                            </div>
                            <div class="date">03.06.2022</div>
                        </div>
                        <div class="item_right">
                            <div class="id_item">
                                ID 123456
                            </div>

                            <div class="prof">
                                Сантехник
                            </div>

                            <div class="raiting">
                                <p>Сложность</p>
                                <img src="/images/star_full.svg">
                                <img src="/images/star_full.svg">
                                <img src="/images/star_full.svg">
                                <img src="/images/star_empty.svg">
                                <img src="/images/star_empty.svg">
                            </div>

                            <div class="status_performed">
                                в работе
                            </div>
                        </div>
                    </div>
                    <div class="description">
                        Описание заказа. Описание заказа. Описание заказа. Описание заказа. Описание заказа.
                    </div>

                    <div class="btn_price">
                        <button>Закрыть заявку</button>
                        <span>1000 <i>руб.</i></span>
                    </div>

                    <div class="client_contact_visible">
                        <div class="phone">
                            <img src="/images/phone.svg">
                            <div class="phone_num"><a href="tel:+79991112233">+7 999 111-22-33</a></div>
                        </div>

                        <div class="client_block">
                            Алексей <img src="/images/avatar.png">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="job_item">
                    <div class="top_item">
                        <div class="item_left">
                            <h2>Ремонт сантехники</h2>
                            <div class="city">
                                Москва
                            </div>
                            <div class="raion">
                                Красноселький район
                            </div>
                            <div class="date">03.06.2022</div>
                        </div>
                        <div class="item_right">
                            <div class="id_item">
                                ID 123456
                            </div>

                            <div class="prof">
                                Сантехник
                            </div>

                            <div class="raiting">
                                <p>Сложность</p>
                                <img src="/images/star_full.svg">
                                <img src="/images/star_full.svg">
                                <img src="/images/star_full.svg">
                                <img src="/images/star_empty.svg">
                                <img src="/images/star_empty.svg">
                            </div>

                            <div class="status_performed">
                                в работе
                            </div>
                        </div>
                    </div>
                    <div class="description">
                        Описание заказа. Описание заказа. Описание заказа. Описание заказа. Описание заказа.
                    </div>

                    <div class="btn_price">
                        <button>Закрыть заявку</button>
                        <span>1000 <i>руб.</i></span>
                    </div>

                    <div class="client_contact_visible">
                        <div class="phone">
                            <img src="/images/phone.svg">
                            <div class="phone_num"><a href="tel:+79991112233">+7 999 111-22-33</a></div>
                        </div>

                        <div class="client_block">
                            Алексей <img src="/images/avatar.png">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="job_item">
                    <div class="top_item">
                        <div class="item_left">
                            <h2>Ремонт сантехники</h2>
                            <div class="city">
                                Москва
                            </div>
                            <div class="raion">
                                Красноселький район
                            </div>
                            <div class="date">03.06.2022</div>
                        </div>
                        <div class="item_right">
                            <div class="id_item">
                                ID 123456
                            </div>

                            <div class="prof">
                                Сантехник
                            </div>

                            <div class="raiting">
                                <p>Сложность</p>
                                <img src="/images/star_full.svg">
                                <img src="/images/star_full.svg">
                                <img src="/images/star_full.svg">
                                <img src="/images/star_empty.svg">
                                <img src="/images/star_empty.svg">
                            </div>

                            <div class="status_performed">
                                в работе
                            </div>
                        </div>
                    </div>
                    <div class="description">
                        Описание заказа. Описание заказа. Описание заказа. Описание заказа. Описание заказа.
                    </div>

                    <div class="btn_price">
                        <button>Закрыть заявку</button>
                        <span>1000 <i>руб.</i></span>
                    </div>

                    <div class="client_contact_visible">
                        <div class="phone">
                            <img src="/images/phone.svg">
                            <div class="phone_num"><a href="tel:+79991112233">+7 999 111-22-33</a></div>
                        </div>

                        <div class="client_block">
                            Алексей <img src="/images/avatar.png">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="btn_center">
                    <button>Показать все активные заявки</button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Заявки завершенные -->
<section id="list_items">
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <h3>Завершенные заявки</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="job_item">
                    <div class="top_item">
                        <div class="item_left">
                            <h2>Ремонт сантехники</h2>
                            <div class="city">
                                Москва
                            </div>
                            <div class="raion">
                                Красноселький район
                            </div>
                            <div class="date">03.06.2022</div>
                        </div>
                        <div class="item_right">
                            <div class="id_item">
                                ID 123456
                            </div>

                            <div class="prof">
                                Сантехник
                            </div>

                            <div class="raiting">
                                <p>Сложность</p>
                                <img src="/images/star_full.svg">
                                <img src="/images/star_full.svg">
                                <img src="/images/star_full.svg">
                                <img src="/images/star_empty.svg">
                                <img src="/images/star_empty.svg">
                            </div>
                            <div class="status_complite">
                                завершен
                            </div>
                        </div>
                    </div>
                    <div class="description">
                        Описание заказа. Описание заказа. Описание заказа. Описание заказа. Описание заказа.
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="job_item">
                    <div class="top_item">
                        <div class="item_left">
                            <h2>Ремонт сантехники</h2>
                            <div class="city">
                                Москва
                            </div>
                            <div class="raion">
                                Красноселький район
                            </div>
                            <div class="date">03.06.2022</div>
                        </div>
                        <div class="item_right">
                            <div class="id_item">
                                ID 123456
                            </div>

                            <div class="prof">
                                Сантехник
                            </div>

                            <div class="raiting">
                                <p>Сложность</p>
                                <img src="/images/star_full.svg">
                                <img src="/images/star_full.svg">
                                <img src="/images/star_full.svg">
                                <img src="/images/star_empty.svg">
                                <img src="/images/star_empty.svg">
                            </div>

                            <div class="status_complite">
                                завершен
                            </div>
                        </div>
                    </div>
                    <div class="description">
                        Описание заказа. Описание заказа. Описание заказа. Описание заказа. Описание заказа.
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="job_item">
                    <div class="top_item">
                        <div class="item_left">
                            <h2>Ремонт сантехники</h2>
                            <div class="city">
                                Москва
                            </div>
                            <div class="raion">
                                Красноселький район
                            </div>
                            <div class="date">03.06.2022</div>
                        </div>
                        <div class="item_right">
                            <div class="id_item">
                                ID 123456
                            </div>

                            <div class="prof">
                                Сантехник
                            </div>

                            <div class="raiting">
                                <p>Сложность</p>
                                <img src="/images/star_full.svg">
                                <img src="/images/star_full.svg">
                                <img src="/images/star_full.svg">
                                <img src="/images/star_empty.svg">
                                <img src="/images/star_empty.svg">
                            </div>

                            <div class="status_complite">
                                завершен
                            </div>
                        </div>
                    </div>
                    <div class="description">
                        Описание заказа. Описание заказа. Описание заказа. Описание заказа. Описание заказа.
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="btn_center">
                    <button>Показать все завершенные заявки</button>
                </div>
            </div>
        </div>
    </div>
</section>
