<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\Prodproveedor */
/* @var $form yii\widgets\ActiveForm */

?>

<div class="prodproveedor-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'descripcion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'producto')->dropDownList(ArrayHelper::map(\app\models\Productos::find()->all(), 'id', 'nombre'), ['prompt' => 'Seleccione Uno' ]) ?>

    <?= $form->field($model, 'proveedor')->dropDownList(ArrayHelper::map(\app\models\Proveedores::find()->all(), 'id', 'nombre'), ['prompt' => 'Seleccione Uno' ]) ?>


    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
