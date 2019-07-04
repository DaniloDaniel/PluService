<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Prodproveedor;

/**
 * ProdproveedorSearch represents the model behind the search form of `app\models\Prodproveedor`.
 */
class ProdproveedorSearch extends Prodproveedor
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['pprov_id', 'producto', 'proveedor'], 'integer'],
            [['descripcion'], 'safe'],
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
        $query = Prodproveedor::find();

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
            'pprov_id' => $this->pprov_id,
            'producto' => $this->producto,
            'proveedor' => $this->proveedor,
        ]);

        $query->andFilterWhere(['ilike', 'descripcion', $this->descripcion]);

        return $dataProvider;
    }
}
