<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ItemSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Items';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="item-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Item', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

          //  'iditem',
          ['attribute' => 'iditem',
         'label' =>'ID',
         'contentOptions' => ['style' => 'width:100px;  min-width:100px;  '],
          ],
            'item_code',
            'itm_desc',
            //'units',
            ['attribute' => 'units',
           'label' =>'Units',
           'contentOptions' => ['style' => 'width:100px;  min-width:100px;  '],
            ],
            //'cost_price',
            //'sell_price',
            ['attribute' => 'sell_price',
           'label' =>'Sell Price',
           'contentOptions' => ['style' => 'width:100px;  min-width:100px;  '],
            ],
            //'idsupplier',
            ['attribute'=>'idsupplier', 'value' => 'SupplierName' ],
            //'note',
            //'last_updated',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
