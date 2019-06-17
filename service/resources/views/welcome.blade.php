@extends('css')
@extends('layout')
@section('carousell')

    @parent

    <nav class="col-sm-3" id="myScrollspy">
        <ul class="nav nav-pills nav-stacked">
            <li class="active"><a href="#section1">Quienes Somos</a></li>
            <li><a href="#section2">Misión & Visión</a></li>
            <li><a href="#section3">Nuestro Personal</a></li>
            <li><a href="#section4">Enviar un E-mail</a></li>
        </ul>
    </nav>



    <div id="section1">
        <div class="section1">
            <p><h1>REDCEM | Agencia de marketing digital</h1></p><br>
            <h4>Somos una agencia mexicana de medios digitales, especializada en estrategias de marketing para redes sociales y contenido web.</h4>
            <h4>Desarrollamos estrategias de marketing personalizadas en redes sociales para colocar tu producto o servicio en el lugar adecuado.</h4>
            <h4>Tenemos experiencia, conocimiento y pasión por lo que hacemos.</h4>
        </div>
    </div>

    <div id="section2">
        <div class="section2">
            <p><h1>Mision & Vision</h1></p><br>
            <h4><p>
                    Creemos en el bienestar de las personas y en mejorar la calidad de vida de ellas mediante el desarrollo integral del ser humano.<br>

                    Creemos que el crecimiento de las empresas y negocios es clave para lograr este bienestar con la creación de empleos,<br>
                    la promoción constante de crecimiento humano y la oferta de productos y servicios de alta calidad. <br>

                    Diseñamos las mejores estrategias de marketing digital para lograr este cometido.<br>

                    Pensamos diferente, innovamos diferente.</p></h4>
        </div>

        <div id="section3">
            <div class="section3">
                <div class="col-sm-4">
                    <a href="#" data-toggle="tooltip" title="Click">
                        <h3>Servicios</h3>
                        <p><a href="https://www.redcem.org/webinar"><a href="#" data-toggle="tooltip" title="Click Para Ir"><kbd>Webinar</kbd></a></p>
                </div></a>
                <script>
                    $(document).ready(function(){
                        $('[data-toggle="tooltip"]').tooltip();
                    });
                </script>

                <div class="col-sm-4">
                    <h3>Contacto</h3>
                    <p><a href="https://wa.me/5215578071829"><a href="#" data-toggle="tooltip" title="Click Para Enviar un Mail"><kbd>Whatsapp</kbd><a/></p>
                </div></a>

                <div class="col-sm-4">
                    <h3>Blog</h3>
                    <p><a href="https://www.facebook.com/redcemmx/"><a href="#" data-toggle="tooltip" title="Click Para Ir a Facebook"><kbd>Facebook</kbd></a></p>
                </div></a>

                <div class="container" class="container-fluid bg-2 text-center">
                    <h2>En RedCem nos preocupamos por tu negocio</h2>
                    <p>Contacta a cualquiera de nuestros representantes</p>
                    <table class="table table-condensed">
                        <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Email</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Erik</td>
                            <td>Nava</td>
                            <td>eriknava@redcem.com</td>
                        </tr>
                        <tr>
                            <td>Hector</td>
                            <td>Origel</td>
                            <td>hector.origel@redcem.com</td>
                        </tr>
                        <tr>
                            <td>Erik</td>
                            <td>Origel</td>
                            <td>erik.origel@redcem.com</td>
                        </tr>
                        </tbody>
                    </table>
                    <!--<a href="#" class="btn btn-default btn-lg">
                    <span class="glyphicon glyphicon-search"></span> Search
                  </a> -->
                </div>
            </div>

            <br>


            <h2>Comunicate con nosotros</h2>

            <div class="row">

                <div class="well well-sm">
                    <div id="section4">
                        <form class="form-horizontal" method="post">

                            <fieldset>

                                <legend class="text-center header">Envianos tu información</legend>

                                <div class="form-group">
                                    <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                                    <div class="col-md-8">
                                        <input id="fname" name="name" type="text" placeholder="Nombres" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                                    <div class="col-md-8">
                                        <input id="lname" name="name" type="text" placeholder="Apellidos" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-envelope-o bigicon"></i></span>
                                    <div class="col-md-8">
                                        <input id="email" name="email" type="text" placeholder="Email" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-phone-square bigicon"></i></span>
                                    <div class="col-md-8">
                                        <input id="phone" name="phone" type="text" placeholder="Número de telefono" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-pencil-square-o bigicon"></i></span>
                                    <div class="col-md-8">
                                        <textarea class="form-control" id="message" name="message" placeholder="Escribe tu mensaje, te responderemos lo mas pronto posible" rows="7"></textarea>
                                    </div>
                                </div>

                                <!-- <div class="form-group">
                                     <div class="col-md-12 text-center">
                                         <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                                         <!-- Trigger the modal with a button -->
                                <a href="#" data-toggle="tooltip" title="Enviar Mensaje">
                                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Enviar</button><a/>

                                    <!-- Modal -->
                                    <div id="myModal" class="modal fade" role="dialog">
                                        <div class="modal-dialog">

                                            <!-- Modal content-->
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="submit" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Tu mensaje ha sido enviado con exito</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Nos comunicaremos con tigo lo más pronto posible</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                    </div>
                </div>
                </fieldset>
                </form>
            </div>
        </div>

    </div>




    <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
        <!-- Indicators -->
        <ul class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class=""></li>
            <li data-target="#myCarousel" data-slide-to="1" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="2" class=""></li>
        </ul>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item">
                <h4>Comunicate con nosotros a nuestro Whatsapp<br>(775)-190-1995<span></span></h4>
            </div>
            <div class="item active">
                <h4>Siguenos en las redes sociales<br><span>www.facebook/Redcem.com</span></h4>
            </div>
            <div class="item">
                <h4>Llamanos al<br><span>(775)-190-1995</span></h4>
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    </div>

@stop





@section('footer')
    @parent
    @stop

