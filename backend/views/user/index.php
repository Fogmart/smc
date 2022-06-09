<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $title  */
/* @var $user_lst  */

$this->title = $title;
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <table class="tbl">
        <tr>
            <th>#</th>
            <th>Логин</th>
            <th>Имя</th>
            <th>Телефон</th>
            <th>Email</th>
        </tr>
        <?foreach ($user_lst as $i=>$user) {?>
            <tr>
                <td><?=$i+1?></td>
                <td><?=$user->username?></td>
                <td><?=$user->fio?></td>
                <td><?=$user->phone?></td>
                <td><?=$user->email?></td>
            </tr>
        <? } ?>


    </table>


</div>
