<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "clientes".
 *
 * @property string $id
 * @property string $nombre
 * @property string $direccion
 * @property string $email
 * @property int $telefono
 */
class Clientes extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'clientes';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'nombre', 'email', 'telefono'], 'required'],
            [['telefono'], 'default', 'value' => null],
            [['telefono'], 'integer'],
            [['id'], 'string', 'max' => 15],
            [['nombre', 'direccion', 'email'], 'string', 'max' => 30],
            [['id'], 'unique'],
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
            'direccion' => 'Direccion',
            'email' => 'Email',
            'telefono' => 'Telefono',
        ];
    }
}
