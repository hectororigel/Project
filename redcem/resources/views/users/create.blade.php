<!DOCTYPE html>
<html lang="en">
<head>
    <title>Redcem - Servicios</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://www.redcem.org/css/all.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>

    <!--*************Style Begins***********-->
    <style>

       body{
           background-color:#f8f9fa;
       }

        .title-style {
            color:#7f7f7f;
            font-Family: trebuchet MS, lucida sans;
            font-size:35px;
        }

       img {


       }


       .well {
           background-color:#f8f9fa;
       }


        .carousel-inner>.item {
            -webkit-transition: -webkit-transform 1.2s ease-in-out !important;
            -o-transition: -o-transform .3s ease-in-out !important;
            transition: transform .3s ease-in-out !important;
        }

        div.paquete *
        {
            text-align: left;
            color:#222;
            font-Family: Questrial,sans-serif;
            font-size:15px;
            margin:auto;

        }


        .btn-danger
        {
            background-color: #e3342f;

        }



        /*.carousel{
            background-color:none}
*/
        div.services *
        {

            color:#7f7f7f;
            font-weight:bold;
            font-Family: trebuchet MS, lucida sans;
            font-size:30px;
        }

        div.list *

        {

            color:#222;
            font-Family: Questrial,sans-serif;
            font-size:15px;
            font-weight:bold;

        }

       .rectangle-list a{
           position: relative;
           display: block;
           padding: .4em .4em .4em .8em;
           *padding: .4em;
           margin: .2em 0 .2em 1.5em;
           background: #DCDCDC;
           color: #444;
           text-decoration: none;
           transition: all .3s ease-out;
       }

       .rectangle-list a:hover{
           background: #A9A9A9;
           /*background: #eee;*/
       }

       .rectangle-list a:before{
           content: counter(li);
           counter-increment: li;
           position: absolute;
           left: -2.5em;
           top: 50%;
           margin-top: -1em;
           background: #e3342f;
           height: 2em;
           width: 2em;
           line-height: 2em;
           text-align: center;
           font-weight: bold;
       }


       .rectangle-list a:hover:after{
           left: -.5em;
           border-left-color: #e3342f;
       }

       .carousel-indicators .active {
           background-color: transparent;
       }

       ol {
           counter-reset: li; /* Initiate a counter */
       }


    </style>

    <!--*************Script Begins************-->
<script language="javascript">
    $( "#myCarousel" ).find( ".item" ).css( "-webkit-transition", "transform 1.0s ease-in-out 0s" ).css( "transition", "transform 1.0s ease-in-out 0s" )

</script>

</head>


<body>

<div class="container ">

    <div id="myCarousel" class="carousel slide text-center" data-ride="">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <a href="" data-target="#myCarousel" data-slide-to="0" class="active"></a>
            <a href="" data-target="#myCarousel" data-slide-to="1"></a>
            <a href="" data-target="#myCarousel" data-slide-to="2"></a>
            <a href="" data-target="#myCarousel" data-slide-to="3"></a>
            <a href="" data-target="#myCarousel" data-slide-to="4"></a>
            <a href="" data-target="#myCarousel" data-slide-to="5"></a>
            <a href="" data-target="#myCarousel" data-slide-to="7"></a>
            <a href="" data-target="#myCarousel" data-slide-to="8"></a>
            <a href="" data-target="#myCarousel" data-slide-to="9"></a>
            <a href="" data-target="#myCarousel" data-slide-to="10"></a>
            <a href="#section11" data-target="#myCarousel" data-slide-to="11"></a>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox" id="click">

            <div class="item active ">



                <div class="services" align="center">
                    <h3 class="title">Servicios</h3>
                </div>


                    <div class="list well well-sm">

                        <div class="container text-center">
                            <ol>
                            <ul class="list-group rectangle-list">

                                <li class="list"><a href="#section1" data-target="#myCarousel" data-slide-to="1">Vender un producto/servicio </a></li>
                                <li class="list"><a href="#section2" data-target="#myCarousel" data-slide-to="2" >Realizar ventas por internet</a></li>
                                <li class="list"><a href="#section3" data-target="#myCarousel" data-slide-to="3">Incrementar likes/seguidores</a></li>
                                <li class="list"><a href="#section4" data-target="#myCarousel" data-slide-to="4">Dar a conocer tu marca</a></li>
                                <li class="list"><a href="#section5" data-target="#myCarousel" data-slide-to="5">Incrementar/agendar citas</a></li>
                                <li class="list"><a href="#section6" data-target="#myCarousel" data-slide-to="6">Visitas a mi local/negocio</a></li>
                                <li class="list"><a href="#section7" data-target="#myCarousel" data-slide-to="7">Visitas a mi sitio web</a></li>
                                <li class="list"><a href="#section8" data-target="#myCarousel" data-slide-to="8">Promoción de eventos sociales</a></li>
                                <li class="list"><a href="#section9" data-target="#myCarousel" data-slide-to="9">Suscripción a una página/evento</a></li>
                                <li class="list"><a href="#section10" data-target="#myCarousel" data-slide-to="10">Encuestas de satisfacción y fidelización.</a></li></li>
                            </ul>
<!--Div-->                  </ol>
                        </div>

                    </div>
            </div>




<!--****************************************Begin the services*********************************************-->








            <div class="item" id="section1" >
                <h3 class="title-style">Vender un producto/servicio</h3>
                    <div class="d-flex flex-column justify-content-around p-0 mx-2 mb-0">
                    <div class="row p-0 m-auto bg-transparent ">
                    <div class="d-flex flex-column well well-sm">
                    <div class="card d-flex flex-xl-row-reverse">
                        <img src="https://www.redcem.org/images/paquete-foto-mini.jpg" class="embed-responsive-item rounded" alt="">
                        <div class="paquete">
                        <div class="card-body">
                            <h5 class="card-title"><strong>Sesiones fotográficas publicitarias</strong></h5>
                            <p class="card-text">
                            <p align="center">
                                • Análisis de negocio<br>
                                • Creación de contenido (4 por mes)<br>
                                • 1 post semanal<br>
                                • Análisis semanal de resultados<br>
                                • Sesión semanal de recomendaciones (coaching de negocio).<br>
                                • Publicidad de paga ($ 500 mxn)<br>
                                • Hasta 2 redes sociales<br>
                                • Creación/revisión de fan page o perfil 4 hrs.<br>

                            </p>
                            <div class="col-lg-12 text-center">
                                <button class="btn btn-danger btn-lg" data-target="#myCarousel" data-slide-to="0" >Regresar al menú</button>
                                <button @click="button = 'vender_producto'" class="btn btn-danger btn-lg" data-target="#myCarousel" data-slide-to="11">Enviar Información</button>
                            </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

                </div>

            </div>


            <div class="item" id="section2">
                <h3 class="title-style">Realizar ventas por internet</h3>
                <div class="d-flex flex-column justify-content-around p-0 mx-2 mb-0">
                    <div class="row p-0 m-auto bg-transparent">
                        <div class="d-flex flex-column well well-sm">
                            <div class="card d-flex flex-xl-row-reverse">
                                <img src="https://www.redcem.org/images/paquete-foto-mini.jpg" class="embed-responsive-item rounded" alt="">
                                <div class="paquete">
                                    <div class="card-body">
                                        <h5 class="card-title"><strong>Sesiones fotográficas publicitarias</strong></h5>
                                        <p class="card-text">
                                        <p align="center">
                                            • Análisis de negocio<br>
                                            • Creación de contenido (4 por mes)<br>
                                            • 1 post semanal<br>
                                            • Análisis semanal de resultados<br>
                                            • Sesión semanal de recomendaciones (coaching de negocio)<br>
                                            • Publicidad de paga ($ 500 mxn)<br>
                                            • Hasta 2 redes sociales<br>
                                            • Creación/revisión de fan page o perfil<br>
                                            • Carrito de compras en línea (hosting, dominio, mantenimiento)<br>
                                            • Cuenta de correo personalizada<br>
                                            • Minimo 3 meses<br>
                                        </p>
                                        <div class="col-lg-12 text-center" >
                                        <button class="btn btn-danger btn-lg" data-target="#myCarousel" data-slide-to="0">Regresar al menú</button>
                                        <button @click="button ='ventas_internet'" class="btn btn-danger btn-lg" data-target="#myCarousel" data-slide-to="11">Enviar Información</button>
                                        </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="item" id="section3">

                <h3 class="title-style">Incrementar likes/seguidores</h3>

                <div class="d-flex flex-column justify-content-around p-0 mx-2 mb-0">
                    <div class="row p-0 m-auto bg-transparent">
                        <div class="d-flex flex-column well well-sm">
                            <div class="card d-flex flex-xl-row-reverse">
                                <img src="https://www.redcem.org/images/paquete-foto-mini.jpg" class="embed-responsive-item rounded" alt="">
                                <div class="paquete">
                                    <div class="card-body">
                                        <h5 class="card-title"><strong>Sesiones fotográficas publicitarias</strong></h5>
                                        <p class="card-text">
                                        <p align="auto">
                                            • Análisis de negocio<br>
                                            • Creación de contenido (4 por mes)<br>
                                            • 1 post semanal<br>
                                            • Análisis semanal de resultados<br>
                                            • Sesión semanal de recomendaciones (coaching de negocio)<br>
                                            • Publicidad de paga ($ 500 mxn)<br>
                                            • 1 Artículos mensual<br>
                                            • Creación/revisión de fan page o perfil<br>
                                            • Organización de dinámica<br>

                                        </p>
                                        <div class="col-lg-12 text-center">
                                        <div class="btn btn-danger btn-lg" data-target="#myCarousel" data-slide-to="0" role="button" >Regresar al menú</div>
                                        <button @click="button ='likes_seguidores'" class="btn btn-danger btn-lg" data-target="#myCarousel" data-slide-to="11">Enviar Información</button>
                                        </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="item" id="section4">
                <h2 class="title-style">Dar a conocer tu marca</h2>

                <div class="d-flex flex-column justify-content-around p-0 mx-2 mb-0">
                    <div class="row p-0 m-auto bg-transparent">
                        <div class="d-flex flex-column well well-sm">
                            <div class="card d-flex flex-xl-row-reverse">
                                <img src="https://www.redcem.org/images/paquete-foto-mini.jpg" class="embed-responsive-item rounded" alt="">
                                <div class="paquete">
                                    <div class="card-body">
                                        <h5 class="card-title"><strong>Sesiones fotográficas publicitarias</strong></h5>
                                        <p class="card-text">
                                        <p align="auto">
                                            • Análisis de negocio<br>
                                            • Creación de contenido (4 por mes)<br>
                                            • 1 post semanal<br>
                                            • Análisis semanal de resultados<br>
                                            • Sesión semanal de recomendaciones (coaching de negocio)<br>
                                            • Publicidad de paga ($ 500 mxn) x mes<br>
                                            • 2 Artículos mensuales<br>
                                            • 2 redes sociales<br>
                                            • Creación/revisión de fan page o perfil<br>
                                            • Organización de dinámica<br>
                                            • Creación/revisión de conversiones<br>

                                        </p>
                                        <div class="col-lg-12 text-center">
                                        <div class="btn btn-danger btn-lg" data-target="#myCarousel" data-slide-to="0" role="button">Regresar al menú</div>
                                        <button @click="button ='conocer_marca'" class="btn btn-danger btn-lg" data-target="#myCarousel" data-slide-to="11">Enviar Información</button>
                                        </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="item" id="section5">


                <h3 class="title-style">Incrementar/agendar citas</h3>
                <div class="d-flex flex-column justify-content-around p-0 mx-2 mb-0">
                    <div class="row p-0 m-auto bg-transparent">
                        <div class="d-flex flex-column well well-sm">
                            <div class="card d-flex flex-xl-row-reverse">
                                <img src="https://www.redcem.org/images/paquete-foto-mini.jpg" class="embed-responsive-item rounded" alt="">
                                <div class="paquete">
                                    <div class="card-body">
                                        <h5 class="card-title"><strong>Sesiones fotográficas publicitarias</strong></h5>
                                        <p class="card-text">
                                        <p align="auto">
                                            • Análisis de negocio 2 hrs.<br>
                                            • Creación de contenido (4 por mes)<br>
                                            • 1 post semanal<br>
                                            • Análisis semanal de resultados<br>
                                            • Sesión semanal de recomendaciones (coaching de negocio)<br>
                                            • Publicidad de paga ($ 500 mxn)<br>
                                            • Creación/revisión de fan page o perfil<br>
                                            • Automatización de citas (FB o Aplicación Web)<br>
                                            • Control de agenda<br>
                                            • Confirmación de citas (sms, correo)<br>
                                            • Creación de landing page<br>

                                        </p>
                                        <div class="col-lg-12 text-center">
                                        <div class="btn btn-danger btn-lg" data-target="#myCarousel" data-slide-to="0" role="button" >Regresar al menú</div>
                                        <button @click="button ='agendar_citas'" class="btn btn-danger btn-lg" data-target="#myCarousel" data-slide-to="11" value="1">Enviar Información</button>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="item" id="section6">
            <h3 class="title-style">Visitas a mi local/negocio</h3>
                <div class="d-flex flex-column justify-content-around p-0 mx-2 mb-0">
                    <div class="row p-0 m-auto bg-transparent">
                        <div class="d-flex flex-column well well-sm">
                            <div class="card d-flex flex-xl-row-reverse">
                                <img src="https://www.redcem.org/images/paquete-foto-mini.jpg" class="embed-responsive-item rounded" alt="">
                                <div class="paquete">
                                    <div class="card-body">
                                        <h5 class="card-title"><strong>Sesiones fotográficas publicitarias</strong></h5>
                                        <p class="card-text">
                                        <p align="auto">
                                            • Análisis de negocio<br>
                                            • Creación de contenido<br>
                                            • 1 post semanal<br>
                                            • Análisis semanal de resultados<br>
                                            • Sesión semanal de recomendaciones (coaching de negocio)<br>
                                            • Publicidad de paga ($ 500 mxn) x mes<br>
                                            • Hasta 2 redes sociales<br>
                                            • Creación/revisión de fan page o perfil<br>
                                            • Creación de dinámicas (cupon digital)<br>
                                            • Landing page con ubicación de negocio y datos de contacto (Integración de chat)<br>
                                            hosting, dominio, 1 correo personalizado<br>
                                            • Creación/mantemiento de google my business<br>
                                            • Formulario Web<br>

                                        </p>
                                        <div class="col-lg-12 text-center">
                                        <div class="btn btn-danger btn-lg" data-target="#myCarousel" data-slide-to="0" role="button" >Regresar al menú</div>
                                        <button @click="button ='visitas_local'" class="btn btn-danger btn-lg" data-target="#myCarousel" data-slide-to="11" value="1">Enviar Información</button>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="item" id="section7">
                <h3 class="title-style">Visitas a mi sitio web</h3>
                <div class="d-flex flex-column justify-content-around p-0 mx-2 mb-0">
                    <div class="row p-0 m-auto bg-transparent">
                        <div class="d-flex flex-column well well-sm">
                            <div class="card d-flex flex-xl-row-reverse">
                                <img src="https://www.redcem.org/images/paquete-foto-mini.jpg" class="embed-responsive-item rounded" alt="">
                                <div class="paquete">
                                    <div class="card-body">
                                        <h5 class="card-title"><strong>Sesiones fotográficas publicitarias</strong></h5>
                                        <p class="card-text">
                                        <p align="auto">
                                            • Análisis de negocio<br>
                                            • Creación de contenido (4 por mes)<br>
                                            • 1 post semanal<br>
                                            • Análisis semanal de resultados<br>
                                            • Sesión semanal de recomendaciones (coaching de negocio)<br>
                                            • Publicidad de paga ($ 500 mxn) x mes<br>
                                            • Hasta 2 redes sociales<br>
                                            • Integración de google Adwords, pixeles, analytics para medición conversiones<br>
                                            • Análisis SEO de posicionamiento.<br>

                                        </p>
                                        <div class="col-lg-12 text-center">
                                        <div class="btn btn-danger btn-lg" data-target="#myCarousel" data-slide-to="0" role="button" >Regresar al menú</div>
                                        <button @click="button ='visitas_web'" class="btn btn-danger btn-lg" data-target="#myCarousel" data-slide-to="11" value="1">Enviar Información</button>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="item" id="section8">
                <h3 class="title-style">Promoción de eventos sociales</h3>
                <div class="d-flex flex-column justify-content-around p-0 mx-2 mb-0">
                    <div class="row p-0 m-auto bg-transparent">
                        <div class="d-flex flex-column well well-sm">
                            <div class="card d-flex flex-xl-row-reverse">
                                <img src="https://www.redcem.org/images/paquete-foto-mini.jpg" class="embed-responsive-item rounded" alt="">
                                <div class="paquete">
                                    <div class="card-body">
                                        <h5 class="card-title"><strong>Sesiones fotográficas publicitarias</strong></h5>
                                        <p class="card-text">
                                        <p align="auto">
                                            • Creación de contenido (4 por mes)<br>
                                            • 1 post semanal<br>
                                            • Análisis semanal de resultados<br>
                                            • Sesión semanal de recomendaciones (coaching de negocio)<br>
                                            • Publicidad de paga ($ 1000 mxn)<br>
                                            • Hasta 2 redes sociales<br>
                                            • Creación/revisión de fan page o perfil<br>
                                            • Creación de dinámicas previas al evento (hashtags, participación de exponentes, etc)<br>
                                            • Landing page con datos del evento (Integración de chat y WhatsApp)<br>
                                            hosting, dominio, 1 correo personalizado, formulario de registro<br>
                                            • Creación de evento en evenbrite<br>
                                            • Creación de evento en FB<br>
                                            • 1 correo semanal con actualizaciones previas al evento.<br>

                                        </p>
                                        <div class="col-lg-12 text-center">
                                        <div class="btn btn-danger btn-lg" data-target="#myCarousel" data-slide-to="0" role="button" >Regresar al menú</div>
                                        <button @click="button ='promocion_eventos'" class="btn btn-danger btn-lg" data-target="#myCarousel" data-slide-to="11" value="1">Enviar Información</button>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="item" id="section9">
                <h3 class="title-style ">Suscripción a una página/evento</h3>
                <div class="d-flex flex-column justify-content-around p-0 mx-2 mb-0">
                    <div class="row p-0 m-auto bg-transparent">
                        <div class="d-flex flex-column well well-sm">
                            <div class="card d-flex flex-xl-row-reverse">
                                <img src="https://www.redcem.org/images/paquete-foto-mini.jpg" class="embed-responsive-item rounded" alt="">
                                <div class="paquete">
                                    <div class="card-body">
                                        <h5 class="card-title"><strong>Sesiones fotográficas publicitarias</strong></h5>
                                        <p class="card-text">
                                        <p align="auto">
                                            • Creación de contenido<br>
                                            • 1 post semanal<br>
                                            • Análisis semanal de resultados<br>
                                            • Sesión semanal de recomendaciones (coaching de negocio)<br>
                                            • Publicidad de paga ($ 500 mxn)<br>
                                            • Hasta 2 redes sociales<br>
                                            • Creación/revisión de fan page o perfil<br>
                                            • Landing page con datos del evento (Integración de chat y WhatsApp)<br>
                                            hosting, dominio, 1 correo personalizado, formulario de registro<br>
                                            • Confirmación por correo de registro (participante y propietario).<br>

                                        </p>
                                        <div class="col-lg-12 text-center">
                                        <div class="btn btn-danger btn-lg" data-target="#myCarousel" data-slide-to="0" role="button" >Regresar al menú</div>
                                        <button @click="button ='suscripcion_pagina'" class="btn btn-danger btn-lg" data-target="#myCarousel" data-slide-to="11" value="1">Enviar Información</button>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="item" id="section10">
                <h3 class="title-style">Encuestas de satisfacción y fidelización</h3>
                <div class="d-flex flex-column justify-content-around p-0 mx-2 mb-0">
                    <div class="row p-0 m-auto bg-transparent">
                        <div class="d-flex flex-column well well-sm">
                            <div class="card d-flex flex-xl-row-reverse">
                                <img src="https://www.redcem.org/images/paquete-foto-mini.jpg" class="img-responsive rounded mx-auto" alt="">
                                <div class="paquete">
                                    <div class="card-body">
                                        <h5 class="card-title"><strong>Sesiones fotográficas publicitarias</strong></h5>
                                        <p class="card-text">
                                        <p align="auto">
                                            • Creación de encuesta de satisfacción (5 preguntas)<br>
                                            • Medición de NPS<br>
                                            • Notificación automática de respuestas vía Email<br>
                                            • Consulta en línea de resultados.<br>
                                            • Integración de recomendaciones en sitio web.<br>
                                            • Confirmación por correo de registro (participante y propietario).<br>

                                        </p>
                                        <div class="col-lg-12 text-center">
                                        <button class="btn btn-danger btn-lg" data-target="#myCarousel" data-slide-to="0">Regresar al menú</button>
                                        <button @click="button ='encuestas_satisfaccion'" class="btn btn-danger btn-lg" data-target="#myCarousel" data-slide-to="11" value="1">Enviar Información</button>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="item" id="section10">



                <h3 class="title-style">Comunicate con nosotros</h3>



                    <div class="well well-sm">
                        <div id="section11">
                            <form class="form-horizontal"  method="POST" action="/redcem">
                                {{csrf_field()}}


                                <fieldset>

                                    <legend class="text-center header">Envianos tu información</legend>

                                    <div class="form-group">
                                        <span class="col-md-1 col-md-offset-2 text-center"></span>
                                        <div class="col-md-8">
                                            <input  id="name" name="name" type="text" placeholder="Nombres" class="form-control {{ $errors->has('name') ? : '' }}" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <span class="col-md-1 col-md-offset-2 text-center"></span>
                                        <div class="col-md-8">
                                            <input id="lastName" name="lastName" type="text" placeholder="Apellidos" class="form-control {{ $errors->has('lastName') ? : '' }}" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <span class="col-md-1 col-md-offset-2 text-center"></span>
                                        <div class="col-md-8">
                                            <input id="email" name="email" type="text" placeholder="Email" class="form-control {{ $errors->has('email') ? : '' }}" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <span class="col-md-1 col-md-offset-2 text-center"></span>
                                        <div class="col-md-8">
                                            <input id="phoneNumber" name="phoneNumber" type="text" placeholder="Número de Telefono" class="form-control {{ $errors->has('phoneNumber') ? : '' }}" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <span class="col-md-1 col-md-offset-2 text-center"></span>
                                        <div class="col-md-8">
                                            <textarea type="text" class="form-control {{ $errors->has('message') ? : '' }}" id="message" name="message" placeholder="Escribe tu mensaje, te responderemos lo mas pronto posible" rows="7" required></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                    <span class="col-md-1 col-md-offset-2 text-center"></span>
                                    <div class="col-md-8">
                                        <input  id="selection"  type="hidden" v-model="button"  class="form-control" readonly="readonly" name="selection" >
                                    </div>
                                    </div>


                                    <div class="form-group">
                                        <div class="col-md-12 text-center" >
                                            <div class="paquete">
                                            <button type="submit"  class="btn btn-danger btn-lg">Enviar</button>




                                            <div class="btn btn-danger btn-lg" data-target="#myCarousel" data-slide-to="0" role="button" >Regresar al menú</div>



                                        </div>
                                        </div>
                                    </div>
                                </fieldset>
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach($errors->all() as $error)
                                                <li>{{$error}}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                            </form>
                        </div>
                    </div>

                </div>


        </div>

    </div>
</div>

</div>
<script src="https://cdn.jsdelivr.net/npm/vue"></script>
<script>


    var example1 = new Vue({
        el:'#click',
        data:{
            button:''


        },methods:{

        }
    })

</script>

</body>
</html>
