<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "inputbatch".
 *
 * @property int $id_input_batch
 * @property int $input_batch_number
 * @property int $iditem
 * @property int $idstore
 * @property int $quantity
 * @property string $input_date
 * @property string $notes
 * @property int $idsupplier
 *
 * @property Item $item
 * @property Store $store
 * @property Supplier $supplier
 */
class Inputbatch extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'inputbatch';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['input_batch_number', 'iditem', 'idstore', 'quantity', 'input_date', 'notes', 'idsupplier'], 'required'],
            [['input_batch_number', 'iditem', 'idstore', 'quantity', 'idsupplier'], 'integer'],
            [['input_date'], 'safe'],
            [['notes'], 'string', 'max' => 255],
            [['iditem'], 'exist', 'skipOnError' => true, 'targetClass' => Item::className(), 'targetAttribute' => ['iditem' => 'iditem']],
            [['idstore'], 'exist', 'skipOnError' => true, 'targetClass' => Store::className(), 'targetAttribute' => ['idstore' => 'idstore']],
            [['idsupplier'], 'exist', 'skipOnError' => true, 'targetClass' => Supplier::className(), 'targetAttribute' => ['idsupplier' => 'idsupplier']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_input_batch' => 'Id Input Batch',
            'input_batch_number' => 'Batch #',
            'iditem' => 'Item',
            'idstore' => 'Store',
            'quantity' => 'Quantity',
            'input_date' => 'Input Date',
            'notes' => 'Notes',
            'idsupplier' => 'Supplier',
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
}
