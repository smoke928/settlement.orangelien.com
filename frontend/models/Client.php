<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "client".
 *
 * @property int $ClientId
 * @property string $ClientName
 * @property int $PrimaryContactId
 * @property string $CreatedDateTime
 * @property string $UpdatedDateTime
 *
 * @property ClientsContacts[] $clientsContacts
 * @property Order[] $orders
 */
class Client extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'client';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['PrimaryContactId'], 'integer'],
            [['CreatedDateTime', 'UpdatedDateTime'], 'safe'],
            [['ClientName'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ClientId' => 'Client ID',
            'ClientName' => 'Client Name',
            'PrimaryContactId' => 'Primary Contact ID',
            'CreatedDateTime' => 'Created Date Time',
            'UpdatedDateTime' => 'Updated Date Time',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClientsContacts()
    {
        return $this->hasMany(ClientsContacts::className(), ['ClientId' => 'ClientId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrders()
    {
        return $this->hasMany(Order::className(), ['ClientId' => 'ClientId']);
    }
}
