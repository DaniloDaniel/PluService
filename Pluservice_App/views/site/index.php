<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\bootstrap\Carousel;

$this -> title = 'PluService Web';
?>
<div class="site-index">
    <html xmlns="http://www.w3.org/1999/xhtml">
        <head>
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
            <style type="text/css">
                body
                {
                    background: #navbar-brand-image;
                }
                footer
                {
                        background: #808080;
                        margin: 0;
                        font-family: arial;
                        font-size: 12;
                }
                img
                {
                    width:auto;
                    box-shadow:0px 0px 200px #cecece;
                    -moz-transform: scale(1);
                    -moz-transition-duration: 0.6s; 
                    -webkit-transition-duration: 0.6s;
                    -webkit-transform: scale(1);

                    -ms-transform: scale(1.5);
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
                .galeria {
                        width: 90%;
                        height: 95%;
                        margin: auto;
                        list-style: none;
                        padding: 20px;
                        box-sizing: border-box;
                        display: flex;
                        flex-wrap: wrap;
                        justify-content: space-around;
                    }
                    .galeria img {
                        width: 220px;
                        height: 170px;
                        max-width: 100%;
                        border: 6px solid #000;
                        box-sizing: border-box;
                    }
                    .galeria li {
                        margin: 7px;
                    }
            </style>
        </head>
    </html>
    
    <div class="container">
        <div class="row clearfix">
            <div class="col-md-12 column">
                <?php echo Carousel::widget(
                    ['items' => [
                        ['content' => '<img src="images/PS/logoPS.jpg"/>',
                        'caption' => '',
                        'options' => ['interval' => '500']
                        ],
                        ['content' => '<img src="images/PS/agendas.jpg"/>',
                        'caption' => '<h2>AGENDAS & CUADERNILLOS.</h2><h4>Diseños variados y personalizados de calidad.</h4>',
                        'options' => ['interval' => '500']
                        ],
                        ['content' => '<img src="images/PS/folletos.jpg"/>',
                        'caption' => '<h2>AFICHES & FOLLETOS.</h2><h4>Diseños variados a color de alta calidad al un buen precio.</h4>',
                        'options' => ['interval' => '500']
                        ],
                        ['content' => '<img src="images/PS/tripticos.jpg"/>',
                        'caption' => '<h2>TRIPTICOS, DIPTICOS & GUIAS.</h2><h4>Diseños novedosos personalizados de calidad.</h4>',
                        'options' => ['interval' => '500']
                        ],
                        ['content' => '<img src="http://pyxpublicidadydiseno.com/wp-content/uploads/2016/06/Tarjeta-de-presentacion-1200x480.jpg"/>',
                        'caption' => '<h2>Tarjetas de Presentación</h2><h4>Diseños novedosos personalizados de calidad.</h4>',
                        'options' => ['interval' => '500']
                        ],
                        ['content' => '<img src="images/PS/etiquetas.jpg"/>',
                        'caption' => '<h2>ETIQUETAS & ADHESIVOS.</h2><h4>Diseños originales a color, tamaños y cantidades a pedido.</h4>',
                        'options' => ['interval' => '500']
                        ],
                    ]
                ]); ?>
            </div>
        </div>
    </div>
    
    <div class="jumbotron">
        <h1>PluService</h1>
        <p class="lead">PluService ofrece servicios gráficos de alta calidad a un buen precio. Contáctanos!</p>
        <p> Puedes visualizar el catálogo de productos y servicios disponibles haciendo click aquí!</p>
        <p><a class="btn btn-primary" href="http://localhost/pluservice/pluservice_app/web/index.php?r=site%2Fregister">Ver catálogo</a></p>
        <div class="galeria">
            <h3>Productos destacados</h3>
            <ul class="galeria">
                <li><a href="#img1"><img src="galeria/afiche.jpg" alt="Afiches"></a></li>
                <li><a href="#img2"><img src="galeria/folletos.png" alt="Folletos"></a></li>
                <li><a href="#img3"><img src="galeria/carpeta.png" alt="Carpetas"></a></li>
                <li><a href="#img4"><img src="galeria/formularios.jpg" alt="Formularios"></a></li>
                <li><a href="#img5"><img src="galeria/agendas.png" alt="Agendas"></a></li>
                <li><a href="#img6"><img src="galeria/catalogo2.jpg" alt="Catálogos"></a></li>
                <li><a href="#img7"><img src="galeria/diptico1.jpg" alt="Dípticos"></a></li>
                <li><a href="#img8"><img src="galeria/tripticos.jpg" alt="Trípticos"></a></li>
                <li><a href="#img9"><img src="galeria/etiquetas.jpg" alt="Etiquetas"></a></li>
            </ul>
        </div>
    </div>

    <div class="body-content">
    
            <div class="col-lg-6">
                <img src="images/PS/conveniomarco.jpg" alt="convenio">
                <h4>Estamos en Convenio Marco</h4>
                
                <p>Pluservice es parte del Convenio Marco, por el cual sus productos y servicios aparecen en una tienda virtual, en la cual proveedores pequeños, 
                   medianos y grandes, pueden vender sus productos y servicios al Estado de manera permanente por un 
                   período establecido. Son más de 100 mil bienes y servicios disponibles a un clic de distancia para los 
                   organismos públicos. En estos pueden ofertar desde las empresas más pequeñas a las más grandes, de todas
                   las regiones del país. 
                </p>
                <p> Los convenios marco son una modalidad de compra que busca generar ahorros en la gestión de manera que aquellos bienes que figuran 
                    en el catálogo ChileCompraExpress, que ya han sido adjudicados en una licitación, no deban ser licitados nuevamente cada vez que un 
                    organismo público lo requiera sino que sean adquiridos fácil y directamente a través del catálogo.
                    Por lo tanto, este tipo de licitación tiene como finalidad agilizar el proceso de compra para algunos productos o servicios 
                    específicos dentro del portal MercadoPublico.cl a través de las tiendas electrónicas. 
                </p>

                <p><a class="btn btn-default" href="https://www.mercadopublico.cl">Búscanos en Mercado Público</a></p>
            </div>
        
            <div class="col-lg-6">
                <img src="images/PS/mercadopublico.jpg" alt="convenio">
                <h4>¿Qúe es el Convenio Marco?</h4>
                
                <p>Los Convenios Marco son una modalidad de compra de bienes y servicios a través de un catálogo electrónico
                   o tienda virtual y constituyen la primera opción de compra de los organismos públicos. Cada convenio marco 
                   se asocia a uno o varios rubros o industrias y se incluye en el catálogo a través de una licitación pública
                   que efectúa la Dirección ChileCompra.
                </p>
                <p>Los proveedores que resultan adjudicados pasan a formar parte del catálogo
                   electrónico ChileCompra Express, pudiendo ofrecer sus productos en esta tienda electrónica. Cada entidad pública
                   debe consultar si el producto o servicio que desea adquirir se encuentra en la tienda, antes de llamar a una licitación
                   pública o privada o efectuar un trato directo.</p>

                <p><a class="btn btn-default" href="https://www.mercadopublico.cl">Búscanos en Mercado Público</a></p>
            </div>
        </div>

    </div>
</div>
