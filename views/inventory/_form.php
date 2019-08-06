<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\item;
use app\models\store;
use app\models\supplier;

/* @var $this yii\web\View */
/* @var $model app\models\Inventory */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="inventory-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php
    echo $form->field($model, 'iditem')->dropDownList(ArrayHelper::map(
      Item::find()->select(['iditem', 'item_code'])->all(), 'iditem', 'item_code'),
        ['class' => 'form-control inline-block' ]);
  ?>

    <?php
      echo $form->field($model, 'idstore')->dropDownList(ArrayHelper::map(
        Store::find()->select(['idstore', 'store_name'])->all(), 'idstore', 'store_name'),
          ['class' => 'form-control inline-block' ]);
    ?>

    <?php
      echo $form->field($model, 'idsupplier')->dropDownList(ArrayHelper::map(
        Supplier::find()->select(['idsupplier', 'supplier_name'])->all(), 'idsupplier', 'supplier_name'),
          ['class' => 'form-control inline-block' ]);
    ?>

    <?= $form->field($model, 'on_hand')->textInput() ?>

    <?= $form->field($model, 'on_order')->textInput() ?>

    <?= $form->field($model, 'minimum_stock_level')->textInput() ?>

    <?= $form->field($model, 'notes')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'last_updated')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
