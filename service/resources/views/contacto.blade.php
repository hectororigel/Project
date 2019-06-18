@extends('layout')

@include('Style.contactocss')





<nav class="navbar navbar-inverse" data-spy="affix" data-offset-top="197">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="btn btn-warning navbar-btn" data-toggle="collapse" data-target="#myNavbar">
                Más Opciones
            </button>
            <a class="navbar-brand" href='/'>RedCem</a>
        </div>
        <div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="https://wa.me/5215578071829">Comunicate por Whatsapp</a></li>
                    <li><a href="https://www.facebook.com/redcemmx/">Contactanos por Facebook</a></li>
                    <li><a href="/servicios">Consulta nuestros servicios</a></li>

                    <!-- <li><a href="#section42">Administraciond </a></li> -->
                </ul>
                </li>
                </ul>
            </div>
        </div>
    </div>
</nav>

@include('header')


<h1 class="text-center">Contactanos Ahora</h1>
<ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" a class="nav-link" href="#home">Teléfonos</a></li>
    <li><a data-toggle="tab"a class="nav-link" href="#menu1">Email</a></li>
    <li><a data-toggle="tab" a class="nav-link"href="#menu2">Dirección</a></li>
</ul>

<div class="tab-content">
    <div id="home" class="tab-pane fade in active">
        <h2>LLamanos a cualquiera de nuestros teléfonos</h2>
        <p>+52 5585266898<br> +52 7714746375</p>
    </div>
    <div id="menu1" class="tab-pane fade">
        <h2>Envianos un E-mail</h2>
        <p>info@redcem.org</p>
    </div>
    <div id="menu2" class="tab-pane fade">
        <h2>Tomate el tiempo de visitarnos</h2>
        <p>Villas San Marcos, Avenida San Marcos #239 Mz19 Lt1 Fraccionamiento, 43845 Hgo.</p>
    </div>
</div>
</div>



<!--Main layout-->
<main class=" m-0 p-0">
    <div class="container-fluid m-0 p-0">

        <!--Google map-->
        <div id="map-container-google-4" class="z-depth-1-half map-container-4" style="height: 500px">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3748.5078670990188!2d-98.78989558493366!3d20.0291593865483!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1a1f88557def5%3A0x6fafad9eab529b1!2sREDCEM+Red+de+Colaboraci%C3%B3n+Emprendedora+SAS!5e0!3m2!1ses-419!2smx!4v1550589551894" frameborder="0"
                    style="border:0" allowfullscreen></iframe>
        </div>

    </div>
</main>


@include('footer')
