
@extends('layout')

<style>
    .footer-style {
    padding-top: 10px;
    background-color: black;
    }
    footer {
    color: white;
    }
    footer h3 {
    margin-bottom: 30px;
    font-weight: 800;
    }
    footer .footer-above {
    padding-top: 10px;
    background-color: #2C3E50;
    }
    footer .footer-col {
    margin-bottom: 10px;
    }
    footer .footer-below {
    padding: 25px 0;
    background-color: #233140;
    }

    body {
    position: relative;
    }
    .affix {
    top:0;
    width: 100%;
    z-index: 9999 !important;
    }

    .navbar {
    margin-bottom: 0;
    background-color: black;
    z-index: 9999;
    border: 0;
    font-size: 12px !important;
    line-height: 1.42857143 !important;
    letter-spacing: 4px;
    border-radius: 0;
    font-family: Montserrat, sans-serif;
    }
    .navbar-nav li a:hover, .navbar-nav li.active a {
    color: #f4511e !important;
    background-color: #fff !important;
    }
    .navbar li a, .navbar .navbar-brand {
    color: #fff !important;
    }

    .affix ~ .container-fluid {
    position: relative;
    top: 50px;
    }

    div.Wrapper *
    {
    color: #F77030;
    font-family: Verdana;

    }

    div.Hector *
    {
    color:White;
    font-family: Verdana;

    }

    div.Erik *
    {
    color:Black;
    font-family: Verdana;

    }

    div.Paco *
    {
    color:white;
    font-family: verdana;

    }

    div.Spunky *
    {
    color:black;
    font-Family: Comic Sans MS;
    }

    div.Flopi *
    {
    color:#4B0082;
    font-Family: Comic Sans MS;
    }

    div.Karina *
    {
    color:#3F90F7;
    font-Family: Comic Sans MS;
    }

    #section1 {padding-top:50px;height:500px;color: #fff; background-color: #FFFFF;}
    #section2 {padding-top:50px;height:500px;color: #fff; background-color: #3F90F7}
    #section3 {padding-top:50px;height:500px;color: #fff; background-color: #ff9800;}
    #section41 {padding-top:10px;height:650px;color: #fff; background-color: #21C9C1;}
</style>


<body data-spy="scroll" data-target=".navbar" data-offset="50">

@section('navbar')
    @stop
<nav class="navbar navbar-inverse" data-spy="affix" data-offset-top="197">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href='/'>RedCem</a>
        </div>
        <div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#section1">Taller de Fotografía</a></li>
                    <li><a href="#section2">Paquete PyME</a></li>
                    <li><a href="#section3">Paquete Emprendedor</a></li>
                    <li><a href="#section41">Creación de Contenido</a></li>

                    <!-- <li><a href="#section42">Administraciond </a></li> -->
                </ul>
                </li>
                </ul>
            </div>
        </div>
    </div>
</nav>

@section('carousell')
    @parent

    <div id="section1" class="container-fluid">
        <div class="Karina">
            <h1><a href="#section1" title="Te recordamos" data-toggle="popover" data-trigger="hover" data-content="Este curso de verano es solo para niños">Taller de Fotografía<span class="badge badge-secondary">Nuevo</span></a>
            </h1>
        </div>
        <script>
            $(document).ready(function(){
                $('[data-toggle="popover"]').popover();
            });
        </script>
        <h2></h2>
        <div class="Wrapper">
            <h3>Modalidad: Presencial
                Duración: 16 hrs. (4 días x 4 hrs.)
                Horarios: Lunes y Miércoles 10:00 - 14:00 hrs.
                Inicia: 22 Julio 2019
                Costo: Pago único de $ 600 mxn</h3><br>
            <h4><p>En este taller aprenderá a sacar el máximo provecho de la cámara de su celular, las aplicaciones de la fotografía y las herramientas que le darán un toque experimental a las imágenes.</p><br>

                <p>Aplicación de los principios básicos de la fotografía en la creación de imágenes que compiten con una cámara profesional, además de uso apropiado de las redes sociales para exponer su trabajo más allá de cualquier frontera.</p><br>

                <p>Este taller está enfocado para cualquier persona que tenga a la mano un celular con cámara.</p></h4>
        </div>
    </div>
    <div id="section2" class="container-fluid">
        <div class="Spunky">
            <h1><a href="#section2" data-toggle="popover" title="Debes Saber" data-trigger="hover" data-content="Nuestra estrategía te da ayuda a saber a que clientes puedes alcanzar">Estrategias de marketing</a>
            </h1>
        </div>
        <div class="Hector">
            <h2>¿Cómo creamos estrategias de marketing digital?</h2><br>
            <h4><p>Cada cliente tiene una necesidad particular al adquirir productos o servicios. Por esta razón, las estrategias de marketing deben crearse con un propósito especifico. </p><br>
                <p>Definimos los canales de redes sociales adecuados al análisis del producto o servicio para la distribución de contenido y lograr una mayor visibilidad y lealtad a la marca por parte de los seguidores en las redes sociales.</p><br>
                <p>Nuestros procedimientos garantizan la correcta ejecución de las estrategias de marketing digital dando prioridad a la atención y satisfacción de los clientes. Con Redcem y tu estrategia de marketing digital darás de que hablar.
                </p>
            </h4>
        </div>
    </div>
    <div id="section3" class="container-fluid">
        <div class="Flopi">
            <h1><a href="#section3" data-toggle="popover" title="Te informamos" data-trigger="hover" data-content="El paquete esta definido, algun servicio extra, tiene costo adicional">Paquete Emprendedor</a>
            </h1>
        </div>
        <div class="Erik">
            <h2>Pagina Web, Hosting y Dominio</h2><br>
            <h3>Incluido</h3><br>
            <h4><li>El hosting de la página por 1 año</li>
                <li>Dominio por 1 año (.com, .biz, .org, .net, .info)</<li>
                <li>1 base de datos</li>
                <li>5 cuentas de email con dominio</li>
                <li>25 Gb de almacenamiento compartido para el hosting</li>
                <li>1 Templete (plantilla básica)</li>
                <li>Incluye unicamente secciones: Inicio, Nosotros, Contacto, Productos/Servicios. (4 secciones en total)</li></h4>
        </div>
    </div>
    <div id="section41" class="container-fluid">
        <div class="Spunky">
            <h1><a href="#section41" data-toggle="popover" data-trigger="hover" title="Recuerda" data-content="Creamos todo timpo de contenido digital, que puede ser usado en redes sociales">Creación de contenido</h1></a>
        </div>
        <br>
        <div class="Paco">
            <h4><p>El objetivo de cualquier marca es crear una relación duradera con las personas y una manera de lograrlo es a través de la producción de contenidos para redes sociales. Hay ciertos características que debes tomar en cuenta cuando creas contenido para Redes sociales. Creemos que los productos y servicios que ofrecen las empresas pueden mejorar la calidad de vida de las personas.</p><br>

                <p>Esto se puede lograr mediante el uso correcto de las redes sociales y la administración adecuada de las campañas de markerting.</p><br>

                <p>Cada plataforma, en las redes sociales, es distinta y para ello es necesario conocer las funcionalidades y capacidades que ofrece, a fin de utilizar sus herramientas para la exposición correcta de los contenidos digitales creados. </p><br>

                <p>La selección adecuada de red social puede ser un gran diferenciador en la promoción del servicio o producto.</p><br>

                <p>En Redcem somos especialistas en redes sociales, conocemos de manera detallada las opciones y funcionalidades que ofrece cada una de las plataformas. Esto nos permite realizar la administración de campañas de publicidad y realizar a nuestros clientes las recomendaciones necesarias para que su contenido cumpla con los requisitos de la plataforma y pueda exponerse correctamente en los horarios con mayor audiencia.</p><br>

                <p>Una vez definida la estrategía de marketing, podemos elegir la audiencia ideal en base a sus preferencias, datos demográficos, intereses y elecciones previas del usuario de la red social.<p/>

                <p>El análisis de resultados e información obtenida desde las plataformas, será medido mediante la definición de KPI’s o mejor conocido como indicadores clave. Utilizamos estas métricas para conocer el rendimiento de los esfuerzos y evolucionar con la necesidades de la estrategia.</p><br>

                <p>Adicionalmente, esa información nos permitirá realizar las recomendaciones para la creación de contenido, periodicidad de publicación y productos/servicios con mayor alcance.</p></h4>

        </div>
    </div>
    <br>
    <br>
    @stop




@section('footer')
    @parent
    @stop
</body>