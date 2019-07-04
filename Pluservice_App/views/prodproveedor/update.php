<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Prodproveedor */

$this->title = 'Update Prodproveedor: ' . $model->pprov_id;
$this->params['breadcrumbs'][] = ['label' => 'Prodproveedors', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->pprov_id, 'url' => ['view', 'id' => $model->pprov_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="prodproveedor-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
