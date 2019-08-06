<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "supplier".
 *
 * @property int $idsupplier
 * @property string $supplier_name
 * @property string $supplier_contact
 * @property string $supplier_address
 * @property string $supplier_phone
 * @property string $supplier_email
 * @property string $notes
 * @property string $date_started
 * @property string $date_ended
 *
 * @property InputBatch[] $inputBatches
 * @property Item[] $items
 */
class Supplier extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'supplier';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['supplier_name', 'supplier_contact', 'supplier_address', 'supplier_phone', 'supplier_email', 'notes', 'date_started', 'date_ended'], 'required'],
            [['notes'], 'string'],
            [['date_started', 'date_ended'], 'safe'],
            [['supplier_name', 'supplier_contact', 'supplier_address'], 'string', 'max' => 50],
            [['supplier_phone'], 'string', 'max' => 20],
            [['supplier_email'], 'string', 'max' => 30],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idsupplier' => 'Idsupplier',
            'supplier_name' => 'Supplier Name',
            'supplier_contact' => 'Supplier Contact',
            'supplier_address' => 'Supplier Address',
            'supplier_phone' => 'Supplier Phone',
            'supplier_email' => 'Supplier Email',
            'notes' => 'Notes',
            'date_started' => 'Date Started',
            'date_ended' => 'Date Ended',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getInputBatches()
    {
        return $this->hasMany(InputBatch::className(), ['idsupplier' => 'idsupplier']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getItems()
    {
        return $this->hasMany(Item::className(), ['idsupplier' => 'idsupplier']);
    }
}
