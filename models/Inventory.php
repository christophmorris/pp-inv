<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "inventory".
 *
 * @property int $idinventory
 * @property int $iditem Foreign key to item
 * @property int $idstore Foreign key to site
 * @property int $idsupplier
 * @property int $on_hand
 * @property int $on_order
 * @property int $minimum_stock_level
 * @property string $notes
 * @property string $last_updated
 *
 * @property Item $item
 * @property Store $store
 */
class Inventory extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'inventory';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['iditem', 'idstore', 'idsupplier', 'on_hand', 'on_order', 'minimum_stock_level', 'notes', 'last_updated'], 'required'],
            [['iditem', 'idstore', 'idsupplier', 'on_hand', 'on_order', 'minimum_stock_level'], 'integer'],
            [['last_updated'], 'safe'],
            [['notes'], 'string', 'max' => 255],
            [['iditem'], 'exist', 'skipOnError' => true, 'targetClass' => Item::className(), 'targetAttribute' => ['iditem' => 'iditem']],
            [['idstore'], 'exist', 'skipOnError' => true, 'targetClass' => Store::className(), 'targetAttribute' => ['idstore' => 'idstore']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idinventory' => 'ID',
            'iditem' => 'Item',
            'idstore' => 'Store',
            'idsupplier' => 'Supplier',
            'on_hand' => 'On Hand',
            'on_order' => 'On Order',
            'minimum_stock_level' => 'Minimum Stock Level',
            'notes' => 'Notes',
            'last_updated' => 'Last Updated',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getItem()
    {
        return $this->hasOne(Item::className(), ['iditem' => 'iditem']);
    }

    public function getItemCode()
    {
          return $this->item->item_code;
    }
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStore()
    {
        return $this->hasOne(Store::className(), ['idstore' => 'idstore']);
    }

    public function getStoreName()
    {
          return $this->store->store_name;
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSupplier()
    {
        return $this->hasOne(Supplier::className(), ['idsupplier' => 'idsupplier']);
    }

    public function getSupplierName()
    {
          return $this->supplier->supplier_name;
    }

}
