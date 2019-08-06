<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\InputbatchSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="inputbatch-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_input_batch') ?>

    <?= $form->field($model, 'input_batch_number') ?>

    <?= $form->field($model, 'iditem') ?>

    <?= $form->field($model, 'idstore') ?>

    <?= $form->field($model, 'quantity') ?>

    <?php // echo $form->field($model, 'input_date') ?>

    <?php // echo $form->field($model, 'notes') ?>

    <?php // echo $form->field($model, 'idsupplier') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
