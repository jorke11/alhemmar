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

    .text-services{
        color:white;
        font-weight: bold;
    }

    .carousel-control.left{
        background-image:-webkit-gradient(linear,left top,right top,from(rgba(0,0,0,.0001)),to(rgba(0,0,0,.0001)));
        background-image:linear-gradient(to right,rgba(0,0,0,.0001) 0,rgba(0,0,0,.0001) 100%)
    }
    .carousel-control.right{
        background-image:-webkit-gradient(linear,left top,right top,from(rgba(0,0,0,.0001)),to(rgba(0,0,0,.0001)));
        background-image:linear-gradient(to right,rgba(0,0,0,.0001) 0,rgba(0,0,0,.0001) 100%)
    }
    .carousel-control{
        opacity:.9;
        width:6%
    }
    .carousel-control.left{
        left: -3%;
        bottom: 10%;
    }
    .carousel-control.right{
        right: -3%;
        bottom: 10%;
        width:2%;

    }

    .div-blue{
        background-color: rgba(73,198,216,.9)!important;
        padding-top: 14% !important;
        padding-bottom:  10% !important;
        border-radius: 15px;
    }
    .div-pink{
        background-color: rgba(231,118,172,.9)!important;
        padding-top: 14% !important;
        padding-bottom:  10% !important;
        border-radius: 15px;
    }
    .div-green{
        background-color: rgba(115,207,120,.9)!important;
        padding-top: 14% !important;
        padding-bottom:  10% !important;
        border-radius: 15px;
    }
    .div-brown{
        background-color: rgba(231,122,79,.9)!important;
        padding-top: 14% !important;
        padding-bottom:  10% !important;
        border-radius: 15px;
    }
    .div-purple{
        background-color: rgba(141,133,232,.9)!important;
        padding-top: 14% !important;
        padding-bottom:  10% !important;
        border-radius: 15px;
    }
    .div-skyblue{
        background-color: rgba(126,201,232,.9)!important;
        padding-top: 14% !important;
        padding-bottom:  10% !important;
        border-radius: 15px;
    }
    .div-darkblue{
        background-color: rgba(0,107,159,.9)!important;
        padding-top: 14% !important;
        padding-bottom:  10% !important;
        border-radius: 15px;
    }

    .div-soldier{
        background-color: rgba(60,74,75,1) !important;
        padding-top: 14% !important;
        padding-bottom:  10% !important;
        border-radius: 15px;
        min-height: 180px
    }
    .menu-black{
        background-color:rgba(0,0,0,1) !important;

    }
    .menu-white{
        background-color:rgba(255,255,255,.9) !important;
    }

    .menu-white-word{
        color: #0066cc;
        display: inline;
    }

    .menu-black-word{
        color:white !important;
        font-weight: bold !important;
    }
    .menu-black-active{
        color:black !important;
        background-color:white !important;
    }

    @media screen and (min-width: 800px) {
        #img-main{
            height: 600px;
        }
    }
    @media screen and (max-width: 500px) {
        #img-main{
            height: 150px;
        }
    }
</style>
<div id="space-nav">

</div>
<div class="container-fluid">
    <div style='background-image: url("img/fondo_2.png");background-size: 100%;background-repeat: no-repeat;width: 100%;padding-top: 10px;' id="img-main">
        <div class="row">
            <div class="col-md-12 col-xs-12">
            </div>
        </div>
    </div>
</div>
<div class="container" id="who" style="padding-top: 7%;padding-bottom: 7%">
    <div class="row" style="padding-bottom: 4%">
        <div class="col-lg-4 col-md-4 col-sm-4" style="padding-top: 2%;padding-left: 0;padding-right: 0"><hr style="border:2px solid #ccc"></div>
        <div class="col-lg-4 col-md-4 col-sm-4"><h1 class="text-center" style="color:rgba(138,1,1,1)">Quiénes Somos </h1></div>
        <div class="col-lg-4 col-md-4 col-sm-4" style="padding-top: 2%;padding-left: 0;padding-right: 0"><hr style="border:2px solid #ccc"></div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-6">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <p class="text-center" style="color:#6d6d66">
                                Somos una compañía experta en labores de seguridad y consultoría especializada a nivel nacional, destacándonos en el gremio, 
                                por innovar e incorporar herramientas tecnológicas para el beneficio de nuestros clientes, contando con un equipo de 
                                colaboradores de alto rendimiento.
                            </p>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-3 col-sm-4 col-xs-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title text-center">Misión</h3>
                        </div>
                        <div class="panel-body">
                            <p class="text-justify">
                                Ofrecer un excelente servicio de seguridad y consultoría a nuestros clientes, utilizando las mejores herramientas tecnológicas, 
                                controladas por nuestro equipo experto de colaboradores.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-3 col-sm-4 col-xs-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title text-center">Visión</h3>
                        </div>
                        <div class="panel-body">
                            <p class="text-justify">
                                Alhemmar Security será el mejor aliado estratégico en servicios de seguridad y consultoría, e  inspirando lo más 
                                confiable en la vida cotidiana de sus clientes.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/_5LeorHQ_Es" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>
        </div>
    </div>

</div>

<section style="background-color: rgba(200,200,200,.3);padding: 0;margin: 0 auto;padding-top: 6%" id="service" class="hidden-xs">
    <div class="container-fluid" style="padding-bottom: 5%">
        <div class="row" style="padding-top: 2%">
            <div class="col-lg-12">
                <p class="text-center">

                </p>
            </div>
        </div>
        <div class="row" style="padding-bottom: 3%">
            <div class="col-lg-12">
                <p class="text-center" style="font-size:25px;color: rgba(0,107,159,.9);font-weight: bold">
                    <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                    Servicios
            </div>
        </div>
        <div class="row">
            <div class="col-lg-7">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <div class="row" style="padding-left: 5%">
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                    <div class="panel panel-default div-soldier">
                                        <div class="panel-body">
                                            <p class="text-center text-services" >SEGURIDAD INTEGRAL 
                                                <br>
                                                EN RIESGOS
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                    <div class="panel panel-default div-soldier">
                                        <div class="panel-body ">
                                            <p class="text-center text-services">EXAMENES <br>DE POLIGRAFIA</p>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                    <div class="panel panel-default div-soldier">
                                        <div class="panel-body">
                                            <p class="text-center text-services">
                                                PRUEBAS DE <br>EYE DETECT
                                            </p>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                    <div class="panel panel-default div-soldier">
                                        <div class="panel-body">
                                            <p class="text-center text-services">PRUEBAS DE V.S.A ANALISIS <br>DE STRES DE LA VOZ</p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row" style="padding-left: 5%;padding-bottom: 7%">
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                    <div class="panel panel-default  div-soldier">
                                        <div class="panel-body text-center">
                                            <p class="text-center text-services">ESTUDIOS DE CONFIABILIDAD<br> A PERSONAS</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                    <div class="panel panel-default div-soldier">
                                        <div class="panel-body">
                                            <p class="text-center text-services">PRUEBAS <br>PSICOTECNICAS</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                    <div class="panel panel-default div-soldier">
                                        <div class="panel-body">
                                            <p class="text-center text-services">SELECCIÓN DE <br>PERSONAL ADMINISTRATIVO</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                    <div class="panel panel-default div-soldier">
                                        <div class="panel-body">
                                            <p class="text-center text-services">SELECCIÓN DE PERSONAL PARA SERVICIOS DE NIÑERAS</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="item">
                            <div class="row" style="padding-left: 5%">
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                    <div class="panel panel-default div-soldier">
                                        <div class="panel-body">
                                            <p class="text-center text-services" >SELECCIÓN DE PERSONAL PARA SERVICIOS DOMESTICOS
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                    <div class="panel panel-default div-soldier">
                                        <div class="panel-body ">
                                            <p class="text-center text-services">VISITAS DOMICILIARIAS A PROVEEDORES</p>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                    <div class="panel panel-default div-soldier">
                                        <div class="panel-body">
                                            <p class="text-center text-services">
                                                VALIDACIONES DE <br>IDENTIDAD
                                            </p>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                    <div class="panel panel-default div-soldier">
                                        <div class="panel-body">
                                            <p class="text-center text-services">VERIFICACIONES JUDICIALES</p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row" style="padding-left: 5%;padding-bottom: 7%">
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                    <div class="panel panel-default  div-soldier">
                                        <div class="panel-body text-center">
                                            <p class="text-center text-services">
                                                VERIFICACIONES ACADEMICAS
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                    <div class="panel panel-default div-soldier">
                                        <div class="panel-body">
                                            <p class="text-center text-services">
                                                VERIFICACIONES <br>FINANCIERAS
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                    <div class="panel panel-default div-soldier">
                                        <div class="panel-body">
                                            <p class="text-center text-services">
                                                ANALISIS Y GESTION DE RIESGOS DE DIFERENTES ENTORNOS
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                    <div class="panel panel-default div-soldier">
                                        <div class="panel-body">
                                            <p class="text-center text-services">
                                                ESTUDIOS DE SEGURIDAD A INSTALACIONES
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>




                        <div class="item">
                            <div class="row" style="padding-left: 5%">
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                    <div class="panel panel-default div-soldier">
                                        <div class="panel-body">
                                            <p class="text-center text-services" >
                                                AUDITORIAS A <br>CONTRATOS
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                    <div class="panel panel-default div-soldier">
                                        <div class="panel-body ">
                                            <p class="text-center text-services">
                                                CAPACITACIONES EN SEGURIDAD
                                            </p>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                    <div class="panel panel-default div-soldier">
                                        <div class="panel-body">
                                            <p class="text-center text-services">
                                                INVESTIGACIONES ADMINISTRATIVAS
                                            </p>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                    <div class="panel panel-default div-soldier">
                                        <div class="panel-body">
                                            <p class="text-center text-services">
                                                EVALUACION DE SINIESTROS
                                            </p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row" style="padding-left: 5%;padding-bottom: 7%">
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                    <div class="panel panel-default  div-soldier">
                                        <div class="panel-body text-center">
                                            <p class="text-center text-services">
                                                ASESORIA JURIDICA LABORAL Y PENAL
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                    <div class="panel panel-default div-soldier">
                                        <div class="panel-body">
                                            <p class="text-center text-services">
                                                SEGURIDAD INFORMATICA
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                    <div class="panel panel-default div-soldier">
                                        <div class="panel-body">
                                            <p class="text-center text-services">
                                                SISTEMAS TECNOLOGICOS EN SEGURIDAD
                                            </p>
                                        </div>
                                    </div>
                                </div>

                            </div>
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
            <div class="col-lg-4">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/MsFbe3sNsQo" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                </div>


            </div>
        </div>
    </div>
</section>


<section style="background-color: rgba(200,200,200,.3);padding: 0;margin: 0 auto;padding-top: 6%" id="service" class="hidden-md hidden-lg">
    <div class="container-fluid" style="padding-bottom: 5%">
        <div class="row" style="padding-top: 2%">
            <div class="col-lg-12">
                <p class="text-center">

                </p>
            </div>
        </div>
        <div class="row" style="padding-bottom: 3%">
            <div class="col-lg-12">
                <p class="text-center" style="font-size:25px;color: rgba(0,107,159,.9);font-weight: bold">
                    <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                    Servicios
            </div>
        </div>
        <div class="row">
            <div class="col-lg-7 col-sm-12">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <div class="row" >
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6" >
                                    <div class="panel panel-default div-soldier" >
                                        <div class="panel-body">
                                            <p class="text-center text-services" >SEGURIDAD INTEGRAL 
                                                <br>
                                                EN RIESGOS
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6" >
                                    <div class="panel panel-default div-soldier" >
                                        <div class="panel-body ">
                                            <p class="text-center text-services">EXAMENES <br>DE POLIGRAFIA</p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">

                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                    <div class="panel panel-default div-soldier"  >
                                        <div class="panel-body">
                                            <p class="text-center text-services" >
                                                PRUEBAS DE <br>EYE DETECT
                                            </p>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                    <div class="panel panel-default div-soldier"  >
                                        <div class="panel-body">
                                            <p class="text-center text-services">PRUEBAS DE V.S.A ANALISIS <br>DE STRES DE LA VOZ</p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">

                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                    <div class="panel panel-default  div-soldier">
                                        <div class="panel-body text-center">
                                            <p class="text-center text-services">ESTUDIOS DE CONFIABILIDAD<br> A PERSONAS</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                    <div class="panel panel-default div-soldier">
                                        <div class="panel-body">
                                            <p class="text-center text-services">PRUEBAS <br>PSICOTECNICAS</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                    <div class="panel panel-default div-soldier">
                                        <div class="panel-body">
                                            <p class="text-center text-services">SELECCIÓN DE <br>PERSONAL ADMINISTRATIVO</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                    <div class="panel panel-default div-soldier">
                                        <div class="panel-body">
                                            <p class="text-center text-services">SELECCIÓN DE PERSONAL PARA SERVICIOS DE NIÑERAS</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="row" >
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                    <div class="panel panel-default div-soldier">
                                        <div class="panel-body">
                                            <p class="text-center text-services" >SELECCIÓN DE PERSONAL PARA SERVICIOS DOMESTICOS
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                    <div class="panel panel-default div-soldier">
                                        <div class="panel-body ">
                                            <p class="text-center text-services">VISITAS DOMICILIARIAS A PROVEEDORES</p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                    <div class="panel panel-default div-soldier">
                                        <div class="panel-body">
                                            <p class="text-center text-services">
                                                VALIDACIONES DE <br>IDENTIDAD
                                            </p>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                    <div class="panel panel-default div-soldier">
                                        <div class="panel-body">
                                            <p class="text-center text-services">VERIFICACIONES JUDICIALES</p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">

                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                    <div class="panel panel-default  div-soldier">
                                        <div class="panel-body text-center">
                                            <p class="text-center text-services">
                                                VERIFICACIONES ACADEMICAS
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                    <div class="panel panel-default div-soldier">
                                        <div class="panel-body">
                                            <p class="text-center text-services">
                                                VERIFICACIONES <br>FINANCIERAS
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                    <div class="panel panel-default div-soldier">
                                        <div class="panel-body">
                                            <p class="text-center text-services">
                                                ANALISIS Y GESTION DE RIESGOS DE DIFERENTES ENTORNOS
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                    <div class="panel panel-default div-soldier">
                                        <div class="panel-body">
                                            <p class="text-center text-services">
                                                ESTUDIOS DE SEGURIDAD A INSTALACIONES
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                    <div class="panel panel-default div-soldier">
                                        <div class="panel-body">
                                            <p class="text-center text-services" >
                                                AUDITORIAS A <br>CONTRATOS
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                    <div class="panel panel-default div-soldier">
                                        <div class="panel-body ">
                                            <p class="text-center text-services">
                                                CAPACITACIONES EN SEGURIDAD
                                            </p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                    <div class="panel panel-default div-soldier">
                                        <div class="panel-body">
                                            <p class="text-center text-services">
                                                INVESTIGACIONES ADMINISTRATIVAS
                                            </p>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                    <div class="panel panel-default div-soldier">
                                        <div class="panel-body">
                                            <p class="text-center text-services">
                                                EVALUACION DE SINIESTROS
                                            </p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">

                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                    <div class="panel panel-default  div-soldier">
                                        <div class="panel-body text-center">
                                            <p class="text-center text-services">
                                                ASESORIA JURIDICA LABORAL Y PENAL
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                    <div class="panel panel-default div-soldier">
                                        <div class="panel-body">
                                            <p class="text-center text-services">
                                                SEGURIDAD INFORMATICA
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                    <div class="panel panel-default div-soldier">
                                        <div class="panel-body">
                                            <p class="text-center text-services">
                                                SISTEMAS TECNOLOGICOS EN SEGURIDAD
                                            </p>
                                        </div>
                                    </div>
                                </div>

                            </div>
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
            <div class="col-lg-4">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/MsFbe3sNsQo" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                </div>


            </div>
        </div>
    </div>
</section>


<section id="cobertura">
    <div class="container" style="padding-bottom: 5%">
        <div class="row" style="padding-top:8%;padding-bottom: 1%">
            <div class="col-lg-6 col-lg-offset-3 col-md-6 col-sm-6 col-xs-12"><h1 class="text-center">Cobertura</h1></div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-top: 5%">
                <p class="text-justify">Tenemos cobertura a nivel nacional en el territorio colombiano y municipios principales generando un valor agregado para dar respuesta oportuna a las necesidades generadas por nuestros clientes.<br>
                    Contamos con alianzas estratégicas internacionales en México, Panamá y EEUU, que nos permite desarrollar eficazmente el requerimiento.</p>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 center-block">
                <p class="text-center"> <img src="img/colombia.png" class="img-responsive center-block"></p>
            </div>
        </div>

    </div>
</section>


<footer class="footer" style="background-color: rgba(40,44,47,1);padding-top: 30px;padding-bottom: 20px">
    <div class="container">
        <div class="row" style="padding-bottom: 3%">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <div class="row">
                    <div class="col-lg-12" style="color:white;">
                        <p style="color:white;font-size: 18px;">
                            <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                            Contactenos

                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="color:white;">
                        <p>
                            <span class="glyphicon glyphicon-pushpin" aria-hidden="true"></span>
                            Casa Matriz, Bogotá Colombia
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="color:white;">
                        <p>
                            <span class="glyphicon glyphicon-road" aria-hidden="true"></span>

                            Carrera 19 No 71a - 23 Oficina 9
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="color:white;">
                        <p>
                            <span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
                            Telefono 2356856
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="color:white;">
                        <p>
                            <span class="glyphicon glyphicon-phone" aria-hidden="true"></span>
                            3229490505
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <p style="color:white;font-size: 18px;">Redes Sociales</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="row">
                            <div class="col-lg-3 col-lg-offset-3 col-md-3 col-sm-3 col-xs-4">
                                <a href="https://es-la.facebook.com/ALSECUR/" target="_blank"><img src='img/facebook.png' class="img-responsive"></a>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-4">
                                <img src='img/instagram.png' class="img-responsive">
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-4">
                                <img src='img/twitter.png' class="img-responsive">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <p class="muted" style="color:white;">Copyright © 2017 Alhemmar. All Rights Reserved.</p>
    </div>
</footer>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API = Tawk_API || {}, Tawk_LoadStart = new Date();
    (function () {
        var s1 = document.createElement("script"), s0 = document.getElementsByTagName("script")[0];
        s1.async = true;
        s1.src = 'https://embed.tawk.to/5a336802bbdfe97b137fbab9/default';
        s1.charset = 'UTF-8';
        s1.setAttribute('crossorigin', '*');
        s0.parentNode.insertBefore(s1, s0);
    })();
</script>
<!--End of Tawk.to Script-->
@endsection
