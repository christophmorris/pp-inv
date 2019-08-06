<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\InventorySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Inventory';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="inventory-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Inventory (Emergency use only - use InputBatch)', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'idinventory',
            //'iditem',
            //'idstore',
            //'idsupplier',
            ['attribute'=>'iditem', 'value' => 'ItemCode' ],
            ['attribute'=>'idstore', 'value' => 'StoreName' ],
            ['attribute'=>'idsupplier', 'value' => 'SupplierName' ],
            ['attribute' => 'on_hand',
            'label' =>'On Hand',
            'contentOptions' => ['style' => 'width:100px;  min-width:100px;  '],
            ],
            ['attribute' => 'on_order',
            'label' =>'On Order',
            'contentOptions' => ['style' => 'width:100px;  min-width:100px;  '],
            ],['attribute' => 'minimum_stock_level',
            'label' =>'Minimum Stock',
            'contentOptions' => ['style' => 'width:100px;  min-width:100px;  '],
            ],
            //'on_hand',
            //'on_order',
            //'minimum_stock_level',
            //'notes',
            //'last_updated',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
