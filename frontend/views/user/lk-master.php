<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Order */


\yii\web\YiiAsset::register($this);
?>

<section id="list_jobs">
<div class="container">

<div class="row">
        <div class="col-md-12">
            <h1>Профиль</h1>
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
                        <img src="/images/avatar.png">
                    </div>
                    <div class="profile_info">
                        <div class="fio">
                            Иванов Иван Иванович
                        </div>
                        <div class="proff">
                            электрик
                        </div>
                        <div class="city">
                            Москва
                        </div>
                    </div>
                </div>

                <div class="btn_profile_edit">
                    <button>Редактировать профиль</button>
                </div>

                
            </div>

            <div class="col-md-4">
                <div class="profile_balance">
                    <div class="balance">
                        <span>Баланс:</span>
                        <div>2300 руб.</div>
                    </div>
                    <button>Пополнить баланс</button>
                </div>
            </div>

            



        </div>
    </div>
</section>


<section id="list_items">
    <div class="container">
        <div class="row">

<div class="col-md-12">
   <h3>Активные заявки</h3> 
</div>


<div class="owl-carousel owl-theme" id="slider_active_order">
    
    <div class="slide">
        <div class="col-md-12">
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


    <div class="slide">
        <div class="col-md-12">
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

    <div class="slide">
        <div class="col-md-12">
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

    <div class="slide">
        <div class="col-md-12">
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
    
</div>

<div class="col-md-12">


    <div class="btn_center">
                <button>Показать все активные заявки</button>
            </div>
</div>

</div>
</div>
</section>




<section id="list_items">
    <div class="container">
        <div class="row">

<div class="col-md-12">
   <h3>Завершенные заявки</h3> 
</div>


<div class="owl-carousel owl-theme" id="slider_complite_order">
    
    <div class="slide">
        <div class="col-md-12">
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


    <div class="slide">
        <div class="col-md-12">
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

    <div class="slide">
        <div class="col-md-12">
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

    <div class="slide">
        <div class="col-md-12">
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
    
</div>

<div class="col-md-12">


    <div class="btn_center">
                <button>Показать все завершенные заявки</button>
            </div>
</div>

</div>
</div>
</section>




      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

      <script src="/js/scripts.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

  <!-- Bootstrap JS + Popper JS -->
  <script defer src="/js/bootstrap.bundle.min.js"></script>


<script type="text/javascript">
    $(document).ready(function(){
    const slider = $("#slider_active_order").owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        dots: false,
        items:4,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:3
            }
        }
    });
});
</script>


<script type="text/javascript">
    $(document).ready(function(){
    const slider = $("#slider_complite_order").owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        dots: false,
        items:4,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:3
            }
        }
    });
});
</script>