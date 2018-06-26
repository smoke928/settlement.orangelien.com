<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Codeviolation;

/**
 * CodeviolationSearch represents the model behind the search form of `frontend\models\Codeviolation`.
 */
class CodeviolationSearch extends Codeviolation
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['CaseId', 'OrderId'], 'integer'],
            [['CaseNumber', 'Description', 'ViolationDate', 'HearingDate', 'LienDate'], 'safe'],
            [['LienAmountPerDay', 'LienAmount', 'HardCostsAmount', 'RecordingFee', 'AdminFee', 'NegotiationFee', 'TotalAdminFees'], 'number'],
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
        $query = Codeviolation::find();

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
            'CaseId' => $this->CaseId,
            'OrderId' => $this->OrderId,
            'ViolationDate' => $this->ViolationDate,
            'HearingDate' => $this->HearingDate,
            'LienDate' => $this->LienDate,
            'LienAmountPerDay' => $this->LienAmountPerDay,
            'LienAmount' => $this->LienAmount,
            'HardCostsAmount' => $this->HardCostsAmount,
            'RecordingFee' => $this->RecordingFee,
            'AdminFee' => $this->AdminFee,
            'NegotiationFee' => $this->NegotiationFee,
            'TotalAdminFees' => $this->TotalAdminFees,
        ]);

        $query->andFilterWhere(['like', 'CaseNumber', $this->CaseNumber])
            ->andFilterWhere(['like', 'Description', $this->Description]);

        return $dataProvider;
    }
}
