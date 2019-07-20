<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Catálogo de Productos';
$this->params['breadcrumbs'][] = $this->title;
?>

<h3><?= $msg ?></h3>

<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>
    </br>
    <h4>Pluservice tiene una variedad de productos y servicios gráficos con diseños personalizados a petición del cliente.</h4>
    </br>

<div class="catalogo-index">

    <div class="body-content">
    
        <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
        <html xmlns="http://www.w3.org/1999/xhtml">
            <head>
                <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
                <title> </title>
                <style type="text/css">

                    body {
                        background: #fff;
                        margin: 0;
                        font-family: arial;
                    }

                    h1 {
                        color: #000000;
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
                        height: 84%;

                        display: flex;
                        justify-content: center;
                        align-items: center;
                    }

                    .imagen a {
                        color: #000;
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
                        width: 600px;
                        height: 100%;
                        max-width: 100%;
                        border: 8px solid #000;
                        box-sizing: border-box;
                    }

                    .cerrar {
                        display: block;
                        background: #000;
                        width: 25px;
                        height: 25px;
                        margin: 15px auto;
                        text-align: center;
                        text-decoration: none;
                        font-size: 25px;
                        color: #fff;
                        padding: 5px;
                        border-radius: 50%;
                        line-height: 25px;
                    }   

                        img
                        {
                            width:auto;
                            //box-shadow:0px 0px 200px #cecece;
                            -moz-transform: scale(1);
                            -moz-transition-duration: 0.6s; 
                            -webkit-transition-duration: 0.6s;
                            -webkit-transform: scale(1);

                            -ms-transform: scale(0.9);
                            -ms-transition-duration: 0.6s; 
                        }
                        img:hover
                        {
                            box-shadow: 20px 20px 20px #dcdcdc;
                           -moz-transform: scale(0.8);
                           -moz-transition-duration: 0.6s;
                           -webkit-transition-duration: 0.6s;
                           -webkit-transform: scale(0.8);

                           -ms-transform: scale(0.8);
                           -ms-transition-duration: 0.6s;
                        }
                    
                </style>
            </head>

    <h3>Afiches y Folletos</h3>

            <ul class="galeria">
                <li><a href="#img1"><img src="galeria/afiche1.jpg"></a></li>
                <li><a href="#img2"><img src="galeria/afiche2.jpg"></a></li>
                <li><a href="#img3"><img src="galeria/afiche3.jpg"></a></li>
                <li><a href="#img4"><img src="galeria/folleto1.jpg"></a></li>
                <li><a href="#img5"><img src="galeria/folleto2.jpg"></a></li>
            </ul>

            <div class="modal" id="img1">
                <h3>Afiche 1</h3>
                <div class="imagen">
                    <a href="#img4">&#60;</a>
                    <a href="#img2"><img src="galeria/afiche1.jpg"></a>
                    <a href="#img2">></a>
                </div>
                <a class="cerrar" href="">X</a>
            </div>

            <div class="modal" id="img2">
                <h3>Afiche 2</h3>
                <div class="imagen">
                    <a href="#img1">&#60;</a>
                    <a href="#img2"><img src="galeria/afiche2.jpg"></a>
                    <a href="#img3">></a>
                </div>
                <a class="cerrar" href="">X</a>
            </div>

            <div class="modal" id="img3">
                <h3>Afiche 3</h3>
                <div class="imagen">
                    <a href="#img2">&#60;</a>
                    <a href="#img3"><img src="galeria/afiche3.jpg"></a>
                    <a href="#img4">></a>
                </div>
                <a class="cerrar" href="">X</a>
            </div>

            <div class="modal" id="img4">
                <h3>Folleto 1</h3>
                <div class="imagen">
                    <a href="#img3">&#60;</a>
                    <a href="#img4"><img src="galeria/folleto1.jpg"></a>
                    <a href="#img5">></a>
                </div>
                <a class="cerrar" href="">X</a>
            </div>
    
            <div class="modal" id="img5">
                <h3>Folleto 2</h3>
                <div class="imagen">
                    <a href="#img4">&#60;</a>
                    <a href="#img5"><img src="galeria/folleto2.jpg"></a>
                    <a href="#img1">></a>
                </div>
                <a class="cerrar" href="">X</a>
            </div>
            
    <h3>Carpetas</h3>

            <ul class="galeria">
                <li><a href="#img6"><img src="galeria/carpeta1.jpg"></a></li>
                <li><a href="#img7"><img src="galeria/carpeta2.jpg"></a></li>
                <li><a href="#img8"><img src="galeria/carpeta3.jpg"></a></li>
                <li><a href="#img9"><img src="galeria/carpeta4.jpg"></a></li>
                <li><a href="#img10"><img src="galeria/carpeta5.jpg"></a></li>
            </ul>

            <div class="modal" id="img6">
                <h3>Carpeta 1</h3>
                <div class="imagen">
                    <a href="#img10">&#60;</a>
                    <a href="#img6"><img src="galeria/carpeta1.jpg"></a>
                    <a href="#img7">></a>
                </div>
                <a class="cerrar" href="">X</a>
            </div>

            <div class="modal" id="img7">
                <h3>Carpeta 2</h3>
                <div class="imagen">
                    <a href="#img6">&#60;</a>
                    <a href="#img7"><img src="galeria/carpeta2.jpg"></a>
                    <a href="#img8">></a>
                </div>
                <a class="cerrar" href="">X</a>
            </div>

            <div class="modal" id="img8">
                <h3>Carpeta 3</h3>
                <div class="imagen">
                    <a href="#img7">&#60;</a>
                    <a href="#img8"><img src="galeria/carpeta3.jpg"></a>
                    <a href="#img9">></a>
                </div>
                <a class="cerrar" href="">X</a>
            </div>

            <div class="modal" id="img9">
                <h3>Carpeta 4</h3>
                <div class="imagen">
                    <a href="#img8">&#60;</a>
                    <a href="#img9"><img src="galeria/carpeta4.jpg"></a>
                    <a href="#img10">></a>
                </div>
                <a class="cerrar" href="">X</a>
            </div>
    
            <div class="modal" id="img10">
                <h3>Carpeta 5</h3>
                <div class="imagen">
                    <a href="#img9">&#60;</a>
                    <a href="#img10"><img src="galeria/carpeta5.jpg"></a>
                    <a href="#img6">></a>
                </div>
                <a class="cerrar" href="">X</a>
            </div>
    
    <h3>Boletines y Catálogos</h3>

            <ul class="galeria">
                <li><a href="#img11"><img src="galeria/boletin1.jpg"></a></li>
                <li><a href="#img12"><img src="galeria/boletin2.jpg"></a></li>
                <li><a href="#img13"><img src="galeria/catalogo1.jpg"></a></li>
                <li><a href="#img14"><img src="galeria/catalogo2.jpg"></a></li>
                <li><a href="#img15"><img src="galeria/catalogo3.jpg"></a></li>
            </ul>

            <div class="modal" id="img11">
                <h3>Boletín 1</h3>
                <div class="imagen">
                    <a href="#img15">&#60;</a>
                    <a href="#img11"><img src="galeria/boletin1.jpg"></a>
                    <a href="#img12">></a>
                </div>
                <a class="cerrar" href="">X</a>
            </div>

            <div class="modal" id="img12">
                <h3>Boletín 2</h3>
                <div class="imagen">
                    <a href="#img11">&#60;</a>
                    <a href="#img12"><img src="galeria/boletin2.jpg"></a>
                    <a href="#img13">></a>
                </div>
                <a class="cerrar" href="">X</a>
            </div>

            <div class="modal" id="img13">
                <h3>Catálogo 1</h3>
                <div class="imagen">
                    <a href="#img12">&#60;</a>
                    <a href="#img13"><img src="galeria/catalogo1.jpg"></a>
                    <a href="#img14">></a>
                </div>
                <a class="cerrar" href="">X</a>
            </div>

            <div class="modal" id="img14">
                <h3>Catálogo 2</h3>
                <div class="imagen">
                    <a href="#img13">&#60;</a>
                    <a href="#img14"><img src="galeria/catalogo2.jpg"></a>
                    <a href="#img15">></a>
                </div>
                <a class="cerrar" href="">X</a>
            </div>
    
            <div class="modal" id="img15">
                <h3>Catálogo 3</h3>
                <div class="imagen">
                    <a href="#img14">&#60;</a>
                    <a href="#img15"><img src="galeria/catalogo3.jpg"></a>
                    <a href="#img11">></a>
                </div>
                <a class="cerrar" href="">X</a>
            </div>
    
        <h3>Cuadernillos y Agendas</h3>

            <ul class="galeria">
                <li><a href="#img16"><img src="galeria/cuadernillo1.jpg"></a></li>
                <li><a href="#img17"><img src="galeria/cuadernillo2.jpg"></a></li>
                <li><a href="#img18"><img src="galeria/cuadernillo3.jpg"></a></li>
                <li><a href="#img19"><img src="galeria/agenda1.jpg"></a></li>
                <li><a href="#img20"><img src="galeria/agenda2.jpg"></a></li>
            </ul>

            <div class="modal" id="img16">
                <h3>Cuadernillo 1</h3>
                <div class="imagen">
                    <a href="#img20">&#60;</a>
                    <a href="#img16"><img src="galeria/cuadernillo1.jpg"></a>
                    <a href="#img17">></a>
                </div>
                <a class="cerrar" href="">X</a>
            </div>

            <div class="modal" id="img17">
                <h3>Cuadernillo 2</h3>
                <div class="imagen">
                    <a href="#img16">&#60;</a>
                    <a href="#img17"><img src="galeria/cuadernillo2.jpg"></a>
                    <a href="#img18">></a>
                </div>
                <a class="cerrar" href="">X</a>
            </div>

            <div class="modal" id="img18">
                <h3>Cuadernillo 3</h3>
                <div class="imagen">
                    <a href="#img17">&#60;</a>
                    <a href="#img18"><img src="galeria/cuadernillo3.jpg"></a>
                    <a href="#img19">></a>
                </div>
                <a class="cerrar" href="">X</a>
            </div>

            <div class="modal" id="img19">
                <h3>Agenda 1</h3>
                <div class="imagen">
                    <a href="#img18">&#60;</a>
                    <a href="#img19"><img src="galeria/agenda1.jpg"></a>
                    <a href="#img20">></a>
                </div>
                <a class="cerrar" href="">X</a>
            </div>
    
            <div class="modal" id="img20">
                <h3>Agenda 2</h3>
                <div class="imagen">
                    <a href="#img19">&#60;</a>
                    <a href="#img20"><img src="galeria/agenda2.jpg"></a>
                    <a href="#img16">></a>
                </div>
                <a class="cerrar" href="">X</a>
            </div>
        
    <h3>Dípticos, Trípticos y Polípticos</h3>

            <ul class="galeria">
                <li><a href="#img21"><img src="galeria/diptico1.jpg"></a></li>
                <li><a href="#img22"><img src="galeria/diptico2.jpg"></a></li>
                <li><a href="#img23"><img src="galeria/triptico1.jpg"></a></li>
                <li><a href="#img24"><img src="galeria/triptico2.jpg"></a></li>
                <li><a href="#img25"><img src="galeria/poliptico1.jpg"></a></li>
            </ul>

            <div class="modal" id="img21">
                <h3>Díptico 1</h3>
                <div class="imagen">
                    <a href="#img25">&#60;</a>
                    <a href="#img21"><img src="galeria/diptico1.jpg"></a>
                    <a href="#img22">></a>
                </div>
                <a class="cerrar" href="">X</a>
            </div>

            <div class="modal" id="img22">
                <h3>Díptico 2</h3>
                <div class="imagen">
                    <a href="#img21">&#60;</a>
                    <a href="#img22"><img src="galeria/diptico2.jpg"></a>
                    <a href="#img23">></a>
                </div>
                <a class="cerrar" href="">X</a>
            </div>

            <div class="modal" id="img23">
                <h3>Tríptico 1</h3>
                <div class="imagen">
                    <a href="#img22">&#60;</a>
                    <a href="#img23"><img src="galeria/triptico1.jpg"></a>
                    <a href="#img24">></a>
                </div>
                <a class="cerrar" href="">X</a>
            </div>

            <div class="modal" id="img24">
                <h3>Tríptico 2</h3>
                <div class="imagen">
                    <a href="#img23">&#60;</a>
                    <a href="#img24"><img src="galeria/triptico2.jpg"></a>
                    <a href="#img25">></a>
                </div>
                <a class="cerrar" href="">X</a>
            </div>
    
            <div class="modal" id="img25">
                <h3>Políptico 1</h3>
                <div class="imagen">
                    <a href="#img24">&#60;</a>
                    <a href="#img25"><img src="galeria/poliptico1.jpg"></a>
                    <a href="#img21">></a>
                </div>
                <a class="cerrar" href="">X</a>
            </div>
    
    <h3>Etiquetas y Adhesivos</h3>

            <ul class="galeria">
                <li><a href="#img26"><img src="galeria/etiqueta1.jpg"></a></li>
                <li><a href="#img27"><img src="galeria/etiqueta2.jpg"></a></li>
                <li><a href="#img28"><img src="galeria/etiqueta3.jpg"></a></li>
                <li><a href="#img29"><img src="galeria/etiqueta4.jpg"></a></li>
                <li><a href="#img30"><img src="galeria/adhesivo1.jpg"></a></li>
            </ul>

            <div class="modal" id="img26">
                <h3>Etiqueta 1</h3>
                <div class="imagen">
                    <a href="#img30">&#60;</a>
                    <a href="#img26"><img src="galeria/etiqueta1.jpg"></a>
                    <a href="#img27">></a>
                </div>
                <a class="cerrar" href="">X</a>
            </div>

            <div class="modal" id="img27">
                <h3>Etiqueta 2</h3>
                <div class="imagen">
                    <a href="#img26">&#60;</a>
                    <a href="#img27"><img src="galeria/etiqueta2.jpg"></a>
                    <a href="#img28">></a>
                </div>
                <a class="cerrar" href="">X</a>
            </div>

            <div class="modal" id="img28">
                <h3>Etiqueta 3</h3>
                <div class="imagen">
                    <a href="#img27">&#60;</a>
                    <a href="#img28"><img src="galeria/etiqueta3.jpg"></a>
                    <a href="#img29">></a>
                </div>
                <a class="cerrar" href="">X</a>
            </div>

            <div class="modal" id="img29">
                <h3>Etiqueta 4</h3>
                <div class="imagen">
                    <a href="#img28">&#60;</a>
                    <a href="#img29"><img src="galeria/etiqueta4.jpg"></a>
                    <a href="#img30">></a>
                </div>
                <a class="cerrar" href="">X</a>
            </div>
    
            <div class="modal" id="img30">
                <h3>Adhesivos</h3>
                <div class="imagen">
                    <a href="#img29">&#60;</a>
                    <a href="#img30"><img src="galeria/adhesivo1.jpg"></a>
                    <a href="#img26">></a>
                </div>
                <a class="cerrar" href="">X</a>
            </div>
    
    <h3>Tarjetas de presentación</h3>

            <ul class="galeria">
                <li><a href="#img31"><img src="galeria/tarjeta1.jpg"></a></li>
                <li><a href="#img32"><img src="galeria/tarjeta2.jpg"></a></li>
                <li><a href="#img33"><img src="galeria/tarjeta3.jpg"></a></li>
                <li><a href="#img34"><img src="galeria/tarjeta4.jpg"></a></li>
                <li><a href="#img35"><img src="galeria/tarjeta5.jpg"></a></li>
            </ul>

            <div class="modal" id="img31">
                <h3>Tarjeta de Presentación 1</h3>
                <div class="imagen">
                    <a href="#img35">&#60;</a>
                    <a href="#img31"><img src="galeria/tarjeta1.jpg"></a>
                    <a href="#img32">></a>
                </div>
                <a class="cerrar" href="">X</a>
            </div>

            <div class="modal" id="img32">
                <h3>Tarjeta de Presentación 2</h3>
                <div class="imagen">
                    <a href="#img31">&#60;</a>
                    <a href="#img32"><img src="galeria/tarjeta2.jpg"></a>
                    <a href="#img33">></a>
                </div>
                <a class="cerrar" href="">X</a>
            </div>

            <div class="modal" id="img33">
                <h3>Tarjeta de Presentación 3</h3>
                <div class="imagen">
                    <a href="#img32">&#60;</a>
                    <a href="#img33"><img src="galeria/tarjeta3.jpg"></a>
                    <a href="#img34">></a>
                </div>
                <a class="cerrar" href="">X</a>
            </div>

            <div class="modal" id="img34">
                <h3>Tarjeta de Presentación 4</h3>
                <div class="imagen">
                    <a href="#img33">&#60;</a>
                    <a href="#img34"><img src="galeria/tarjeta4.jpg"></a>
                    <a href="#img35">></a>
                </div>
                <a class="cerrar" href="">X</a>
            </div>
    
            <div class="modal" id="img35">
                <h3>Tarjeta de Presentación 5</h3>
                <div class="imagen">
                    <a href="#img34">&#60;</a>
                    <a href="#img35"><img src="galeria/tarjeta5.jpg"></a>
                    <a href="#img31">></a>
                </div>
                <a class="cerrar" href="">X</a>
            </div>
    
    <h3>Formularios</h3>

            <ul class="galeria">
                <li><a href="#img36"><img src="galeria/formulario1.jpg"></a></li>
                <li><a href="#img37"><img src="galeria/formulario2.jpg"></a></li>
                <li><a href="#img38"><img src="galeria/formulario3.jpg"></a></li>
                <li><a href="#img39"><img src="galeria/formulario4.jpg"></a></li>
                <li><a href="#img40"><img src="galeria/formulario5.jpg"></a></li>
            </ul>

            <div class="modal" id="img36">
                <h3>Formulario 1</h3>
                <div class="imagen">
                    <a href="#img40">&#60;</a>
                    <a href="#img36"><img src="galeria/formulario1.jpg"></a>
                    <a href="#img37">></a>
                </div>
                <a class="cerrar" href="">X</a>
            </div>

            <div class="modal" id="img37">
                <h3>Formulario 2</h3>
                <div class="imagen">
                    <a href="#img36">&#60;</a>
                    <a href="#img37"><img src="galeria/formulario2.jpg"></a>
                    <a href="#img38">></a>
                </div>
                <a class="cerrar" href="">X</a>
            </div>

            <div class="modal" id="img38">
                <h3>Formulario 3</h3>
                <div class="imagen">
                    <a href="#img37">&#60;</a>
                    <a href="#img38"><img src="galeria/formulario3.jpg"></a>
                    <a href="#img39">></a>
                </div>
                <a class="cerrar" href="">X</a>
            </div>

            <div class="modal" id="img39">
                <h3>Formulario 4</h3>
                <div class="imagen">
                    <a href="#img38">&#60;</a>
                    <a href="#img39"><img src="galeria/formulario4.jpg"></a>
                    <a href="#img40">></a>
                </div>
                <a class="cerrar" href="">X</a>
            </div>
    
            <div class="modal" id="img40">
                <h3>Formulario 5</h3>
                <div class="imagen">
                    <a href="#img39">&#60;</a>
                    <a href="#img40"><img src="galeria/formulario5.jpg"></a>
                    <a href="#img36">></a>
                </div>
                <a class="cerrar" href="">X</a>
            </div>

        </html>
    
    </div>
    
</div>