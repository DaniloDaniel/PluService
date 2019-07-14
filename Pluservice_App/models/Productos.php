<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "productos".
 *
 * @property int $id
 * @property string $nombre
 * @property int $valor
 * @property string $descripcion
 * @property int $categoria
 *
 * @property Categorias $categoria0
 */
class Productos extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'productos';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre', 'descripcion', 'categoria'], 'required'],
            [['valor', 'categoria'], 'default', 'value' => null],
            [['valor', 'categoria'], 'integer'],
            [['nombre', 'descripcion'], 'string', 'max' => 80],
            [['categoria'], 'exist', 'skipOnError' => true, 'targetClass' => Categorias::className(), 'targetAttribute' => ['categoria' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'Código (ID)',
            'nombre' => 'Nombre',
            'valor' => 'Valor',
            'descripcion' => 'Descripción',
            'categoria' => 'Categoría',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategoria0()
    {
        return $this->hasOne(Categorias::className(), ['id' => 'categoria']);
    }
    
}
