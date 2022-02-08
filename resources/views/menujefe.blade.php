<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Director</title>
<style>
        *{
            margin: 0;
            padding: 0;
        }

        .vista{
            height: 1em;
            width: 3.7em;
            margin: 0 0 1% 0.5%;
            border-radius: 0.1em;
            display: flex;
            flex-direction: row;
            font-size: -0.5em;
            align-items: center;
            color: rgb(66, 66, 66);
        }


        .vista a{
            margin-left: 0.18em;
        }

        .vista:hover{
            cursor:pointer;
            color: black;
        }

        .opColumnas{
            height: auto;
            width: 50%;
            padding: 2% 0;
            margin: 2% auto;
            border-radius: 0.5em;
            border:0.5px solid gainsboro;
        }

        .opColumnas:hover{
            cursor: pointer;
        }

        .opColumnasSelected{
            border: 0.5px solid rgb(255, 191, 73);
        }

        #mainListado{
            width: 100%;
           
        }
        
        #listadoDirector{
            width: 100%;
            list-style: none;
            padding: 0;
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
        }

        #listadoDirector li{
            padding: 0%;
            margin: 0%;
            width: 50%;
        }

        .opcDirector{
            height: 10.5pc;
            width: 98%;
            background-image:linear-gradient(rgb(255, 191, 73), rgb(255, 170, 13)), url("./vector.jpg");
            background-size: cover;
            background-blend-mode: multiply;
            border-radius: 0.4em;
            border: solid 1px rgb(255, 170, 13);
            margin:1%;
            font-size: 1.35pc;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            box-shadow: 0px 0px 2px grey;
            position: relative;
        }
        
        .opcDirector:hover{
            cursor:pointer;
        }

        .info{
            background-color: red;
            height: 1.6em;
            width: 1.6em;
            color: white;
            padding: 2%;
            font-weight: bold;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            position: absolute;
            top: 6%;
            left: 2%;
            font-size: large;
        }

        .link{
            text-decoration: none;
        }

        .link:visited{
            color: inherit;
        }

        .mainHome{
            width: 96%;
            height: auto;
            margin: 3% 2% 1% 2%;
        }

         .mainHome{
            width: 96%;
            height: auto;
            margin: 0% 2% 1% 2%;
        }

        @media (max-width:768px){
            .opcDirector{
                height: 120px;
            }
            
            .mainHome{
                margin: 2% 2% 1% 2%;
            }

            #listadoDirector li{
                width: 100%;
            }
        }
    </style>
</head>
<body>
        <div class="mainHome">
          <div>
             <div class="row">
                <div id="mainListado" class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div id="vista" class="vista">
                        <svg xmlns="http://www.w3.org/2000/svg" width="2pc" height="2pc" fill="currentColor" class="bi bi-grid-3x3-gap" viewBox="0 0 16 16">
                            <path d="M4 2v2H2V2h2zm1 12v-2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1zm0-5V7a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1zm0-5V2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1zm5 10v-2a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1zm0-5V7a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1zm0-5V2a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1zM9 2v2H7V2h2zm5 0v2h-2V2h2zM4 7v2H2V7h2zm5 0v2H7V7h2zm5 0h-2v2h2V7zM4 12v2H2v-2h2zm5 0v2H7v-2h2zm5 0v2h-2v-2h2zM12 1a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1h-2zm-1 6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1V7zm1 4a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-2a1 1 0 0 0-1-1h-2z"/>
                        </svg>
                        <a>VISTA</a>
                    </div>
                    <ul id="listadoDirector">
                        <li>
                            <div class="opcDirector" onclick="location.href='./incidencias'">
                                <svg class="w-50 h-50 w-lg-100 h-lg-100 w-xl-100 h-xl-100" xmlns="http://www.w3.org/2000/svg"  fill="currentColor" class="bi bi-exclamation-square" viewBox="0 0 15 20">
                                    <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                                    <path d="M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995z"/>
                                </svg>
                                Incidencias
                            </div>
                        </li>
                        <li>
                            <div class="opcDirector" onclick="location.href='./listadoTecnicos'">
                                <svg class="w-50 h-50 w-lg-100 h-lg-100 w-xl-100 h-xl-100" xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-wrench-adjustable-cricle" viewBox="0 0 15 20">
                                    <path fill-rule="evenodd" d="M15 8a7 7 0 0 1-10.253 6.2l1.658-1.99a4.49 4.49 0 0 0 1.592.29c.652 0 1.273-.139 1.833-.39L8.497 9l-1-2.5 3.826-1.53a4.5 4.5 0 0 0-7.537 4.623l-1.988 1.656A7 7 0 1 1 15 8Zm1 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0Zm-3.504 0a4.491 4.491 0 0 1-1.703 3.526L9.497 8.5l2.959-1.11c.027.2.04.403.04.61Zm-5.791.139a.25.25 0 0 0-.288-.376l-1.5.5.159.474.808-.27-.595.894a.25.25 0 0 0 .287.376l.808-.27-.595.894a.25.25 0 0 0 .287.376l1.5-.5-.159-.474-.808.27.596-.894a.25.25 0 0 0-.288-.376l-.808.27.596-.894Z"/>
                                </svg>
                                Técnicos
                            </div>
                        </li>
                        <li>
                            <div class="opcDirector" onclick="location.href='./listadoOperarios'">
                                <svg class="w-50 h-50 w-lg-100 h-lg-100 w-xl-100 h-xl-100" xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-person-workspace" viewBox="0 0 15 20">
                                    <path d="M4 16s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H4Zm4-5.95a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z"/>
                                    <path d="M2 1a2 2 0 0 0-2 2v9.5A1.5 1.5 0 0 0 1.5 14h.653a5.373 5.373 0 0 1 1.066-2H1V3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v9h-2.219c.554.654.89 1.373 1.066 2h.653a1.5 1.5 0 0 0 1.5-1.5V3a2 2 0 0 0-2-2H2Z"/>
                                </svg>
                                Operarios
                            </div>
                        </li>
                        <li>
                            <div class="opcDirector" onclick="location.href='./listadoJefeEquipo'">
                                <svg class="w-50 h-50 w-lg-100 h-lg-100 w-xl-100 h-xl-100" xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-briefcase" viewBox="0 0 15 20">
                                    <path d="M6.5 1A1.5 1.5 0 0 0 5 2.5V3H1.5A1.5 1.5 0 0 0 0 4.5v8A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-8A1.5 1.5 0 0 0 14.5 3H11v-.5A1.5 1.5 0 0 0 9.5 1h-3zm0 1h3a.5.5 0 0 1 .5.5V3H6v-.5a.5.5 0 0 1 .5-.5zm1.886 6.914L15 7.151V12.5a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5V7.15l6.614 1.764a1.5 1.5 0 0 0 .772 0zM1.5 4h13a.5.5 0 0 1 .5.5v1.616L8.129 7.948a.5.5 0 0 1-.258 0L1 6.116V4.5a.5.5 0 0 1 .5-.5z"/>
                                </svg>
                                Jefes de Equipo
                            </div>
                        </li>
                        <li>
                            <div class="opcDirector" onclick="location.href='./reportes'">
                                <div class="info">3</div>
                                <svg class="w-50 h-50 w-lg-100 h-lg-100 w-xl-100 h-xl-100" xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-file-earmark-text" viewBox="0 0 15 20">
                                    <path d="M5.5 7a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5zM5 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5z"/>
                                    <path d="M9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.5L9.5 0zm0 1v2A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5z"/>
                                </svg>
                                Reportes
                            </div>
                        </li>
                        <li>
                            <div class="opcDirector" onclick="location.href='./manuales'">
                                <svg class="w-50 h-50 w-lg-100 h-lg-100 w-xl-100 h-xl-100" xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-book" viewBox="0 0 15 20">
                                    <path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z"/>
                                </svg>
                                Manuales
                            </div>
                        </li>
                        <li><div class="opcDirector" onclick="location.href='./historial'">
                                <div class="info">1</div>
                                <svg class="w-50 h-50 w-lg-100 h-lg-100 w-xl-100 h-xl-100" xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-clock-history" viewBox="0 0 15 20">
                                    <path d="M8.515 1.019A7 7 0 0 0 8 1V0a8 8 0 0 1 .589.022l-.074.997zm2.004.45a7.003 7.003 0 0 0-.985-.299l.219-.976c.383.086.76.2 1.126.342l-.36.933zm1.37.71a7.01 7.01 0 0 0-.439-.27l.493-.87a8.025 8.025 0 0 1 .979.654l-.615.789a6.996 6.996 0 0 0-.418-.302zm1.834 1.79a6.99 6.99 0 0 0-.653-.796l.724-.69c.27.285.52.59.747.91l-.818.576zm.744 1.352a7.08 7.08 0 0 0-.214-.468l.893-.45a7.976 7.976 0 0 1 .45 1.088l-.95.313a7.023 7.023 0 0 0-.179-.483zm.53 2.507a6.991 6.991 0 0 0-.1-1.025l.985-.17c.067.386.106.778.116 1.17l-1 .025zm-.131 1.538c.033-.17.06-.339.081-.51l.993.123a7.957 7.957 0 0 1-.23 1.155l-.964-.267c.046-.165.086-.332.12-.501zm-.952 2.379c.184-.29.346-.594.486-.908l.914.405c-.16.36-.345.706-.555 1.038l-.845-.535zm-.964 1.205c.122-.122.239-.248.35-.378l.758.653a8.073 8.073 0 0 1-.401.432l-.707-.707z"/>
                                    <path d="M8 1a7 7 0 1 0 4.95 11.95l.707.707A8.001 8.001 0 1 1 8 0v1z"/>
                                    <path d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5z"/>
                                </svg>
                                Historial
                            </div>
                        </li>
                        <li>
                            <div class="opcDirector" onclick="location.href='./estadisticas'">
                                <svg class="w-50 h-50 w-lg-100 h-lg-100 w-xl-100 h-xl-100" xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-graph-up-arrow" viewBox="0 0 15 20">
                                    <path fill-rule="evenodd" d="M0 0h1v15h15v1H0V0Zm10 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V4.9l-3.613 4.417a.5.5 0 0 1-.74.037L7.06 6.767l-3.656 5.027a.5.5 0 0 1-.808-.588l4-5.5a.5.5 0 0 1 .758-.06l2.609 2.61L13.445 4H10.5a.5.5 0 0 1-.5-.5Z"/>
                                </svg>
                                Estadisticas
                            </div>
                        </li>
                    </ul>
                </div>
    
                
            </div>
          </div> 
    </div>


     <!--Distribucion de las columnas-->
    <script>
        $(document).ready(function(){
            $("#vista").click(function(){
                Swal.fire({
                title: 'Vista',
                html:`<p>Configura la distribución de los elementos</p>
                <ul style="list-style:none;padding:0;margin:0;">
                        <li class="opColumnas d-lg-none d-lg-block d-xl-none d-xl-block d-xxl-none d-xxl-block">1 Columna</li>
                        <li class="opColumnas">2 Columnas</li>
                        <li class="opColumnas d-none d-sm-block">3 Columnas</li>
                </ul>`,
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                cancelButtonText:'Cancelar',
                confirmButtonText: 'Confirmar',
                didRender: () => {
                    $(".opColumnas").click(function(){
                        var seleccionado = $(".opColumnasSelected");///Comprueba si hay elementos ya seleccionados
                        if(seleccionado.length>=1){
                            for(i=0;i<seleccionado.length;i++){
                                seleccionado[i].className="opColumnas";
                            }   
                        }
                        $(this).toggleClass("opColumnasSelected");
                    });
                }
                }).then((result) => {
                if (result.isConfirmed) {
                   // Guardar la seleccion en cookies
                   var columnas = $(".opColumnasSelected");
                   if(columnas[0]==undefined){
                    console.log("No se ha especificado opcion");
                   }else{
                        localStorage.setItem("columnas",columnas[0].innerHTML);//Almaceno la opcion en localstorage
                        var elementos = $("#listadoDirector > li")
                        console.log("Elementos li: " + elementos.length);
                        switch(columnas[0].innerHTML){
                            case "1 Columna":
                                for(i=0;i<elementos.length;i++){
                                    console.log(elementos[i].getAttribute("style"));
                                    elementos[i].setAttribute("style","width:100%");
                                }
                                break;
                            case "2 Columnas":arguments
                                for(i=0;i<elementos.length;i++){
                                    elementos[i].setAttribute("style","width:50%");
                                }
                                break;
                            case "3 Columnas":
                                for(i=0;i<elementos.length;i++){
                                    elementos[i].setAttribute("style","width:33%");
                                }
                            break;
                        }
                   }
                }
                });
            })
        });
    </script>
</body>
</html>
