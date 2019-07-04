<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ProdproveedorSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="prodproveedor-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'pprov_id') ?>

    <?= $form->field($model, 'descripcion') ?>

    <?= $form->field($model, 'producto') ?>

    <?= $form->field($model, 'proveedor') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
