<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Proveedores */

$this->title = 'Crear Proveedores';
$this->params['breadcrumbs'][] = ['label' => 'Proveedores', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="proveedores-create">

    <h1><?= Html::encode($this->title) ?></h1>
    <br/>
    <h4> Ingrese los datos correspondientes para crear/agregar un proveedor a la base de datos.</h4>
    <br/>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
