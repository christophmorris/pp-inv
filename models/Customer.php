<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "customer".
 *
 * @property int $idcustomer
 * @property string $customer_name
 * @property string $customer_phone
 * @property string $customer_email
 * @property string $customer_address
 * @property string $notes
 *
 * @property OutputBatch[] $outputBatches
 */
class Customer extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'customer';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['customer_name', 'customer_phone', 'customer_email', 'customer_address', 'notes'], 'required'],
            [['customer_name', 'customer_address'], 'string', 'max' => 50],
            [['customer_phone'], 'string', 'max' => 20],
            [['customer_email'], 'string', 'max' => 30],
            [['notes'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idcustomer' => 'Idcustomer',
            'customer_name' => 'Customer Name',
            'customer_phone' => 'Customer Phone',
            'customer_email' => 'Customer Email',
            'customer_address' => 'Customer Address',
            'notes' => 'Notes',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOutputBatches()
    {
        return $this->hasMany(OutputBatch::className(), ['idcustomer' => 'idcustomer']);
    }
}
