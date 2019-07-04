<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\VentasSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ventas-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_venta') ?>

    <?= $form->field($model, 'fecha') ?>

    <?= $form->field($model, 'cliente') ?>

    <?= $form->field($model, 'producto') ?>

    <?= $form->field($model, 'cantidad') ?>

    <?php // echo $form->field($model, 'total') ?>

    <?php // echo $form->field($model, 'descripcion') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
