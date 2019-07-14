<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Ventas */

$this->title = $model->id_venta;
$this->title = 'Código registro: 00'.$model->id_venta. ' - ';
$this->title .= 'Venta de '.$model->producto0->nombre.' a '.$model->cliente0->nombre;
        
$this->params['breadcrumbs'][] = ['label' => 'Ventas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="ventas-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Modificar', ['update', 'id' => $model->id_venta], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Eliminar', ['delete', 'id' => $model->id_venta], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Estas seguro/a que deseas borrar este registro de la base de datos?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_venta',
            'fecha',
            [
                'attribute' => 'Nombre Cliente',
                'value' => $model->cliente0->nombre,
            ],
            [
                'attribute' => 'Código Cliente',
                'value' => $model->cliente0->id,
            ],
            [
                'attribute' => 'Nombre Producto',
                'value' => $model->producto0->nombre,
            ],
            [
                'attribute' => 'Código Producto',
                'value' => $model->producto0->id,
            ],
            'cantidad',
            'total',
            'descripcion',
        ],
    ]) ?>

</div>
