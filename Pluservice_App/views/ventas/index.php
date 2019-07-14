<?php

use yii\helpers\Html;
//use yii\grid\GridView;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\VentasSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Ventas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ventas-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <p> Módulo de ventas de PluService. </p><br/>
    <p>
        <?= Html::a('Ingresar Ventas', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    
        <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class'=>'kartik\grid\SerialColumn'],
            [
                'class'=>'\kartik\grid\DataColumn',
                'attribute'=>'id_venta',
                'format'=>'raw',
                'vAlign'=>'middle',
                'hAlign'=>'center',
                'width'=>'100px',
            ],
            [
                'attribute'=>'fecha',
                'format'=>'raw',
                'vAlign'=>'middle',
                'hAlign'=>'center',
                'width'=> '150px',
            ],
            [
                'attribute'=>'cliente',
                'format'=>'raw',
                'value'=>'cliente0.nombre',
                'vAlign'=>'middle',
                'hAlign'=>'center',
                'width'=> '250px',
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
                'attribute'=>'cantidad',
                'format'=>'raw',
                'vAlign'=>'middle',
                'hAlign'=>'center',
                'width'=> '150px',
            ],
            [
                'attribute'=>'total',
                'format'=>'raw',
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
