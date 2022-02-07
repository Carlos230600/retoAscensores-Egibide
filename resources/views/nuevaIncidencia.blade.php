<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nueva Incidencia</title>
    <style>
        *{
            font-size: 1.2pc;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .newOperario{
            width: 96%;
            height: auto;
            margin: 0 2%;
        }
        .newOperario ul{
            list-style: none;
            padding: 0;
            margin-top: 2%;
        }

        .newOperario li{
            margin: 4% 0;
        }

        .title{
            display:flex;
            align-items:center;
            justify-content:center;
        }
        
        .title ol{
            margin-bottom:0;
            display: flex;
            justify-content: center;
        }

        .opNewOperario{
            border: none;
            width: 100%;
            height: 70px;
            border-radius: 0.4em;
            display: flex;
            justify-content: center;
            align-items: center;
            border: solid 0.5px gainsboro;
            overflow: auto;
        }

        .opNewOperario2{
            width: 95%;
            margin: 2% auto;
        }

        .titulo{
            color: black;
            font-weight: 500;
            text-decoration: none;
        }

        #controles{
            display: flex;
            bottom: 0.5px;
            justify-content: space-around;
        }

        .botControl{
            width:45%;
            height: 50px;
            border: none;
            outline: none;
            border-radius: 0.4em;
        }

        #guardar{
            background: linear-gradient(rgb(164, 228, 122), rgb(148, 202, 111));
        }

        .selector{
            width: 100%;
            height: auto;
            padding: 2%;
            border: none;
            border-radius: 0.4em;
            border: solid 0.5px gainsboro;
            background: none;
        }

        .selector2{
            width: 95%;
            height: 50px;
            padding: 2%;
            border: none;
            border-radius: 0.4em;
            background: none;
            margin: 2% auto;
            border: solid 1px gainsboro;
            display: flex;
            align-items:  center;
            justify-content:center;
        }

        .container{
            width: 100%;
            height: auto;
            display: flex;
            flex-direction: row;
            align-items: center;
        }

        .lineal{
            width: 48.5% !important;
            margin: 0 auto;
        }

        .addOperario{
            width: 100%;
            height: 60px;
            border: none;
            border-radius: 0.4em;
            border: solid 0.5px gainsboro;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .opNewOperarioComentario{
            height: 200px;   
            border: none;
            width: 100%;
            border-radius: 0.4em;
            border: solid 0.5px gainsboro;
            overflow: auto;
        }

        #addIcon{
            margin: 0 2%;
        }

        #selOperarioInfo{
            font-weight: normal;
        }
    </style>
</head>
<body>
    @include('header')

     <div class="newOperario">
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
                        <li class="breadcrumb-item">Incidencias</li>
                        <li class="breadcrumb-item">Nueva Incidencia</li>
                      </ol>
                    </nav>
                </div>
            </li>
            <li>
                <div class="opNewOperario2">
                    <a class="titulo">Nombre*</a>
                    <input type="search" class="opNewOperario">
                </div>
            </li>
            <li>
                <div class="opNewOperario2">
                    <a class="titulo">Dirección*</a>
                    <input type="search" class="opNewOperario">
                </div>
            </li>
            <li>
                <div class="opNewOperario2">
                    <a class="titulo">ID Ascensor*</a>
                    <input type="search" class="opNewOperario">
                </div>
            </li>
            <li>
                <div class="opNewOperario2">
                    <a class="titulo">Email Cliente</a>
                    <input type="email" class="opNewOperario">
                </div>
            </li>
            <li>
                <div class="opNewOperario2">
                    <a class="titulo">Email Corporativo*</a>
                    <input type="email" class="opNewOperario">
                </div>
            </li>
            <li>
                <div class="opNewOperario2">
                    <a class="titulo">Comentario</a>
                    <textarea type="text" class="opNewOperarioComentario" maxlength="250" placeholder="Maximo 250 caracteres"></textarea>
                </div>
            </li>

            <li>
                <div class="container">
                    <div class="opNewOperario2 lineal">
                        <a class="titulo">Tipo Instalación</a><br>
                        <select class="selector">
                            <option>Opcion 1</option>
                            <option>Opcion 1</option>
                            <option>Opcion 1</option>
                        </select>
                    </div>

                    <div class="opNewOperario2 lineal">
                        <a class="titulo">Urgencia</a><br>
                        <select class="selector">
                            <option>Urgente</option>
                            <option>Prioritaria</option>
                            <option>No Prioritaria</option>
                        </select>
                    </div>

                </div>
            </li>

            <!--Seleccionar un tecnico asociado a la incidencia-->
            <li>
                <div class="opNewOperario2">
                    <a class="titulo">Operario</a>
                    <button class="addOperario" id="addOperario">
                        <svg id="addIcon" xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-plus" viewBox="0 0 16 16">
                            <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                            <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
                        </svg>
                        <a id="selOperarioInfo">Selecciona un operario</a>
                    </button>
                </div>
            </li>

            <!--CONFIRMAR CONTRASEÑA Y CONTROL DE ERRORES-->
        </ul>

        <div id="controles">
            <button class="botControl" id="guardar">Guardar</button>
            <button class="botControl" id="cancelar">Cancelar</button>
        </div>
    </div>
    <script>
        $(document).ready(function(){
            var tecnicos = ["Luis Henrique", "Aitor Molano", "Carlos Garcia"];


            $(".addOperario").click(function(){
                //Cuando el usuario haga cick en el boton de añadir tecnico, se abrira un swal con los diferentes tecnicos
                //Asociados a la zona de la incidencia
                Swal.fire({
                title: 'Tecnicos',
                html: "<ul id='lTecnicosDisp'></ul>",
                showConfirmButton:false,
                showCancelButton: true,
                cancelButtonColor: '#d33',
                cancelButtonText: 'Cancelar',
                didRender: () => {
                    var tecnicos = ["Aitor Molano","Luis Henrique","Carlos Garcia","2gdaw01","2gdaw02","2gdaw03","2gdaw04"];

                    //Crea un li por cada uno de los elementos
                    tecnicos.forEach(element => {
                        var listItem = document.createElement("li");
                        var texto = document.createTextNode(element);
                        listItem.appendChild(texto);
                        listItem.classList.add("selector2");
                        var lista = Swal.getPopup().querySelector('#lTecnicosDisp');
                        lista.appendChild(listItem);
                        document.getElementById("lTecnicosDisp").style.listStyle="none";
                        document.getElementById("lTecnicosDisp").style.padding=0;
                    });
              
                    $(".selector2").click(function(event){//Cuando seleccione un tecnico del popup cerrar el alert y poner el nombre en el button
                        var valorSeleccionado = event.target;
                        var info=document.getElementById("selOperarioInfo");
                        if(info!=null){
                            document.getElementById("selOperarioInfo").remove();
                        }else{
                            document.getElementById("tecnico").remove();
                        }
                        Swal.close();
                        console.log("Se ha ejecutado la funcion y se ha obtenido el valor: " + valorSeleccionado.innerHTML);
                        var nombreTecnico = document.createElement("a");
                        nombreTecnico.id="tecnico";
                        var texto = document.createTextNode(valorSeleccionado.innerHTML);
                        nombreTecnico.appendChild(texto);
                        document.getElementById("addOperario").appendChild(nombreTecnico);
                        document.getElementById("addOperario").style.background="none";
                        document.getElementById("addOperario").style.border="solid 0.5px gainsboro";
                    });
                }}).then((result) => {
                if (result.isConfirmed) {//No es necesario, se puede borrar
                    console.log("Cambia el valor del buton y hacerlo disabled");
                }
            
                
            });
            });
        });
    </script>
</body>
</html>
