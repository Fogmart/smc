<?php

use yii\helpers\Html;
use yii\helpers\Url;


/* @var $this yii\web\View */
/* @var $title  */
/* @var $user_lst  */

$this->title = $title;
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <a href="/user/create">Добавить</a>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <table class="tbl">
        <tr>
            <th>#</th>
            <th>Имя</th>
            <th>Email</th>
            <th>Телефон</th>
            <th>Город</th>
            <th></th>
        </tr>
        <?foreach ($user_lst as $i=>$user) {?>
            <tr>
                <td><?=$i+1?></td>
                <td><?=(isset($user->info)) ? $user->fio : ''?></td>
                <td><?=$user->email?></td>
                <td><?=(isset($user->info)) ? $user->phone : '' ?></td>
                <td><?=(isset($user->info->city)) ? $user->info->city->name : ''?></td>

                <td>
                    <a href="index.php?r=user%2Fupdate&id=<?=$user->id?>">edt</a>

                    <button onclick="user_delete(<?=$user->id?>, '<?=$user->email?>')" >del</button>

                </td>
            </tr>
        <? } ?>


    </table>


</div>

<script>
    function user_delete(id, email) {
        if (confirm("Удалить пользователя " + email + "? ")) {
            document.location = "index.php?r=user%2Fdelete&id="+id
        }
    }
</script>
