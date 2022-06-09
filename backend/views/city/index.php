<?php

use yii\widgets\Pjax;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use lo\widgets\modal\ModalAjax;
use common\models\City;


/* @var $this yii\web\View */
/* @var $searchModel common\models\CitySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Cities';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="city-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <div>
        <?=ModalAjax::widget([
            'id' => 'modalCrt',
            'toggleButton' => [
                'label' => 'Добавить',
                'class' => 'btn btn-primary'
            ],
            'url' => Url::to(['/city/create']),
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
            'name',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, City $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>

    <? Pjax::end();?>

</div>
