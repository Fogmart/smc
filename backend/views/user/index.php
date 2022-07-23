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
                <td><?=$user->fio?></td>
                <td><?=$user->email?></td>
                <td><?=$user->phone?></td>
                <td><?=$user->info->city->name?></td>

                <td>
                    <a href="/user/update?id=<?=$user->id?>">edt</a>

                    <button onclick="user_delete(<?=$user->id?>, '<?=$user->email?>')" >del</button>

                </td>
            </tr>
        <? } ?>


    </table>


</div>

<script>
    function user_delete(id, email) {
        if (confirm("Удалить пользователя " + email + "? ")) {
            document.location = "/user/delete?id="+id
        }
    }
</script>
