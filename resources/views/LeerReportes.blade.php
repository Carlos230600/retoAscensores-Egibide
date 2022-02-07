<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leer Reportes</title>
    <style>
        *{
            font-size: 1.35pc;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .mainReportes{
            width: 96%;
            height: auto;
            margin: 0 2%;
        }

        .mainReportes ul{
            list-style:none;
            padding: 0%;
        }

        .mainReportes li{
            padding: 2% 0 1.5% 0;
        }

        .reportesOpc{
            width: 100%;
            height: 70px;
            background: linear-gradient(rgb(214, 231, 245), lightsteelblue);
            border-radius: 0.4em;
            display: flex;
            justify-content: center;
            align-items: center;
            box-shadow: 0px 0px 2px 0.8px rgb(182, 182, 182);
        }

        .reporte{
            width: 100%;
            height: 70px;
            background: linear-gradient(rgb(218, 218, 218), rgb(187, 187, 187));
            border-radius: 0.4em;
            display: flex;
            align-items: center;
            box-shadow: 0px 0px 2px 0.8px rgb(182, 182, 182);
            padding: 2% 0;
        }

        .reporte ul{
            margin-left: 2%;
        }

        .title{
            display:flex;
            align-items:center;
            justify-content:center;
        }

        .title1{
            color: steelblue;
            font-weight: 500;
            text-decoration: none;
        }
        
        .title ol{
            margin-bottom:0;
            display: flex;
            justify-content: center;
        }

    </style>
</head>
<body>

    @include('header')

    <div class="mainReportes">
        <ul>
            <li>
                <div class="title">
                    <nav aria-label="breadcrumb">
                      <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-house" viewBox="0 0 15 20">
                              <path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
                              <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
                            </svg>
                        </li>
                        <li class="breadcrumb-item">Reportes</li>
                      </ol>
                    </nav>
                </div>
            </li>
            <li><div class="reportesOpc">Filtros</div></li>
            <li>
                <div>    
                    <a class="title1">Listado de reportes</a>
                  

                    <ul class="lReportes">
                        <li><!--Reporte1-->
                            <div class="reporte">
                                <ul>
                                    <li>Nombre Jefe Equipo</li>
                                    <li>Fecha</li>
                                </ul>
                            </div>
                        </li>

                        <li><!--Reporte2-->
                            <div class="reporte">
                                <ul>
                                    <li>Nombre Jefe Equipo</li>
                                    <li>Fecha</li>
                                </ul>
                            </div>
                        </li>


                        <li><!--Reporte3-->
                            <div class="reporte">
                                <ul>
                                    <li>Nombre Jefe Equipo</li>
                                    <li>Fecha</li>
                                </ul>
                            </div>
                        </li>

                        <!--
                            *********
                            BORRAR
                            *********
                        -->

                        <li><!--Reporte3-->
                            <div class="reporte">
                                <ul>
                                    <li>Nombre Jefe Equipo</li>
                                    <li>Fecha</li>
                                </ul>
                            </div>
                        </li>

                        <li><!--Reporte3-->
                            <div class="reporte">
                                <ul>
                                    <li>Nombre Jefe Equipo</li>
                                    <li>Fecha</li>
                                </ul>
                            </div>
                        </li>

                        <li><!--Reporte3-->
                            <div class="reporte">
                                <ul>
                                    <li>Nombre Jefe Equipo</li>
                                    <li>Fecha</li>
                                </ul>
                            </div>
                        </li>

                        <li><!--Reporte3-->
                            <div class="reporte">
                                <ul>
                                    <li>Nombre Jefe Equipo</li>
                                    <li>Fecha</li>
                                </ul>
                            </div>
                        </li>
                        
                    </ul>
                </div>
            </li>
        </ul>
    </div>
    
</body>
</html>
