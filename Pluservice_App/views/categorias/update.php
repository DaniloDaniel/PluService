<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Categorias */

$this->title = 'Modificar Categorias: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Categorias', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="categorias-update">

    <h1><?= Html::encode($this->title) ?></h1>
    <br/>
    <h4> Ingrese los datos nuevos en los campos que desee modificar.</h4>
    <br/>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
