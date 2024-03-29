<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Order */

$this->title = 'Создать заказ';
$this->params['breadcrumbs'][] = ['label' => 'Orders', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<section id="reg_client">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Создание заявки</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
            </div>

            <?= $this->render('_form', [
                'model' => $model,
            ]) ?>

            <!-- The Modal -->
            <div id="myModal" class="modal">
                <!-- Modal content -->
                <div class="modal-content">
                    <span style="text-align: right;" class="close">&times;</span>
                    <p style="text-align: center; font-size: 16px;">Ваша заявка успешно создана.<br>Наши мастера смогут ознакомиться с ней в ближайшее время.<br>
                        <a style="margin-top: 20px;display: block;" href="#">Перейти в профиль</a></p>
                </div>
            </div>


            <style type="text/css">
                /* The Modal (background) */
                .modal {
                    display: none; /* Hidden by default */
                    position: fixed; /* Stay in place */
                    z-index: 1; /* Sit on top */
                    left: 0;
                    top: 0;
                    width: 100%; /* Full width */
                    height: 100%; /* Full height */
                    overflow: auto; /* Enable scroll if needed */
                    background-color: rgb(0,0,0); /* Fallback color */
                    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
                }

                /* Modal Content/Box */
                .modal-content {
                    background-color: #fefefe;
                    margin: 25% auto; /* 15% from the top and centered */
                    padding: 20px;
                    border: 1px solid #888;
                    width: 80%; /* Could be more or less, depending on screen size */
                }

                /* The Close Button */
                .close {
                    color: #aaa;
                    float: right;
                    font-size: 28px;
                    font-weight: bold;
                }

                .close:hover,
                .close:focus {
                    color: black;
                    text-decoration: none;
                    cursor: pointer;
                }
            </style>


            <script type="text/javascript">
                // Get the modal
                var modal = document.getElementById("myModal");

                // Get the button that opens the modal
                var btn = document.getElementById("myBtn");

                // Get the <span> element that closes the modal
                var span = document.getElementsByClassName("close")[0];

                // When the user clicks on the button, open the modal
                btn.onclick = function() {
                    modal.style.display = "block";
                }

                // When the user clicks on <span> (x), close the modal
                span.onclick = function() {
                    modal.style.display = "none";
                }

                // When the user clicks anywhere outside of the modal, close it
                window.onclick = function(event) {
                    if (event.target == modal) {
                        modal.style.display = "none";
                    }
                }
            </script>
        </div>
    </div>
</section>