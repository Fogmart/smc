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
            <h1>Список клиентов</h1>
        </div>
    </div>



</div>    
</section>


<section id="pre_table">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="btn_add">
                <button onclick="document.location='<?=Url::to(['user/create'])?>'">Добавить клиента</button>
                </div>
            </div>

            <div class="col-md-6">
                <div class="seacrh_table">
                <!-- Сделать AJAX поиск по таблице -->
                    <input type="text" name="city" placeholder="Поиск клиента">
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
      <th>ФИО</th>
      <th>Город</th>
      <th>E-mail</th>
      <th>Телефон</th>
      <th>Ред.</th>
      <th>Удалить</th>
    </tr>
  </thead>
  <tbody>
  <?foreach ($user_lst as $i=>$user) {?>

      <tr>
        <td class="id_item" data-label="Номер"><?=$i+1?></td>
        <td class="name" data-label="ФИО"><?=(isset($user->info)) ? $user->fio : ''?></td>
        <td class="city" data-label="Город"><?=(isset($user->info->city)) ? $user->info->city->name : ''?></td>
        <td class="prof" data-label="E-mail"><?=$user->email?></td>
        <td class="phone" data-label="Телефон"><?=(isset($user->info)) ? $user->phone : '' ?></td>
        <td class="edit" data-label="Ред."><a href="<?=Url::to(['user/update', 'id' => $user->id ])?>"><img src="images/edit.svg"></a></td>
        <td class="del" data-label="Удалить"><a onclick="user_del(<?=$user->id?>)"><img src="images/del.svg"></a></td>
      </tr>
  <? } ?>


  
  
  </tbody>
</table>
            </div>
        </div>
    </div>
</section>

<script>
    function user_del(id) {
        if (confirm('Удалить?')){
            $.get("index.php?r=user%2Fdelete&id="+id, function (data) {
                document.location.reload()
            })
        }
    }
</script>