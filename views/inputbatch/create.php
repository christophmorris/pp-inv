<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Inputbatch */

$this->title = 'Create Inputbatch';
$this->params['breadcrumbs'][] = ['label' => 'Inputbatches', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="inputbatch-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
