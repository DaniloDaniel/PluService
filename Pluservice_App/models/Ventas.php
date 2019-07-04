<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ventas".
 *
 * @property int $id_venta
 * @property string $fecha
 * @property int $cliente
 * @property int $producto
 * @property int $cantidad
 * @property int $total
 * @property string $descripcion
 *
 * @property Clientes $cliente0
 * @property Productos $producto0
 */
class Ventas extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ventas';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fecha', 'cliente', 'producto', 'cantidad', 'total', 'descripcion'], 'required'],
            [['fecha'], 'safe'],
            [['cliente', 'producto', 'cantidad', 'total'], 'default', 'value' => null],
            [['cliente', 'producto', 'cantidad', 'total'], 'integer'],
            [['descripcion'], 'string', 'max' => 80],
            [['cliente'], 'exist', 'skipOnError' => true, 'targetClass' => Clientes::className(), 'targetAttribute' => ['cliente' => 'id']],
            [['producto'], 'exist', 'skipOnError' => true, 'targetClass' => Productos::className(), 'targetAttribute' => ['producto' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_venta' => 'Cod Venta',
            'fecha' => 'Fecha (año/mes/dia)',
            'cliente' => 'Cliente',
            'producto' => 'Producto',
            'cantidad' => 'Cantidad',
            'total' => 'Total',
            'descripcion' => 'Descripcion',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCliente0()
    {
        return $this->hasOne(Clientes::className(), ['id' => 'cliente']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProducto0()
    {
        return $this->hasOne(Productos::className(), ['id' => 'producto']);
    }
}
