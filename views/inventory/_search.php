<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\InventorySearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="inventory-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idinventory') ?>

    <?= $form->field($model, 'iditem') ?>

    <?= $form->field($model, 'idstore') ?>

    <?= $form->field($model, 'idsupplier') ?>

    <?= $form->field($model, 'on_hand') ?>

    <?php // echo $form->field($model, 'on_order') ?>

    <?php // echo $form->field($model, 'minimum_stock_level') ?>

    <?php // echo $form->field($model, 'notes') ?>

    <?php // echo $form->field($model, 'last_updated') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
