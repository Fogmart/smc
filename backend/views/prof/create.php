<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Prof */

$this->title = 'Create Prof';
$this->params['breadcrumbs'][] = ['label' => 'Profs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="prof-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
