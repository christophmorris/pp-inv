<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SupplierSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="supplier-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idsupplier') ?>

    <?= $form->field($model, 'supplier_name') ?>

    <?= $form->field($model, 'supplier_contact') ?>

    <?= $form->field($model, 'supplier_address') ?>

    <?= $form->field($model, 'supplier_phone') ?>

    <?php // echo $form->field($model, 'supplier_email') ?>

    <?php // echo $form->field($model, 'notes') ?>

    <?php // echo $form->field($model, 'date_started') ?>

    <?php // echo $form->field($model, 'date_ended') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
