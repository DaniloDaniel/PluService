<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Ventas;

/**
 * VentasSearch represents the model behind the search form of `app\models\Ventas`.
 */
class VentasSearch extends Ventas
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_venta', 'cliente', 'producto', 'cantidad', 'total'], 'integer'],
            [['fecha', 'descripcion'], 'safe'],
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
        $query = Ventas::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {

            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id_venta' => $this->id_venta,
            'fecha' => $this->fecha,
            'cliente' => $this->cliente,
            'producto' => $this->producto,
            'cantidad' => $this->cantidad,
            'total' => $this->total,
        ]);

        $query->andFilterWhere(['ilike', 'descripcion', $this->descripcion]);

        return $dataProvider;
    }
}
