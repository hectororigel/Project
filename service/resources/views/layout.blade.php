<!Doctype HTML>
<html>
<meta charset="utf-8">
@section('header')
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
    <title>RedCem </title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>


    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/Footer-with-button-logo.css">


</head>
@show

@section('navbar')
<body style="text-align:center;" data-spy="scroll" data-target="#myScrollspy">



<!--<nav class="navbar navbar-default navbar-fixed-top">
  <div class="content">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#myPage">RedCem</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li class="links"><a href="#about">Nosotros</a></li>
        <li class="links"><a href="#services">Servicios</a></li>
        <li class="links"><a href="#portfolio">Blog</a></li>
        <li class="links"><a href="#pricing">Redes Sociales</a></li>
        <li class="links"><a href="#contact">Contacto</a></li>
      </ul>
    </div>
  </div>
</nav> -->

<nav class="navbar navbar-default-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="/">RedCem</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href='/'>Home</a></li>
                <li><a href='/contacto'>Contacto</a></li>
                <li><a href='/servicios'>Servicios</a></li>
                <button class="btn btn-warning navbar-btn" data-target="#section4">Envianos un Emali</button>
            </ul>
        </div>

    </div>
</nav>
@show



<!--Icon Bar-->





<!--****************************************************************************************************************************************************-->

<!--Carrousell-->
@section('carousell')

<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">

    <div class="carousel-inner">
        <div class="item active">
            <div class="carousel-caption d-none d-md-block">
                <h1>RedCem</h1>
                <p>Marketing Digital</p>
            </div>
            <img class="d-block w-200" src="https://www.fakenhamgardencentre.co.uk/wp-content/uploads/2018/08/Opening-Hours-Banner-Slide-1520x320.jpg" alt="First slide">
        </div>
        <div class="item">
            <div class="carousel-caption d-none d-md-block">
                <h1>RedCem</h1>
                <p>Marketing Digital</p>
            </div>
            <img class="d-block w-200" src="https://www.fakenhamgardencentre.co.uk/wp-content/uploads/2018/05/about-1520x320.png" alt="Second slide">
        </div>
        <div class="item">
            <div class="carousel-caption d-none d-md-block">
                <h1>RedCem</h1>
                <p>Marketing Digital</p>
            </div>
            <img class="d-block w-200" src="https://www.fakenhamgardencentre.co.uk/wp-content/uploads/2018/12/crocus-land579066256-1520x320.jpg" alt="Third slide">
        </div>
    </div>
</div>
@show


<!--******************************************************************ScrollSpy Line ******************************************************************************************-->


@section('footer')
<footer class="text-center footer-style">

    <div class="container">
        <div class="row">
            <div class="col-md-4 footer-col">
                <h3>Dirección</h3>
                <p>
                    Villas San Marcos, Avenida San Marcos <br>
                    #239 Mz19 Lt1 Fraccionamiento, 43845 Hgo.

                </p>
            </div>
            <div class="col-md-4 footer-col">
                <h3>Mis redes</h3>
                <ul class="list-inline">
                    <li>
                        <a  target="_blank" href="https://www.facebook.com/redcemmx/" class="btn-social btn-outline"><i class="fa fa-fw fa-facebook"></i></a>
                    </li>
                    <li>
                        <a  target="_blank" href="https://wa.me/5215578071829" class="btn-social btn-outline"><i class="fa fa-fw fa-whatsapp"></i></a>
                    </li>
                    <li>
                        <a  target="_blank" href="https://www.redcem.org/#.XQEljS_ORSo.twitter" class="btn-social btn-outline"><i class="fa fa-fw fa-twitter"></i></a>
                    </li>
                    <li>
                        <a  target="_blank" href="https://mx.linkedin.com/company/redcemmx" class="btn-social btn-outline"><i class="fa fa-fw fa-linkedin"></i></a>
                    </li>
                    <li>
                        <a  target="_blank" href="https://in.pinterest.com/redcemmx/" class="btn-social btn-outline"><i class="fa fa-fw fa-pinterest"></i></a>
                    </li>
                    <li>
                        <a  target="_blank" href="https://www.youtube.com/channel/UCkHVI60i9_hVP8TgcL6gyOA" class="btn-social btn-outline"><i class="fa fa-fw fa-youtube"></i></a>
                    </li>
                </ul>
            </div>
            <div class="col-md-4 footer-col">
                <h3>RedCem</h3>
                <p>Lideres En Marketing Digital</p>
            </div>
        </div>
    </div>
</footer>
    @show




</body>
</html>