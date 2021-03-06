<html>
    <head>
        <style type="text/css">
            #main {border:#fd4b3e 1px solid;border-radius: 5px;}
            .title{color:#fd4b3e;font-weight: bold;}
        </style>
    </head>

    <body>

        <!--[if gte mso 9]>
         <v:rect xmlns:v="urn:schemas-microsoft-com:vml" fill="true" stroke="false" style="width:600px; height:332px;">
           <v:fill type="tile" src="img/sydney.jpg" color="#000" />
           <v:textbox inset="0,0,0,0">
         <![endif]-->



        <table  width="700" align="center" id="main"  border="0" cellspacing="0"cellpadding="20">
            <tr>
                <td>
                    <table width="700" align="center"  border="0" cellspacing="0"cellpadding="0">
                        <tr>
                            <td width='30%' >
                                <img src="{!!asset('img/Logo.png')!!}" width="100">
                            </td> 
                            <td rowspan="2"><h2 class="title">Hola {{$name . " ".$last_name }}, la Orden #{{$consecutive}} te ha sido asociada<br>Cliente {{ucwords($client)}}</h2></td> 
                        </tr>
                        <tr>

                        </tr>

                        <tr>
                            <td><b>Nombres</b></td>
                            <td>{{$name}}</td>
                        </tr>
                        <tr>
                            <td><b>Apellidos</b></td>
                            <td>{{$last_name}}</td>
                        </tr>
                        <tr>
                            <td><b>Documento</b></td>
                            <td>{{$document}}</td>
                        </tr>
                        <tr>
                            <td><b>Departamento</b></td>
                            <td>{{$document}}</td>
                        </tr>
                        <tr>
                            <td><b>Ciudad</b></td>
                            <td>{{$city}}</td>
                        </tr>
                        <tr>
                            <td><b>Celular</b></td>
                            <td>{{$mobil}}</td>
                        </tr>

                        <tr>
                            <td><b>Paquete</b></td>
                            <td>{{$schema}}</td>
                        </tr>
                        <tr>
                            <td><b>Servicios</b></td>
                            <td>
                                <ul>
                                    @foreach($schema_detail as $val)
                                    <li>{{$val->course}}</li>
                                    @endforeach


                                </ul>
                            </td>
                        </tr>

                        <tr>
                            <td><br><br></td>
                        </tr>
                        <tr>
                            <td align='center' colspan="2" class="title">Alhemmar System</td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>


        <!--[if gte mso 9]>
      </v:textbox>
    </v:rect>
    <![endif]-->

    </body>
</html>
