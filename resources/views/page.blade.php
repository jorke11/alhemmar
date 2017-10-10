@extends('layouts.page')

@section('content')
<style>
    .navbar{
        margin-bottom:0px;
    }
</style>
<div style='background-image: url("img/fondo_main.png");background-size: 100% 100%;background-repeat: no-repeat;width: 100%;height: 600px;' >
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
    <br>
    <div class="row">
        <div class="col-lg-4 col-lg-offset-2">
            <p class="text-center" >
                <img src='img/quienes_somos.png'>
            </p>
        </div>
        <div class="col-lg-4">
            <p class="text-center" >
                <img src='img/quienes_somos.png'>
            </p>
        </div>
    </div>
    <br>
    <br>
    <br>
    <div class="row">
        <div class="col-lg-4 col-lg-offset-2">
            <p class="text-justify" >
                Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de 
                relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) 
                desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. 
                No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual 
                al original. Fue popularizado en los 60s con la creación de las hojas "Letraset", las cuales contenian pasajes de Lorem Ipsum, y 
                más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.
            </p>
        </div>
        <div class="col-lg-4">
            <p class="text-justify" >
                Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar 
                de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería 
                de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien 
                ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s 
                con la creación de las hojas "Letraset", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, 
                como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.
            </p>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>

</div>
<div style='background-image: url("img/servicios_fondo.png");background-size: 100% 100%;background-repeat: no-repeat;width: 100%;height: 650px;' id="service">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h1 class="text-center"><b style="color: white">Servicios</b></h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <p class="text-justify" style="color: white">
                    Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar 
                    de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería 
                    de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien 
                    ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s 
                    con la creación de las hojas "Letraset", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, 
                    como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.
                </p>
            </div>
        </div>
    </div>
</div>

<div class="container" id="contact">
    <br>
    <br>
    <br>
    <br>
    <div class="row">
        <div class="col-lg-4"><h1 class="text-center">Contactenos</h></div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <div class="row">
        <div class="col-lg-4">
            <p class="text-justify" >
                Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de 
                relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) 
                desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. 
                No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual 
                al original. Fue popularizado en los 60s con la creación de las hojas "Letraset", las cuales contenian pasajes de Lorem Ipsum, y 
                más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.
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
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

</div>

@endsection
