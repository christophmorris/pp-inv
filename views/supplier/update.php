<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\supplier */

$this->title = 'Update Supplier: ' . $model->idsupplier;
$this->params['breadcrumbs'][] = ['label' => 'Suppliers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idsupplier, 'url' => ['view', 'id' => $model->idsupplier]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="supplier-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
