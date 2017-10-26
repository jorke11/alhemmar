@extends('layouts.page')

@section('content')
<style>
    body{
        font-family: "helvetica"
    }
    .navbar{
        margin-bottom:0px;
    }
    #space-nav{
        width: 100%;
        height: 50px;
    }
</style>
<div id="space-nav">

</div>
<div style='background-image: url("img/fondo_2.png");background-size: 100%;background-repeat: no-repeat;width: 100%;height: 600px;padding-top: 10px;' id="img-main">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            </div>
        </div>
    </div>
</div>
<div class="container" id="who" style="padding-top: 5%">
    <br>
    <div class="row">
        <div class="col-lg-12"><h1 class="text-center" style="color:#6d6d6d">Quiénes Somos</h></div>
    </div>
    <br>
    <div class="row">
        <div class="col-lg-6 col-lg-offset-3">
            <p class="text-center" style="color:#6d6d66">
                Somos una compañía experta en labores de seguridad y consultoría especializada a nivel nacional, destacándonos en el gremio, 
                por innovar e incorporar herramientas tecnológicas para el beneficio de nuestros clientes, contando con un equipo de 
                colaboradores de alto rendimiento.
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4 col-lg-offset-2">
            <div class="row">
                <div class="col-lg-12">
                    <p class="text-center" >
                        <img src='img/quienes_somos.png'>
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="text-center">Misión</h3>
                </div>
            </div>

        </div>
        <div class="col-lg-4">
            <div class="row">
                <div class="col-lg-12">
                    <p class="text-center" >
                        <img src='img/quienes_somos.png'>
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="text-center">Visión</h3>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <div class="row">
        <div class="col-lg-4 col-lg-offset-2">
            <p class="text-justify" >
                Ofrecer un excelente servicio de seguridad y consultoría a nuestros clientes, utilizando las mejores herramientas tecnológicas, 
                controladas por nuestro equipo experto de colaboradores.
            </p>
        </div>
        <div class="col-lg-4">
            <p class="text-justify" >
                Alhemmar Security será el mejor aliado estratégico en servicios de seguridad y consultoría, e  inspirando lo más 
                confiable en la vida cotidiana de sus clientes.
            </p>
        </div>
    </div>
    <br>
    <br>
    <br>
</div>

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="img/services_1.png" alt="Servicios">
                    </div>

                    <div class="item">
                        <img src="img/services_1.png" alt="mas Servicios">
                    </div>

                    
                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</div>


<div class="container" id="contact">
    <div class="row" style="padding-top:10%;padding-bottom: 5%">
        <div class="col-lg-4"><h1 class="text-center">Contactenos</h></div>
    </div>
    <div class="row" style="padding-bottom: 10%;">
        <div class="col-lg-4">
            <p class="text-justify" >
            <h4>Casa Matriz </h4>
            <p>Bogotá Colombia</p>
            <p>Conmutador 3229962</p>
            <p>Móviles 3229490505</p>
            </p>
        </div>
        <div class="col-lg-8">
            <div class="row">
                <div class="col-lg-3 col-lg-offset-3">
                    <img src='img/facebook.png'>
                </div>
                <div class="col-lg-3">
                    <img src='img/instagram.png'>
                </div>
                <div class="col-lg-3">
                    <img src='img/twitter.png'>
                </div>
            </div>
        </div>
    </div>

</div>

<footer class="footer" style="background-color: #CCC;padding-top: 30px;padding-bottom: 20px">
    <div class="container">
        <p class="muted">Copyright © 2017 Alhemmar. All Rights Reserved.</p>
    </div>
</footer>


@endsection
