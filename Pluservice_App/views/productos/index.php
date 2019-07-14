<?php

use yii\helpers\Html;
//use yii\grid\GridView;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ProductosSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Productos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="productos-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <p> Módulo de productos de PluService. </p><br/>
    <p>
        <?= Html::a('Crear Productos', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

        <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class'=>'kartik\grid\SerialColumn'],
            [
                'class'=>'\kartik\grid\DataColumn',
                'attribute'=>'id',
                'format'=>'raw',
                'hAlign'=>'center',
                'width'=>'100px',
                
            ],
            [
                'class'=>'\kartik\grid\DataColumn',
                'attribute'=>'nombre',
                'format'=>'raw',
                'vAlign'=>'middle',
            ],
            [
                'class'=>'\kartik\grid\DataColumn',
                'attribute'=>'valor',
                'format'=>'raw',
                'hAlign'=>'right',
                'width'=>'150px',
            ],
            [
                'class'=>'\kartik\grid\DataColumn',
                'attribute'=>'descripcion',
                'format'=>'raw',
                //'hAlign'=>'center',
                'width'=>'350px',
            ],
            [
                'attribute'=>'categoria',
                'format'=>'raw',
                'value'=>'categoria0.nombre',
                'vAlign'=>'middle',
                'hAlign'=>'center',
                'width'=> '150px',
            ],
            ['class' => 'yii\grid\ActionColumn'],

        ],
    ]); ?>


</div>
