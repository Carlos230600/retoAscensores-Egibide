<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
    <style>
       *{
            font-size: 1.35pc;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
        }
        #header{
            width: 100%;
            height: auto;
            display: flex;
            flex-direction: row;
            justify-content: space-around;
        }

        .header{
            height: 60px;
            background: linear-gradient(rgb(78, 78, 78), rgb(41, 41, 41));
            color: white;
            border-radius: 0.4em;
            box-shadow: 0px 0px 2px grey;
            display: flex;
            justify-content: center;
            align-items: center;
            margin:2%;
        }
        
        .header:hover{
            cursor:pointer;
        }

        #menu{
            width: 18.5%;
            border: none;
        }

        /*#menu:active{
            background: linear-gradient(rgb(160, 187, 209), rgb(105, 128, 158));
        }*/

        #logo{
            width: 58.5%;
            background-image: url("{{secure_asset('logo.png')}}");
            background-size: contain;
            background-repeat: no-repeat;
            background-position: center;
            box-shadow: none;
        }

        #salir{
            width: 18.5%;
        }

         #menuOculto{
            height: 100vh;
            background: linear-gradient(rgb(78, 78, 78), rgb(41, 41, 41));
            color: white;
            z-index: 1;
            margin: 0%;
            position: absolute;
            width: 100%;
            animation-name: muestraMenu;
            animation-duration: 1s;
            display: none;
        }

        #salirMenuOculto{
            height: 42px;
            width: 10%;
            margin: 2vh;
            overflow: hidden;
            position: absolute;
        }

        #exit{
            position: relative;
        }
        
        #exit:hover{
            cursor:pointer;
        }


        #menuOculto ul{
            list-style: none;
            padding: 0;
            margin: 0%;
            width: inherit;
            position: relative;
            top: 8.5%;
        }

        .opMenuOculto{
            height: 70px;
            width: 96%;
            margin: 0 auto;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 0.25em;
        }
        
        .opMenuOculto:hover{
            cursor:pointer;
        }

         .line{
            height: 1.5px;
            width: 80%;
            border-radius: 1em;
            margin: 0 auto;
            background-color: rgb(255, 255, 255);
        }

          /*** BOTON CAMBIAR TEMA ***/
       .botTema{
           width: 4em;
           height: 2em;
           background-color: gainsboro;
           border: none;
           border-radius: 1em;
           position: absolute;
           right: 0%;
           margin: 2vh;
       }

       .interruptor{
            height: 100%;
            width: 50%;
            border-radius: 50%;
            box-shadow: inset 0px 0px 2px 1px black;
            background-color: white;
            animation-name: oscuro;
            animation-duration: 0.3s;
            animation-fill-mode: forwards;
            animation-play-state: paused;
       }

        .controles{
            width: 100%;
            height: auto;
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: center;
        }

        @keyframes oscuro{
    
            100%{
            transform:translateX(2em)
            }
        }

        @keyframes claro{
            100%{
                position: relative;
                transform:translateX(0em)
            }
        }

        @keyframes muestraMenu {
            0%{
                width: 0%;
            }

            100%{
                width: 100%;
            }
        }

        @keyframes ocultaMenu{
            0%{
                width: 100%;
            }

            100%{
                width: 0%;
            }
        }
    </style>
    <script>
        
       function navegar(){
            return new Promise((resolve,reject)=>{
                resolve(
                    Swal.fire({
                    title: 'Incidencia en proceso',
                    text:"Confirma el estado de la incidencia antes de salir",
                    showDenyButton: true,
                    showCancelButton: true,
                    confirmButtonText: `Completada`,
                    denyButtonText: `En proceso`,
                    cancelButtonText:'Cancelar',
                    }).then((result) => {
                    if (result.isConfirmed) {
                        console.log("Poner incidencia como completada")
                        return "salir";
                    } else if (result.isDenied) {
                        console.log("Poner incidencia en proceso");
                        objDiv.scrollTop = $(document).height();
                        console.log($(document).height());
                    }
                    }));
            });
        }

        async function confirmaNavegar(ir){
            if(window.location.href=="https://komandaigobide.herokuapp.com/detalleIncidencia"){//Si está en incidencia
                var seleccion = await navegar();
                //Obtengo lo que el usuario ha seleccionado del popup
                if(seleccion=="salir"){
                    //Si ha seleccionado que quiere salir:
                    window.location.href=ir;
                }
            }else{
                window.location.href=ir;
            }
        }
    </script>
</head>
<body id="body">
    <div id="menuOculto">
        <div id="salirMenuOculto">
            <svg id="exit" xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M13.854 2.146a.5.5 0 0 1 0 .708l-11 11a.5.5 0 0 1-.708-.708l11-11a.5.5 0 0 1 .708 0Z"/>
                <path fill-rule="evenodd" d="M2.146 2.146a.5.5 0 0 0 0 .708l11 11a.5.5 0 0 0 .708-.708l-11-11a.5.5 0 0 0-.708 0Z"/>
            </svg>
        </div>

        <!--Boton tema claro/oscuro-->
        <div id="botTema"class="botTema">
            <div id="interruptor" class="interruptor"></div>
        </div>
        
         <ul id="listaOp">
            <li><div class="opMenuOculto" onclick="confirmaNavegar('./incidencias')">Incidencias</div></li><hr class="line">
            <li><div class="opMenuOculto" onclick="confirmaNavegar('./listadoTecnicos')">Tecnicos</div></li><hr class="line">
            <li><div class="opMenuOculto" onclick="confirmaNavegar('./listadoOperarios')">Operarios</div></li><hr class="line">
            <li><div class="opMenuOculto" onclick="confirmaNavegar('./listadoJefeEquipo')">Jefes de Equipo</div></li><hr class="line">
            <li><div class="opMenuOculto" onclick="confirmaNavegar('./reportes')">Reportes</div></li><hr class="line">
            <li><div class="opMenuOculto" onclick="confirmaNavegar('./manuales')">Manuales</div></li><hr class="line">
            <li><div class="opMenuOculto" onclick="confirmaNavegar('./historial')">Historial</div></li><hr class="line">
            <li><div class="opMenuOculto" onclick="confirmaNavegar('./estadisticas')">Estadisticas</div></li>
        </ul>
    </div>
    <div id="header">
        <button id="menu" class="header">
            <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
            </svg>
        </button>
        <div id="logo" class="header" onclick="confirmaNavegar('./')"></div>
        <div id="salir" class="header">
            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z"/>
                <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/>
            </svg>
        </div>
    </div>

    <script>
         //Si selecciono el icono del menu, mostrar el hiddenMenu
        document.getElementById("menu").addEventListener('click',function(){
            document.getElementById("menuOculto").style.width="100%"; //En caso de que el width sea 0
            document.getElementById("menuOculto").style.display = "block";
            document.getElementById("menuOculto").style.animationName="muestraMenu";
            document.getElementById("menuOculto").style.animationPlayState="running";
            $('#listaOp').fadeIn('slow');
        });

        //Cambiar de tema
        $("#interruptor").click(function(){
            if(document.getElementById("interruptor").style.animationName=="oscuro"){
                document.getElementById("botTema").style.backgroundColor="gainsboro";
                document.getElementById("body").style.color="black";
                document.getElementById("interruptor").style.animationName="claro";
                document.getElementById("interruptor").style.animationDuration="0.3s";
                document.getElementById("interruptor").style.animationPlayState="running";
                var documento=document.getElementsByTagName("body");
                for(let i=0;i<documento.length;i++){
                    documento[i].setAttribute("style","background-color:white");
                    
                }
            }else{
                document.getElementById("botTema").style.border="solid 1px gainsboro";
                document.getElementById("botTema").style.backgroundColor="black";
                document.getElementById("interruptor").style.animationName="oscuro";
                document.getElementById("interruptor").style.animationDuration="0.3s";
                var documento=document.getElementsByTagName("body");
                for(let i=0;i<documento.length;i++){
                    documento[i].setAttribute("style","background-color:black");
                    
                }
                document.getElementById("interruptor").style.animationPlayState="running";
            }
            
        });

        document.getElementById("salirMenuOculto").addEventListener('click',function(){
            document.getElementById("menuOculto").style.animationName="ocultaMenu";
            document.getElementById("menuOculto").style.animationPlayState="running";
            document.getElementById("menuOculto").style.width="0%";
            $('#listaOp').fadeOut(290);
        });

        //Cuando selecciona el boton de cerrar sesion
        document.getElementById("salir").addEventListener('click',function(){
            Swal.fire({
                title: '¿Cerrar sesion?',
                text: "Se cerrará la sesión para (NombreUsuario)",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Cerrar Sesión',
                cancelButtonText: 'Cancelar'
                }).then((result) => {
                if (result.isConfirmed) {//No es necesario, se puede borrar
                    Swal.fire(
                    'Deleted!',
                    'Your file has been deleted.',
                    'success'
                    )
                }
            });
        });
    </script>
  
</body>
</html>
