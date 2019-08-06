<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "store".
 *
 * @property int $idstore
 * @property string $store_name
 * @property string $store_address
 * @property string $store_contact
 * @property string $contact_phone
 * @property string $contact_email
 * @property string $notes
 *
 * @property InputBatch[] $inputBatches
 * @property Inventory[] $inventories
 * @property OutputBatch[] $outputBatches
 */
class Store extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'store';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['store_name', 'store_address', 'store_contact', 'contact_phone', 'contact_email', 'notes'], 'required'],
            [['store_name', 'store_address', 'store_contact'], 'string', 'max' => 50],
            [['contact_phone'], 'string', 'max' => 20],
            [['contact_email'], 'string', 'max' => 30],
            [['notes'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idstore' => 'Idstore',
            'store_name' => 'Store Name',
            'store_address' => 'Store Address',
            'store_contact' => 'Store Contact',
            'contact_phone' => 'Contact Phone',
            'contact_email' => 'Contact Email',
            'notes' => 'Notes',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getInputBatches()
    {
        return $this->hasMany(InputBatch::className(), ['idstore' => 'idstore']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getInventories()
    {
        return $this->hasMany(Inventory::className(), ['idstore' => 'idstore']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOutputBatches()
    {
        return $this->hasMany(OutputBatch::className(), ['idstore' => 'idstore']);
    }
}
