<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Nuevo Operario</title>
    <style>
        *{
            font-size: 1.2pc;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .newOperario{
            width: 100%;
            height: auto;
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
            background: linear-gradient(rgb(182, 255, 175), rgb(145, 223, 151));
        }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.3.10/dist/sweetalert2.all.min.js"></script>
</head>
<body>
    <div class="newOperario">
        <ul>
            <li><div class="opNewOperario" style="background: linear-gradient(rgb(214, 231, 245), lightsteelblue);">Crear Nuevo Operario</div></li>
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
                title: 'Crear nuevo operario',
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
