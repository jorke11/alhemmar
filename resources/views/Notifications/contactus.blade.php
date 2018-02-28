<html>

    <style>
        #main {border:#0471b4 1px solid;border-radius: 5px;}
        .title{color:#005b94;font-weight: bold;}
    </style>

    <body>

        <!--[if gte mso 9]>
         <v:rect xmlns:v="urn:schemas-microsoft-com:vml" fill="true" stroke="false" style="width:600px; height:332px;">
           <v:fill type="tile" src="img/sydney.jpg" color="#000" />
           <v:textbox inset="0,0,0,0">
         <![endif]-->

        <table  width="700" align="center" id="main"  border="0" cellspacing="0"cellpadding="0">
            <tr>
                <td>
                    <table width="700" align="center"  border="0" cellspacing="0"cellpadding="0">
                        <tr>
                            <td width='40%' >
                                <img src="{!!asset('img/logo.png')!!}" width="100">
                            </td> 
                            <td rowspan="2"><h2 class="title">Email desde pagina web</h2></td> 
                        </tr>

                        <tr>
                            <td>Nombre</td>
                            <td>{{$name}}</td>
                        </tr>
                        <tr>
                            <td>Apellido</td>
                            <td>{{$last_name}}</td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>{{$email}}</td>
                        </tr>
                        <tr>
                            <td>Celular</td>
                            <td>{{$phone}}</td>
                        </tr>
                        <tr>
                            <td>Asunto</td>
                            <td>{{$subject}}</td>
                        </tr>
                        <tr>
                            <td>Mensaje</td>
                            <td>{{$description}}</td>
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
