<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $model common\models\City */
/* @var $profs common\models\Prof */
/* @var $city string */
/* @var $prof_prcnt array */


?>
<div class="city-view">



    <? Pjax::begin([]);
    ?>

    <?= Html::beginForm([''], 'post', ['data-pjax' => '', 'id'=>"city_form"]); ?>

        <?=Select2::widget([
            'name'=> "city_slct",
            'id'=> "city_slct",
            'value'=> $city,
            'data' => ArrayHelper::map(\common\models\City::find()->all(), 'id', 'name'),
            'options' => ['placeholder' => 'город'],
            'pluginEvents' => [
                "select2:select" => "function() { $('#city_form').submit() }",
            ]
        ]);
        ?>
    <?= Html::endForm() ?>
        <?if ($profs) {
            ?>
            <table class="tbl">
                <?foreach ($profs as $prof) {?>
                    <tr>
                        <td><?=$prof->name?></td>
                        <td>
                            <input value="<?=$prof_prcnt[$prof->id]?>" onchange="prof_save('<?=$city?>', '<?=$prof->id?>', this.value )">

                        </td>
                    </tr>
                <? } ?>
            </table >
        <? } //($profs)?>

    <? Pjax::end();?>


</div>


<script>
    function prof_save(city_id, prof_id, val) {
        $.get('/city/prof-save?city_id='+city_id+'&prof_id='+prof_id+ '&prcnt='+val)
    }
</script>