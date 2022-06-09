<?php

use lo\widgets\modal\ModalAjax;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
use common\models\District;

/* @var $this yii\web\View */
/* @var $searchModel common\models\DistrictSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Districts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="district-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <div>
        <?=ModalAjax::widget([
            'id' => 'modalCrt',
            'toggleButton' => [
                'label' => 'Добавить',
                'class' => 'btn btn-primary'
            ],
            'url' => Url::to(['/district/create']),
            'ajaxSubmit' => true,
            'autoClose' => true,
            'pjaxContainer' => '#grid-pjax',
        ]);
        ?>
    </div>

    <? Pjax::begin([
        'id' => 'grid-pjax',
        'timeout' => 5000,
    ]);
    ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'cityname',
            'name',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, District $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>

    <? Pjax::end();?>


</div>
