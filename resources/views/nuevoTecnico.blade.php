<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Tecnico</title>
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

        .opNewOperario2 a{
            color: grey;
            font-weight: 500;
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
    </style>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.3.10/dist/sweetalert2.all.min.js"></script>
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
                        <li class="breadcrumb-item">Técnicos</li>
                        <li class="breadcrumb-item">Nuevo Técnico</li>
                      </ol>
                    </nav>
                </div>
            </li>
            <li>
                <div class="opNewOperario2">
                    <a>Nombre*</a>
                    <input type="search" class="opNewOperario">
                </div>
            </li>
            <li>
                <div class="opNewOperario2">
                    <a>DNI*</a>
                    <input type="search" class="opNewOperario">
                </div>
            </li>
            <li>
                <div class="opNewOperario2">
                    <a>Fecha Nacimiento*</a>
                    <input type="date" class="opNewOperario">
                </div>
            </li>
            <li>
                <div class="opNewOperario2">
                    <a>Telefono*</a>
                    <input type="tel" class="opNewOperario">
                </div>
            </li>
            <li>
                <div class="opNewOperario2">
                    <a>Email Corporativo*</a>
                    <input type="search" class="opNewOperario">
                </div>
            </li>

            <li>
                <div class="opNewOperario2">
                    <a>Equipo</a>
                    <select class="opNewOperario">
                        <option></option>
                        <option>Equipo 11a</option>
                        <option>Equipo b09a</option>
                        <option>Equipo 34m</option>
                        <option>Equipo avx71</option>
                        <option>Equipo 11b</option>
                    </select>
            </li>

            <li>
                <div class="opNewOperario2">
                    <a>Especialidad</a>
                    <select class="opNewOperario">
                        <option></option>
                        <option>Mantenimiento</option>
                        <option>Instalación</option>
                    </select>
            </li>

            <li>
                <div class="opNewOperario2">
                    <a>Contraseña*</a>
                    <input type="password" class="opNewOperario">
            </li>

            <!--CONFIRMAR CONTRASEÑA Y CONTROL DE ERRORES-->
        </ul>

        <div id="controles">
            <button class="botControl" id="guardar">Guardar</button>
            <button class="botControl" id="cancelar">Cancelar</button>
        </div>
    </div>
    
    <script>
        //Comprobar que todo es correcto y no hay campos vacios
        document.getElementById("guardar").addEventListener('click',function(){
            Swal.fire({
                title: 'Crear nuevo tecnico',
                text: "Se creará el usuario",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Crear Usuario',
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


        document.getElementById("cancelar").addEventListener('click',function(){
            Swal.fire({
                title: 'Cancelar proceso',
                text: "Se perderán los datos",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Salir',
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
