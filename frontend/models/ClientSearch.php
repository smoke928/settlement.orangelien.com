<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Client;

/**
 * ClientSearch represents the model behind the search form of `frontend\models\Client`.
 */
class ClientSearch extends Client
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ClientId', 'PrimaryContactId'], 'integer'],
            [['ClientName', 'CreatedDateTime', 'UpdatedDateTime'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Client::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'ClientId' => $this->ClientId,
            'PrimaryContactId' => $this->PrimaryContactId,
            'CreatedDateTime' => $this->CreatedDateTime,
            'UpdatedDateTime' => $this->UpdatedDateTime,
        ]);

        $query->andFilterWhere(['like', 'ClientName', $this->ClientName]);

        return $dataProvider;
    }
}
