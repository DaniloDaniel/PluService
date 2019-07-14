<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use app\models\User;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' => 'Inicio', 'url' => ['/site/index']],
            //['label' => 'Informacion', 'url' => ['/site/about']],
            ['label' => 'Contacto', 'url' => ['/site/contact']],
            ['label' => 'Clientes', 'url' => ['/clientes/index'], 'visible' => !Yii::$app->user->isGuest],
            ['label' => 'Productos', 'url' => ['/productos/index'], 'visible' => !Yii::$app->user->isGuest],
            ['label' => 'Categorías', 'url' => ['/categorias/index'], 'visible' => !Yii::$app->user->isGuest],
            ['label' => 'Proveedores', 'url' => ['/proveedores/index'], 'visible' => !Yii::$app->user->isGuest],
            ['label' => 'Compras-Prov', 'url' => ['/prodproveedor/index'], 'visible' => !Yii::$app->user->isGuest],
            ['label' => 'Ventas', 'url' => ['/ventas/index'], 'visible' => !Yii::$app->user->isGuest],

            Yii::$app->user->isGuest ? (
                ['label' => 'Iniciar Sesion', 'url' => ['/site/login']]
            ) : (
                '<li>'
                . Html::beginForm(['/site/logout'], 'post')
                . Html::submitButton(
                    'Cerrar Sesion (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link logout']
                )
                . Html::endForm()
                . '</li>'
            )
        ],
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; PluService <?= date('Y') ?> - Servicios Gráficos </br>N° Contacto: 99887766 </br>Arica-Chile</p>

        <p class="pull-right"> Elaborado por Heraldo Ubilla Tapia</br> <?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
