<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Ventas */
/* @var $form yii\widgets\ActiveForm */
//<?= $form->field($model, 'cliente')->textInput()
//<?= $form->field($model, 'producto')->textInput()
?>

<div class="ventas-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'fecha')->textInput() ?>

    <?= $form->field($model, 'cliente')->dropDownList(ArrayHelper::map(\app\models\Clientes::find()->all(), 'id', 'nombre'), ['prompt' => 'Seleccione Uno' ]) ?>

    <?= $form->field($model, 'producto')->dropDownList(ArrayHelper::map(\app\models\Productos::find()->all(), 'id', 'nombre'), ['prompt' => 'Seleccione Uno' ]) ?>
    
    <?= $form->field($model, 'cantidad')->textInput() ?>

    <?= $form->field($model, 'total')->textInput() ?>

    <?= $form->field($model, 'descripcion')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

