<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "prodproveedor".
 *
 * @property int $pprov_id
 * @property string $descripcion
 * @property int $producto
 * @property int $proveedor
 *
 * @property Productos $producto0
 * @property Proveedores $proveedor0
 */
class Prodproveedor extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'prodproveedor';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['descripcion', 'producto', 'proveedor'], 'required'],
            [['producto', 'proveedor'], 'default', 'value' => null],
            [['producto', 'proveedor'], 'integer'],
            [['descripcion'], 'string', 'max' => 100],
            [['producto'], 'exist', 'skipOnError' => true, 'targetClass' => Productos::className(), 'targetAttribute' => ['producto' => 'id']],
            [['proveedor'], 'exist', 'skipOnError' => true, 'targetClass' => Proveedores::className(), 'targetAttribute' => ['proveedor' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'pprov_id' => 'Código Registro',
            'descripcion' => 'Descripción',
            'producto' => 'Producto',
            'proveedor' => 'Proveedor',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProducto0()
    {
        return $this->hasOne(Productos::className(), ['id' => 'producto']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProveedor0()
    {
        return $this->hasOne(Proveedores::className(), ['id' => 'proveedor']);
    }
}
