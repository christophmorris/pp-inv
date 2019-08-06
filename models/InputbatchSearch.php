<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Inputbatch;

/**
 * InputbatchSearch represents the model behind the search form of `app\models\Inputbatch`.
 */
class InputbatchSearch extends Inputbatch
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_input_batch', 'input_batch_number', 'iditem', 'idstore', 'quantity', 'idsupplier'], 'integer'],
            [['input_date', 'notes'], 'safe'],
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
        $query = Inputbatch::find();

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
            'id_input_batch' => $this->id_input_batch,
            'input_batch_number' => $this->input_batch_number,
            'iditem' => $this->iditem,
            'idstore' => $this->idstore,
            'quantity' => $this->quantity,
            'input_date' => $this->input_date,
            'idsupplier' => $this->idsupplier,
        ]);

        $query->andFilterWhere(['like', 'notes', $this->notes]);

        return $dataProvider;
    }
}
