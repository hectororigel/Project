@yield('css')


<style>
    @yield('add')
    body {
        position: relative;
    }
    ul.nav-pills {
        top: 60px;
        position: fixed;
    }

    #section1 {color: #fff; background-color: white;}
    #section2 {color: #fff; background-color: white;}
    #section3 {color: #fff; background-color: white;}
    #section4 {color: #fff; background-color: black;}
    #section42 {color: #fff; background-color: #009688;}

    @media screen and (max-width: 810px) {
        #section1, #section2, #section3, #section41, #section42  {
            margin-left: 450px;
        }
    }


    div.section1 *
    {
        color:black;
        font-family: Verdana;

    }

    div.section2 *
    {
        color:black;
        font-family: Verdana;

    }

    div.section3 *
    {
        color:black;
        font-family: Verdana;

    }




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

    .panel-heading {
        color: #FF00FF !important;
        background-color: #f4511e !important;
        padding: 25px;
        border-bottom: 1px solid transparent;
        border-top-left-radius: 0px;
        border-top-right-radius: 0px;
        border-bottom-left-radius: 0px;
        border-bottom-right-radius: 0px;
    }

    img{
        display: block;
        margin-left: auto;
        margin-right: auto;

    }

    .form {
        background-color: #1abc9c; /* Green */
        color: #ffffff;
    }
    .content {
        background-color: #474e5d; /* Dark Blue */
        color: #ffffff;
    }
    .container {
        background-color: #ffffff; /* White */
        color: #555555;
    }
    .jumbotron {
        background-size: 1330px 500px;
    }


    .carousel-control.right, .carousel-control.left {
        background-image: none;
        color: #f4511e;
    }
    .carousel-indicators li {
        border-color: #f4511e;
    }
    .carousel-indicators li.active {
        background-color: #f4511e;}

    .carousel-position{
        padding:10px;
    }

</style>