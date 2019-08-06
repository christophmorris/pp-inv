<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Item;

/**
 * ItemSearch represents the model behind the search form of `app\models\Item`.
 */
class ItemSearch extends Item
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['iditem', 'idsupplier'], 'integer'],
            [['item_code', 'itm_desc', 'units', 'note', 'last_updated'], 'safe'],
            [['cost_price', 'sell_price'], 'number'],
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
        $query = Item::find();

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

        //$query->joinWith(['supplier']);


        // grid filtering conditions
        $query->andFilterWhere([
            'iditem' => $this->iditem,
            'cost_price' => $this->cost_price,
            'sell_price' => $this->sell_price,
            'idsupplier' => $this->idsupplier,
            //['like', 'supplier.supplier_name', $this->idsupplier ],
            'last_updated' => $this->last_updated,
        ]);

        $query->andFilterWhere(['like', 'item_code', $this->item_code])
            ->andFilterWhere(['like', 'itm_desc', $this->itm_desc])
            ->andFilterWhere(['like', 'units', $this->units])
            ->andFilterWhere(['like', 'note', $this->note]);

        return $dataProvider;
    }
}
