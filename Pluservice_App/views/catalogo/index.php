<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Catálogo de Productos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="catalogo-index">

    <div class="body-content">
    
        <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
        <html xmlns="http://www.w3.org/1999/xhtml">
            <head>
                <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
                <title>Creating an Image Gallery From Folder using PHP</title>
                <style type="text/css">

                    body {
                        background: #444;
                        margin: 0;
                        font-family: monospace;
                    }

                    h1 {
                        color: #fff;
                        text-align: center;
                    }

                    /*Estilos de la galeria*/

                    .galeria {
                        width: 90%;
                        margin: auto;
                        list-style: none;
                        padding: 20px;
                        box-sizing: border-box;

                        display: flex;
                        flex-wrap: wrap;
                        justify-content: space-around;
                    }

                    .galeria li {
                        margin: 5px;
                    }

                    .galeria img {
                        width: 150px;
                        height: 100px;
                    }

                    /*Estilos del modal*/

                    .modal {
                        display: none;
                    }

                    .modal:target {

                        display: block;
                        position: fixed;
                        background: rgba(0,0,0,0.8);
                        top: 0;
                        left: 0;
                        width: 100%;
                        height: 100%;
                    }

                    .modal h3 {
                        color: #fff;
                        font-size: 30px;
                        text-align: center;
                        margin: 15px 0;
                    }

                    .imagen {
                        width: 100%;
                        height: 50%;

                        display: flex;
                        justify-content: center;
                        align-items: center;
                    }

                    .imagen a {
                        color: #fff;
                        font-size: 40px;
                        text-decoration: none;
                        margin: 0 10px;
                    }

                    .imagen a:nth-child(2) {
                        margin: 0;
                        height: 100%;
                        flex-shrink: 2;
                    }

                    .imagen img {
                        width: 500px;
                        height: 100%;
                        max-width: 100%;
                        border: 7px solid #fff;
                        box-sizing: border-box;
                    }

                    .cerrar {
                        display: block;
                        background: #fff;
                        width: 25px;
                        height: 25px;
                        margin: 15px auto;
                        text-align: center;
                        text-decoration: none;
                        font-size: 25px;
                        color: #000;
                        padding: 5px;
                        border-radius: 50%;
                        line-height: 25px;
                    }
                </style>
            </head>

            <h1>Galería de imágenes con efecto lightbox solo con CSS</h1>

            <ul class="galeria">
                <li><a href="#img1"><img src="http://www.paisajesimagenes.com/wp-content/uploads/Descripci%C3%B3n-de-paisajes..jpg"></a></li>
                <li><a href="#img2"><img src="http://neo-deco.es/wp-content/uploads/2013/01/Paisaje-de-monta%C3%B1a.jpg"></a></li>
                <li><a href="#img3"><img src="http://www.paisajesimagenes.com/wp-content/uploads/Descripci%C3%B3n-de-paisajes..jpg"></a></li>
                <li><a href="#img4"><img src="http://neo-deco.es/wp-content/uploads/2013/01/Paisaje-de-monta%C3%B1a.jpg"></a></li>
            </ul>

            <div class="modal" id="img1">
                <h3>Paisaje 1</h3>
                <div class="imagen">
                    <a href="#img4">&#60;</a>
                    <a href="#img2"><img src="http://www.paisajesimagenes.com/wp-content/uploads/Descripci%C3%B3n-de-paisajes..jpg"></a>
                    <a href="#img2">></a>
                </div>
                <a class="cerrar" href="">X</a>
            </div>

            <div class="modal" id="img2">
                <h3>Paisaje 2</h3>
                <div class="imagen">
                    <a href="#img1">&#60;</a>
                    <a href="#img3"><img src="http://neo-deco.es/wp-content/uploads/2013/01/Paisaje-de-monta%C3%B1a.jpg"></a>
                    <a href="#img3">></a>
                </div>
                <a class="cerrar" href="">X</a>
            </div>

            <div class="modal" id="img3">
                <h3>Paisaje 3</h3>
                <div class="imagen">
                    <a href="#img2">&#60;</a>
                    <a href="#img4"><img src="http://www.paisajesimagenes.com/wp-content/uploads/Descripci%C3%B3n-de-paisajes..jpg"></a>
                    <a href="#img4">></a>
                </div>
                <a class="cerrar" href="">X</a>
            </div>

            <div class="modal" id="img4">
                <h3>Paisaje 4</h3>
                <div class="imagen">
                    <a href="#img3">&#60;</a>
                    <a href="#img1"><img src="http://neo-deco.es/wp-content/uploads/2013/01/Paisaje-de-monta%C3%B1a.jpg"></a>
                    <a href="#img1">></a>
                </div>
                <a class="cerrar" href="">X</a>
            </div>

        </html>
    
    </div>
    
</div>

