<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "codeviolation".
 *
 * @property int $CaseId
 * @property int $OrderId
 * @property string $CaseNumber
 * @property string $Description
 * @property string $ViolationDate
 * @property string $HearingDate
 * @property string $LienDate
 * @property string $LienAmountPerDay
 * @property string $LienAmount
 * @property string $HardCostsAmount
 * @property string $RecordingFee
 * @property string $AdminFee
 * @property string $NegotiationFee
 * @property string $TotalAdminFees
 *
 * @property Order $order
 */
class Codeviolation extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'codeviolation';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['OrderId'], 'integer'],
            [['Description'], 'string'],
            [['ViolationDate', 'HearingDate', 'LienDate'], 'safe'],
            [['LienAmountPerDay', 'LienAmount', 'HardCostsAmount', 'RecordingFee', 'AdminFee', 'NegotiationFee', 'TotalAdminFees'], 'number'],
            [['CaseNumber'], 'string', 'max' => 45],
            [['OrderId'], 'exist', 'skipOnError' => true, 'targetClass' => Codeviolation::className(), 'targetAttribute' => ['OrderId' => 'OrderId']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'CaseId' => 'Case ID',
            'OrderId' => 'Order ID',
            'CaseNumber' => 'Case Number',
            'Description' => 'Description',
            'ViolationDate' => 'Violation Date',
            'HearingDate' => 'Hearing Date',
            'LienDate' => 'Lien Date',
            'LienAmountPerDay' => 'Lien Amount Per Day',
            'LienAmount' => 'Lien Amount',
            'HardCostsAmount' => 'Hard Costs Amount',
            'RecordingFee' => 'Recording Fee',
            'AdminFee' => 'Admin Fee',
            'NegotiationFee' => 'Negotiation Fee',
            'TotalAdminFees' => 'Total Admin Fees',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrder()
    {
        return $this->hasOne(Order::className(), ['OrderId' => 'OrderId']);
    }
}
