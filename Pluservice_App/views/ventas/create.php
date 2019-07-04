<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Ventas */

$this->title = 'Ingresar Ventas';
$this->params['breadcrumbs'][] = ['label' => 'Ventas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ventas-create">

    <h1><?= Html::encode($this->title) ?></h1>
    <br/>
    <h4> Ingrese los datos correspondientes para agregar el registro de una venta a la base de datos.</h4>
    <br/>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
