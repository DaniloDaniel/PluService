<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Prodproveedor */
$this->title = 'Código registro: 00'.$model->pprov_id. ' - '.'Producto: N° 00'.$model->producto.' - '.'Proveedor: N° 00'. $model->proveedor;
$this->params['breadcrumbs'][] = ['label' => 'Prodproveedors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="prodproveedor-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Modificar', ['update', 'id' => $model->pprov_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Eliminar', ['delete', 'id' => $model->pprov_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Esta seguro que desea borrar este registro de la base de datos?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'pprov_id',
            'descripcion',
            [
                'attribute' => 'Nombre Producto',
                'value' => $model->producto0->nombre,
            ],
            [
                'attribute' => 'Código Producto',
                'value' => $model->producto0->id,
            ],
            [
                'attribute' => 'Nombre Proveedor',
                'value' => $model->proveedor0->nombre,
            ],
            [
                'attribute' => 'Código Proveedor',
                'value' => $model->proveedor0->id,
            ],
            //'attribute' => 'proveedor0.nombre',
        ],
    ]) ?>

</div>
