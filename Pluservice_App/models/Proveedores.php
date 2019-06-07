<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "proveedores".
 *
 * @property int $id
 * @property string $nombre
 * @property string $rut
 * @property string $direccion
 * @property string $email
 * @property int $telefono
 * @property string $ciudad
 * @property string $pais
 */
class Proveedores extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'proveedores';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre', 'rut', 'direccion', 'email', 'telefono'], 'required'],
            [['telefono'], 'default', 'value' => null],
            [['telefono'], 'integer'],
            [['nombre'], 'string', 'max' => 30],
            [['rut'], 'string', 'max' => 13],
            [['direccion'], 'string', 'max' => 50],
            [['email'], 'string', 'max' => 40],
            [['ciudad'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nombre' => 'Nombre',
            'rut' => 'Rut',
            'direccion' => 'Direccion',
            'email' => 'Email',
            'telefono' => 'Telefono',
            'ciudad' => 'Ciudad',
        ];
    }
}
