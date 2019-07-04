<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;

//$var = \yii\helpers\ArrayHelper::map(\app\models\Categorias::find()->all(), 'id', 'nombre');

/* @var $this yii\web\View */
/* @var $model app\models\Productos */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="productos-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'valor')->textInput() ?>

    <?= $form->field($model, 'descripcion')->textInput(['maxlength' => true]) ?>
    
    <?= $form->field($model, 'categoria')->dropDownList(ArrayHelper::map(\app\models\Categorias::find()->all(), 'id', 'nombre'), ['prompt' => 'Seleccione Uno' ]) ?>
    

    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
        
    </div>

    <?php ActiveForm::end(); ?>

</div>
