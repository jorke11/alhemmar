<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Styles -->
        <!--<link href="/css/app.css" rel="stylesheet">-->
        <link rel="shortcut icon" type="image/png" href="{!!asset('img/Logo.png')!!}"/>

        <!-- Styles -->

        {!!Html::script('/vendor/jquery.min.js')!!}
        {!!Html::script('/vendor/jquery-ui.js')!!}

        {!!Html::script('/vendor/DataTables-1.10.13/media/js/jquery.dataTables.min.js')!!}
        {!!Html::script('/vendor/DataTables-1.10.13/extensions/ColReorder/js/dataTables.colReorder.min.js')!!}
        {!!Html::script('/vendor/DataTables-1.10.13/extensions/Buttons/js/dataTables.buttons.min.js')!!}
        {!!Html::script('/vendor/DataTables-1.10.13/jszip.min.js')!!}
        {!!Html::script('/vendor/DataTables-1.10.13/pdfmake.min.js')!!}
        {!!Html::script('/vendor/DataTables-1.10.13/vfs_fonts.js')!!}
        {!!Html::script('/vendor/DataTables-1.10.13/buttons.html5.min.js')!!}

        {!!Html::style('/vendor/DataTables-1.10.13/media/css/jquery.dataTables.css')!!}	

        {!!Html::style('/vendor/DataTables-1.10.13/extensions/Buttons/css/buttons.bootstrap.css')!!}
        {!!Html::style('/vendor/DataTables-1.10.13/extensions/Buttons/css/buttons.dataTables.min.css')!!}

        {!!Html::script('/vendor/DataTables-1.10.13/extensions/Buttons/js/buttons.html5.js')!!}
        {!!Html::script('/vendor/DataTables-1.10.13/extensions/Buttons/js/buttons.colVis.js')!!}
        {!!Html::script('/vendor/DataTables-1.10.13/extensions/Buttons/js/buttons.flash.js')!!}
        {!!Html::script('/vendor/DataTables-1.10.13/extensions/Buttons/js/buttons.print.js')!!}



        <!--<script src="//cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>-->
        <!--<link href='//cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css' rel="stylesheet" />-->

        {!!Html::script('/vendor/toastr/toastr.min.js')!!}
        {!!Html::style('/vendor/toastr/toastr.min.css')!!}

        {!!Html::style('/vendor/datetimepicker/css/jquery.datetimepicker.css')!!}
        {!!Html::script('/vendor/datetimepicker/js/jquery.datetimepicker.full.min.js')!!}


        {!!Html::style('/vendor/bootstrap-3.3.7/dist/css/bootstrap.min.css')!!}
        {!!Html::script('/vendor/bootstrap-3.3.7/dist/js/bootstrap.min.js')!!}

        {!!Html::style('/vendor/font-awesome-4.7.0/css/font-awesome.min.css')!!}


        {!!Html::style('/vendor/select2/css/select2.min.css')!!}
        {!!Html::script('/vendor/select2/js/select2.js')!!}
        {!!Html::style('/css/edited.css')!!}
        {!!Html::style('/css/home.css')!!}
        
        <!-- Scripts -->
        <script>
            window.Laravel = <?php
echo json_encode([
    'csrfToken' => csrf_token(),
]);
?>
        </script>
        <style>
            
        </style>
        <!--<link href="/css/app.css" rel="stylesheet">-->
    </head>
    <!--<body style="background-color: #ef8002;">-->
    <body style="width:100%">
        <div id="app" >
            <nav class="navbar navbar-default navbar-fixed-top menu-white">
                <div class="container">
                    <div class="navbar-header">

                        <!-- Collapsed Hamburger -->
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                            <span class="sr-only">Toggle Navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                        <!-- Branding Image -->
                        <a class="navbar-brand" href="{{ url('/') }}" style="padding-top: 9%">
                            <img id="logo-menu" class="img-responsive" >
                        </a>
                    </div>

                    <div class="collapse navbar-collapse" id="app-navbar-collapse">
                        <!-- Left Side Of Navbar -->
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="/" >Inicio</a></li>
                            <li><a href="{{url("/")}}#who" >Quiénes Somos</a></li>
                            <li><a href="{{url("/")}}#service">Servicio</a></li>
                            <li><a href="{{url("/")}}#cobertura">Cobertura</a></li>
                            <li><a href="{{url("/blog")}}">Blogs y experiencias</a></li>
                            <li><a href="/login">Plataforma Tecnologica</a></li>
                            <li><a href="/contactus">Contactenos</a></li>
                        </ul>

                    </div>
                </div>
            </nav>

            @yield('content')
        </div>

        <!-- Scripts -->
        <!--<script src="/js/app.js"></script>-->
        {!!Html::script('js/Page/page.js')!!}
        {!!Html::script('/vendor/plugins.js')!!}
    </body>
</html>
