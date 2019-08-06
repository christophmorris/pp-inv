<?php

use yii\helpers\Html;
use yii\grid\GridView;


/* @var $this yii\web\View */
/* @var $searchModel app\models\InputbatchSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Inputbatches';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="inputbatch-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Inputbatch', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_input_batch',
            'input_batch_number',
            ['attribute'=>'iditem', 'value' => 'ItemCode' ],
            ['attribute'=>'idstore', 'value' => 'StoreName' ],
            'quantity',
            //'input_date',
            //'notes',
            //'idsupplier',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
