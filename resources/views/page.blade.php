@extends('layouts.page')

@section('content')
<style>
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
<div style='background-image: url("img/fondo_main.png");background-size: 100% 100%;background-repeat: no-repeat;width: 100%;height: 600px;padding-top: 10px;' id="img-main">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            </div>
        </div>
    </div>
</div>
<div class="container" id="who">
    <br>
    <div class="row">
        <div class="col-lg-12"><h1 class="text-center">Quienes Somos</h></div>
    </div>
    <br>
    <div class="row">
        <div class="col-lg-6 col-lg-offset-3">
            <p class="text-center">
                Somos una compañía experta en labores de seguridad y consultoría especializada a nivel nacional, destacándonos en el gremio, 
                por innovar e incorporar herramientas tecnológicas para el beneficio de nuestros clientes, contando con un equipo de 
                colaboradores de alto rendimiento.
            </p>
        </div>
    </div>
    <br>
    <br>
    <br>
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
                    <h3 class="text-center">Mision</h3>
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
                    <h3 class="text-center">Vision</h3>
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
<div style='background-image: url("img/servicios_fondo.png");background-size: 100% 100%;background-repeat: no-repeat;width: 100%;height: 600px;' id="service">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h1 class="text-center"><b style="color: white">Servicios</b></h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <p class="text-justify" style="color: white">
                    Contamos con el mejor equipo de expertos y profesionales que nos permite tener cobertura con los siguientes servicios:
                </p>
            </div>
        </div>
    </div>
</div>

<div class="container" id="contact">
    <div class="row" style="padding-top: 90px;">
        <div class="col-lg-4"><h1 class="text-center">Contactenos</h></div>
    </div>
    <br>
    <br>
    <br>
    <div class="row" style="padding-bottom: 250px;">
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
