<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Productos */

$this->title = 'Crear Productos';
$this->params['breadcrumbs'][] = ['label' => 'Productos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="productos-create">

    <h1><?= Html::encode($this->title) ?></h1>
    <br/>
    <h4> Ingrese los datos correspondientes para crear/agregar un producto a la base de datos.</h4>
    <br/>
    
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
