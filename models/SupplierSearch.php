<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\supplier;

/**
 * SupplierSearch represents the model behind the search form of `app\models\supplier`.
 */
class SupplierSearch extends supplier
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idsupplier'], 'integer'],
            [['supplier_name', 'supplier_contact', 'supplier_address', 'supplier_phone', 'supplier_email', 'notes', 'date_started', 'date_ended'], 'safe'],
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
        $query = supplier::find();

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
            'idsupplier' => $this->idsupplier,
            'date_started' => $this->date_started,
            'date_ended' => $this->date_ended,
        ]);

        $query->andFilterWhere(['like', 'supplier_name', $this->supplier_name])
            ->andFilterWhere(['like', 'supplier_contact', $this->supplier_contact])
            ->andFilterWhere(['like', 'supplier_address', $this->supplier_address])
            ->andFilterWhere(['like', 'supplier_phone', $this->supplier_phone])
            ->andFilterWhere(['like', 'supplier_email', $this->supplier_email])
            ->andFilterWhere(['like', 'notes', $this->notes]);

        return $dataProvider;
    }
}
