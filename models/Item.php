<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "item".
 *
 * @property int $iditem
 * @property string $item_code
 * @property string $itm_desc
 * @property string $units
 * @property string $cost_price
 * @property string $sell_price
 * @property int $idsupplier
 * @property string $note
 * @property string $last_updated
 *
 * @property InputBatch[] $inputBatches
 * @property Inventory[] $inventories
 * @property Supplier $supplier
 * @property OutputBatch[] $outputBatches
 */
class Item extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'item';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['item_code', 'itm_desc', 'units', 'cost_price', 'sell_price', 'idsupplier', 'note'], 'required'],
            [['cost_price', 'sell_price'], 'number'],
            [['idsupplier'], 'integer'],
            [['last_updated'], 'safe'],
            [['item_code'], 'string', 'max' => 20],
            [['itm_desc'], 'string', 'max' => 50],
            [['units'], 'string', 'max' => 10],
            [['note'], 'string', 'max' => 255],
            //[['idsupplier'], 'exist', 'skipOnError' => true, 'targetClass' => Supplier::className(), 'targetAttribute' => ['idsupplier' => 'idsupplier']],
            [['idsupplier'], 'exist', 'skipOnError' => true, 'targetClass' => Supplier::className(), 'targetAttribute' => ['idsupplier' => 'idsupplier'], 'message' => Yii::t('app', 'Supplier doesn\'t exist')],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'iditem' => 'Iditem',
            'item_code' => 'Item Code',
            'itm_desc' => 'Description',
            'units' => 'Units',
            'cost_price' => 'Cost Price',
            'sell_price' => 'Sell Price',
            'idsupplier' => 'Supplier',
            'note' => 'Note',
            'last_updated' => 'Last Updated',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getInputBatches()
    {
        return $this->hasMany(InputBatch::className(), ['iditem' => 'iditem']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getInventories()
    {
        return $this->hasMany(Inventory::className(), ['iditem' => 'iditem']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSupplier()
    {
        return $this->hasOne(Supplier::className(), ['idsupplier' => 'idsupplier']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSupplierName()
    {
        return $this->supplier->supplier_name;
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOutputBatches()
    {
        return $this->hasMany(OutputBatch::className(), ['iditem' => 'iditem']);
    }
}
