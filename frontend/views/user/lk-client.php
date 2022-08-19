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
                        <img src="/images/avatar.png">
                    </div>
                    <div class="profile_info">
                        <div class="fio">
                            <?=$user->fio?>
                        </div>
                        <div class="proff">
                            электрик
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
                <div class="profile_balance">
                    <div class="balance">
                        <span>Баланс:</span>
                        <div> <?=$user->info->balance?> руб.</div>
                    </div>
                    <a href="/user-balance/">Пополнить баланс</a>
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

    <?foreach ($user->myorders as $cnt_my_ord=>$order) {
        echo $this->render('/order/order', [
            'order' => $order,
            'main_div_class' => 'col-md-12',
        ]);
    }
    if ($cnt_my_ord > 4) $cnt_my_ord = 4;
    ?>

    
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
            items: 4,
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