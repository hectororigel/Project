<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>

    <!--*************Style Begins***********-->
    <style>

        .title-style {
            color:black;
            font-Family: trebuchet MS, lucida sans;
            font-size:45px;
        }


        .carousel-inner>.item {
            -webkit-transition: -webkit-transform 1.2s ease-in-out !important;
            -o-transition: -o-transform .3s ease-in-out !important;
            transition: transform .3s ease-in-out !important;
        }

        div.paquete *
        {
            text-align: left;
            color:#444;
            font-Family: trebuchet MS, lucida sans;
            font-size:25px;
            margin:auto;

        }



        /*.carousel{
            background-color:none}
*/
        div.services *
        {

            color:black;

            font-Family: trebuchet MS, lucida sans;
            font-size:40px;
        }

        div.list *

        {

            color:black;
            font-Family: trebuchet MS, lucida sans;
            font-size:25px;
            margin: auto;
        }


        ol {
            counter-reset: li; /* Initiate a counter */
            list-style: none; /* Remove default numbering */
            *list-style: decimal; /* Keep using default numbering for IE6/7 */
            font: 20px 'trebuchet MS', 'lucida sans';
            padding: 0;
            margin-bottom: 4em;
            text-shadow: 0 1px 0 rgba(255,255,255,.5);
        }

        ol ol {
            margin: 0 0 0 2em; /* Add some left margin for inner lists */
        }

        .rounded-list a{
            position: relative;
            display: block;
            padding: .4em .4em .4em 2em;
            *padding: .4em;
            margin: .5em 0;
            background: #ddd;
            color: #444;
            text-decoration: none;
            border-radius: .3em;
            transition: all .3s ease-out;
        }

        .rounded-list a:hover{
            background: #eee;
        }

        .rounded-list a:hover:before{
            transform: rotate(360deg);
        }

        .rounded-list a:before{
            content: counter(li);
            counter-increment: li;
            position: absolute;
            left: -1.3em;
            top: 50%;
            margin-top: -1.3em;
            background: #EF3F3F;
            height: 3em;
            width: 3em;
            line-height: 2em;
            border: .3em solid #fff;
            text-align: center;
            font-weight: bold;
            border-radius: 2em;
            transition: all .3s ease-out;
        }


    </style>

    <!--*************Script Begins************-->
<script language="javascript">
    $( "#myCarousel" ).find( ".item" ).css( "-webkit-transition", "transform 1.0s ease-in-out 0s" ).css( "transition", "transform 1.0s ease-in-out 0s" )

</script>

</head>


<body>

<div class="container">
<div class="well well-sm">
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

            <div class="item active">


                <div class="services">
                    <h3 class="title">Servicios</h3>
                </div>
                <ul class="rounded-list">
                    <div class="list">
                        <a href="#section1" data-target="#myCarousel" data-slide-to="1">Vender un producto/servicio </a>
                    <a href="#section2" data-target="#myCarousel" data-slide-to="2" >Realizar ventas por internet</a>
                    <a href="#section3" data-target="#myCarousel" data-slide-to="3">Incrementar likes/seguidores</a>
                    <a href="#section4" data-target="#myCarousel" data-slide-to="4">Dar a conocer tu marca</a>
                    <a href="#section5" data-target="#myCarousel" data-slide-to="5">Incrementar/agendar citas</a>
                    <a href="#section6" data-target="#myCarousel" data-slide-to="6">Visitas a mi local/negocio</a>
                    <a href="#section7" data-target="#myCarousel" data-slide-to="7">Visitas a mi sitio web</a>
                    <a href="#section8" data-target="#myCarousel" data-slide-to="8">Promoción de eventos sociales</a>
                    <a href="#section9" data-target="#myCarousel" data-slide-to="9">Suscripción a una página/evento</a>
                    <a href="#section10" data-target="#myCarousel" data-slide-to="10">Encuestas de satisfacción y fidelización.</a>
                    </div>
                </ul>

            </div>

            <div class="item" id="section1">


                <h3 class="title-style">Vender un producto/servicio</h3>
                <div class="paquete text-center"><p>

                        • Análisis de negocio<br>
                        • Creación de contenido (4 por mes)<br>
                        • 1 post semanal<br>
                        • Análisis semanal de resultados<br>
                        • Sesión semanal de recomendaciones (coaching de negocio).<br>
                        • Publicidad de paga ($ 500 mxn)<br>
                        • Hasta 2 redes sociales<br>
                        • Creación/revisión de fan page o perfil 4 hrs.<br>

                    </p></div>
                <div class="btn btn-danger btn-lg" data-target="#myCarousel" data-slide-to="0" role="button" >Regresar al menú</div>
                <button @click="button = 'vender_producto'" class="btn btn-danger btn-lg" data-target="#myCarousel" data-slide-to="11" value="1">Enviar Información</button>

                <!--v-on:click="say('Estrategias Package', $event)"-->

            </div>

            <div class="item" id="section2">


                <h3 class="title-style">Realizar ventas por internet</h3>
                <div class="paquete">
                    <p align="auto">
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
                </div>


                <a class="btn btn-danger btn-lg" data-target="#myCarousel" data-slide-to="0" role="button" >Regresar al menú</a>
                <button @click="button = 'ventas_internet'" class="btn btn-danger btn-lg" data-target="#myCarousel" data-slide-to="11">Enviar Información</button>



            </div>

            <div class="item" id="section3">

                <h3 class="title-style">Incrementar likes/seguidores</h3>

                <div class="paquete">

                    <p>
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
                </div>
                <a class="btn btn-danger btn-lg" data-target="#myCarousel" data-slide-to="0" role="button" >Regresar al menú</a>


                <button @click="button ='incrementar_likes'" class="btn btn-danger btn-lg" data-target="#myCarousel" data-slide-to="11">Enviar Información</button>



            </div>

            <div class="item" id="section4">
                <h2 class="title-style">Dar a conocer tu marca</h2>

                <div class="paquete">
                    <p>

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

                </div>
                <a class="btn btn-danger btn-lg" data-target="#myCarousel" data-slide-to="0" role="button" >Regresar al menú</a>
                <button  @click="button = 'conocer_marca'" class="btn btn-danger btn-lg" data-target="#myCarousel" data-slide-to="11">Enviar Información</button>

            </div>



            <div class="item" id="section5">


                <h3 class="title-style">Incrementar/agendar citas</h3>
                <div class="paquete"><p>

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

                    </p></div>
                <div class="btn btn-danger btn-lg" data-target="#myCarousel" data-slide-to="0" role="button" >Regresar al menú</div>
                <button @click="button ='incrementar_citas'" class="btn btn-danger btn-lg" data-target="#myCarousel" data-slide-to="11" value="">Enviar Información</button>
            </div>

            <div class="item">
            <h3 class="title-style">Visitas a mi local/negocio</h3>
            <div class="paquete" id="section6"><p>

                    • Análisis de negocio<br>
                    • Creación de contenido<br>
                    • 1 post semanal<br>
                    • Análisis semanal de resultados<br>
                    • Sesión semanal de recomendaciones (coaching de negocio)<br>
                    • Publicidad de paga ($ 500 mxn) x mes<br>
                    • Hasta 2 redes sociales<br>
                    • Creación/revisión de fan page o perfil<br>
                    • Creación de dinámicas (cupon digital)<br>
                    • Landing page con ubicación de negocio y datos de contacto (Integración de chat), <br>
                        hosting, dominio, 1 correo personalizado<br>
                    • Creación/mantemiento de google my business<br>
                    • Formulario Web<br>

                </p>
            </div>
            <div class="btn btn-danger btn-lg" data-target="#myCarousel" data-slide-to="0" role="button" >Regresar al menú</div>
            <button @click="button ='visitas_local'" class="btn btn-danger btn-lg" data-target="#myCarousel" data-slide-to="11" value="">Enviar Información</button>
        </div>


            <div class="item">
                <h3 class="title-style">Visitas a mi sitio web</h3>
                <div class="paquete" id="section7"><p>

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
                </div>
                <div class="btn btn-danger btn-lg" data-target="#myCarousel" data-slide-to="0" role="button" >Regresar al menú</div>
                <button @click="button ='Visitas_sitio_web'" class="btn btn-danger btn-lg" data-target="#myCarousel" data-slide-to="11" value="">Enviar Información</button>
            </div>

            <div class="item">
                <h3 class="title-style">Promoción de eventos sociales</h3>
                <div class="paquete" id="section8"><p>

                        • Creación de contenido (4 por mes)<br>
                        • 1 post semanal<br>
                        • Análisis semanal de resultados<br>
                        • Sesión semanal de recomendaciones (coaching de negocio)<br>
                        • Publicidad de paga ($ 1000 mxn)<br>
                        • Hasta 2 redes sociales<br>
                        • Creación/revisión de fan page o perfil<br>
                        • Creación de dinámicas previas al evento (hashtags, participación de exponentes, etc)<br>
                        • Landing page con datos del evento (Integración de chat y WhatsApp),<br>
                          hosting, dominio, 1 correo personalizado, formulario de registro<br>
                        • Creación de evento en evenbrite<br>
                        • Creación de evento en FB<br>
                        • 1 correo semanal con actualizaciones previas al evento.<br>

                    </p>
                </div>
                <div class="btn btn-danger btn-lg" data-target="#myCarousel" data-slide-to="0" role="button" >Regresar al menú</div>
                <button @click="button ='promocion_eventos'" class="btn btn-danger btn-lg" data-target="#myCarousel" data-slide-to="11" value="">Enviar Información</button>
            </div>


            <div class="item">
                <h3 class="title-style">Suscripción a una página/evento</h3>
                <div class="paquete" id="section9"><p>

                        • Creación de contenido<br>
                        • 1 post semanal<br>
                        • Análisis semanal de resultados<br>
                        • Sesión semanal de recomendaciones (coaching de negocio)<br>
                        • Publicidad de paga ($ 500 mxn)<br>
                        •  Hasta 2 redes sociales<br>
                        •  Creación/revisión de fan page o perfil<br>
                        • Landing page con datos del evento (Integración de chat y WhatsApp),<br>
                        hosting, dominio, 1 correo personalizado, formulario de registro<br>
                        •  Confirmación por correo de registro (participante y propietario)<br>


                    </p>
                </div>
                <div class="btn btn-danger btn-lg" data-target="#myCarousel" data-slide-to="0" role="button" >Regresar al menú</div>
                <button @click="button ='suscripcion_pagina'" class="btn btn-danger btn-lg" data-target="#myCarousel" data-slide-to="11" value="">Enviar Información</button>
            </div>


            <div class="item">
                <h3 class="title-style">Encuestas de satisfacción y fidelización</h3>
                <div class="paquete" id="section10"><p>

                        • Creación de encuesta de satisfacción (5 preguntas)<br>
                        • Medición de NPS<br>
                        • Notificación automática de respuestas vía Email<br>
                        • Consulta en línea de resultados.<br>
                        • Integración de recomendaciones en sitio web.<br>
                        • Confirmación por correo de registro (participante y propietario)<br>


                    </p>
                </div>
                <div class="btn btn-danger btn-lg" data-target="#myCarousel" data-slide-to="0" role="button" >Regresar al menú</div>
                <button @click="button ='encuestas_satisfaccion'" class="btn btn-danger btn-lg" data-target="#myCarousel" data-slide-to="11" value="">Enviar Información</button>
            </div>

            <div class="item">

                <h3 class="title-style">Comunicate con nosotros</h3>

                <div class="row">

                    <div class="well well-sm">
                        <div id="section11">
                            <form class="form-horizontal"  method="POST" action="/redcem">
                                {{csrf_field()}}


                                <fieldset>

                                    <legend class="text-center header">Envianos tu información</legend>

                                    <div class="form-group">
                                        <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                                        <div class="col-md-8">
                                            <input  id="name" name="name" type="text" placeholder="Nombres" class="form-control {{ $errors->has('name') ? : '' }}" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                                        <div class="col-md-8">
                                            <input id="lastName" name="lastName" type="text" placeholder="Apellidos" class="form-control {{ $errors->has('lastName') ? : '' }}" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-envelope-o bigicon"></i></span>
                                        <div class="col-md-8">
                                            <input id="email" name="email" type="text" placeholder="Email" class="form-control {{ $errors->has('email') ? : '' }}" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-phone-square bigicon"></i></span>
                                        <div class="col-md-8">
                                            <input id="phoneNumber" name="phoneNumber" type="text" placeholder="Número de Telefono" class="form-control {{ $errors->has('phoneNumber') ? : '' }}" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-pencil-square-o bigicon"></i></span>
                                        <div class="col-md-8">
                                            <textarea type="text" class="form-control {{ $errors->has('message') ? : '' }}" id="message" name="message" placeholder="Escribe tu mensaje, te responderemos lo mas pronto posible" rows="7" required></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                    <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                                    <div class="col-md-8">
                                        <input  id="value"  type="text" v-model="button"  class="form-control" readonly="readonly">
                                    </div>
                                    </div>


                                    <div class="form-group">
                                        <div class="col-md-12 text-center" >
                                            <button type="submit" class="btn btn-danger btn-lg">Enviar</button>




                                            <a class="btn btn-danger btn-lg" data-target="#myCarousel" data-slide-to="0" role="button">Regresar al menú</a>




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



        <!-- Left and right controls -->

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
