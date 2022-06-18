<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Prof */

$this->title = 'Update Prof: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Profs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="prof-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
