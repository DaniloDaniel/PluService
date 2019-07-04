<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Prodproveedor */

$this->title = 'Agregar Registro Producto/Proveedor';
$this->params['breadcrumbs'][] = ['label' => 'Producto-Proveedor', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="prodproveedor-create">

    <h1><?= Html::encode($this->title) ?></h1>
    <br/>
    <h4> Ingrese los datos correspondientes para crear un registro en la base de datos de encargos de productos realizados a un proveedor.</h4>
    <br/>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
