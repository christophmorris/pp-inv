<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\supplier */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="supplier-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'supplier_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'supplier_contact')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'supplier_address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'supplier_phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'supplier_email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'notes')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'date_started')->textInput() ?>

    <?= $form->field($model, 'date_ended')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
