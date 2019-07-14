<?php

use yii\helpers\Html;
//use yii\grid\GridView;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ProdproveedorSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Relación Productos/Proveedores';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="prodproveedor-index">

    <h1><?= Html::encode($this->title) ?></h1><br/>
    <p> Registro de encargos/compras de productos realizados un Proveedor inscrito a PluService.</p><br/>
    <p><?= Html::a('Agregar', ['create'], ['class' => 'btn btn-success']) ?></p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

        <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class'=>'kartik\grid\SerialColumn'],
            [
                'class'=>'\kartik\grid\DataColumn',
                'attribute'=>'pprov_id',
                'format'=>'raw',
                'hAlign'=>'center',
                'width'=>'100px',
                
            ],
            [
                'attribute'=>'producto',
                'format'=>'raw',
                'value'=>'producto0.nombre',
                'vAlign'=>'middle',
                'hAlign'=>'center',
                'width'=> '150px',
            ],
            [
                'attribute'=>'proveedor',
                'format'=>'raw',
                'value'=>'proveedor0.nombre',
                'vAlign'=>'middle',
                'hAlign'=>'center',
                'width'=> '150px',
            ],
            [
                'class'=>'\kartik\grid\DataColumn',
                'attribute'=>'descripcion',
                'format'=>'raw',
                'vAlign'=>'middle',
                'width'=> '450px',
            ],
            ['class' => 'yii\grid\ActionColumn'],

        ],
    ]); ?>


</div>
