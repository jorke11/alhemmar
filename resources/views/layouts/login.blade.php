<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
        <link rel="shortcut icon" type="image/png" href="{!!asset('Logo.ico')!!}"/>
        <!-- Styles -->
        <!--<link href="/css/app.css" rel="stylesheet">-->


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
        {!!Html::style('/css/login.css')!!}
        <!-- Scripts -->
        <script>
            window.Laravel = <?php
echo json_encode([
    'csrfToken' => csrf_token(),
]);
?>
        </script>
        <!--<link href="/css/app.css" rel="stylesheet">-->
    </head>
    <body style="width: 100%;height: 100%;background: rgba(248,80,50,1);
     background: -moz-linear-gradient(top, rgba(248,80,50,1) 0%, rgba(241,111,92,1) 0%, rgba(246,41,12,1) 51%, rgba(240,47,23,1) 71%, rgba(231,56,39,1) 100%);
     background: -webkit-gradient(left top, left bottom, color-stop(0%, rgba(248,80,50,1)), color-stop(0%, rgba(241,111,92,1)), color-stop(51%, rgba(246,41,12,1)), color-stop(71%, rgba(240,47,23,1)), color-stop(100%, rgba(231,56,39,1)));
     background: -webkit-linear-gradient(top, rgba(248,80,50,1) 0%, rgba(241,111,92,1) 0%, rgba(246,41,12,1) 51%, rgba(240,47,23,1) 71%, rgba(231,56,39,1) 100%);
     background: -o-linear-gradient(top, rgba(248,80,50,1) 0%, rgba(241,111,92,1) 0%, rgba(246,41,12,1) 51%, rgba(240,47,23,1) 71%, rgba(231,56,39,1) 100%);
     background: -ms-linear-gradient(top, rgba(248,80,50,1) 0%, rgba(241,111,92,1) 0%, rgba(246,41,12,1) 51%, rgba(240,47,23,1) 71%, rgba(231,56,39,1) 100%);
     background: linear-gradient(to bottom, rgba(248,80,50,1) 0%, rgba(241,111,92,1) 0%, rgba(246,41,12,1) 51%, rgba(240,47,23,1) 71%, rgba(231,56,39,1) 100%);
     filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f85032', endColorstr='#e73827', GradientType=0 );">
        <div id="app">
            @yield('content')

        </div>
        <!-- Scripts -->
        <!--<script src="/js/app.js"></script>-->
        {!!Html::script('/vendor/plugins.js')!!}
    </body>
</html>
