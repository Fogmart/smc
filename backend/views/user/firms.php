<?php

use yii\helpers\Html;
use yii\helpers\Url;


/* @var $this yii\web\View */
/* @var $user_lst  */

?>



<section id="list_jobs">
<div class="container">

<div class="row">
        <div class="col-md-12">
            <h1>Список фирм</h1>
        </div>
    </div>



</div>    
</section>


<section id="pre_table">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="btn_add">
                    <button onclick="document.location='<?=Url::to(['user/create'])?>'">Добавить фирму</button>
                </div>
            </div>

            <div class="col-md-6">
                <div class="seacrh_table">
                <!-- Сделать AJAX поиск по таблице -->
                    <input type="text" name="city" placeholder="Поиск фирмы">
               </div>
            </div>

            



        </div>
    </div>
</section>





<section id="table">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <table class="table" id="sort_table">
  <thead>
    <tr>
      <th>id</th>
      <th>Название</th>
      <th>ФИО контакт. лица</th>
      <th>Город</th>
      <th>E-mail</th>
      <th>Телефон</th>
      <th>Баланс</th>
      <th>Ред.</th>
      <th>Удалить</th>
    </tr>
  </thead>
  <tbody>

  <?foreach ($user_lst as $i=>$user) {?>

      <tr>
          <td class="id_item" data-label="Номер"><?=$i+1?></td>
          <td class="firm_name" data-label="Название"></td>
          <td class="name" data-label="ФИО"><?=(isset($user->info)) ? $user->fio : ''?></td>
          <td class="city" data-label="Город"><?=(isset($user->info->city)) ? $user->info->city->name : ''?></td>
          <td class="prof" data-label="E-mail"><?=$user->email?></td>
          <td class="phone" data-label="Телефон"><?=(isset($user->info)) ? $user->phone : '' ?></td>
          <td class="balance" data-label="Баланс"><?=(isset($user->info)) ? $user->info->balance : '' ?></td>
          <td class="edit" data-label="Ред."><a href="<?=Url::to(['user/update', 'id' => $user->id ])?>"><img src="images/edit.svg"></a></td>
          <td class="del" data-label="Удалить"><a href=""><img src="images/del.svg"></a></td>
      </tr>
  <? } ?>

  
  
  </tbody>
</table>
            </div>
        </div>
    </div>
</section>










      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

      <script src="assets/js/scripts.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

  <!-- Bootstrap JS + Popper JS -->
  <script defer src="assets/js/bootstrap.bundle.min.js"></script>

<script src="assets/js/aiSortTable.js"></script>
<script type="text/javascript">
    aiSortTable.init("sort_table", [0, 2, 3], function(e) {
  console.log(e);
});
</script>






</body>
</html>

