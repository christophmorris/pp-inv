<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Inputbatch */

$this->title = 'Update Inputbatch: ' . $model->id_input_batch;
$this->params['breadcrumbs'][] = ['label' => 'Inputbatches', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_input_batch, 'url' => ['view', 'id' => $model->id_input_batch]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="inputbatch-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
