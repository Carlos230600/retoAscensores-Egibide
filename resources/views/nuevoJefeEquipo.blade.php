<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Nuevo Jefe de Equipo</title>
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
</head>
<body>
    <div class="newOperario">
        <ul>
            <li><div class="opNewOperario" style="background: linear-gradient(rgb(214, 231, 245), lightsteelblue);">Crear Jefe de Equipo</div></li>
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

            <li>
                <div class="opNewOperario2">
                    <a>Equipo</a>
                    <select class="opNewOperario">
                        <option>Equipo 11a</option>
                        <option>Equipo b09a</option>
                        <option>Equipo 34m</option>
                        <option>Equipo avx71</option>
                        <option>Equipo 11b</option>
                    </select>
            </li>
            <!--CONFIRMAR CONTRASEÑA Y CONTROL DE ERRORES-->
        </ul>

        <div id="controles">
            <button class="botControl" id="guardar">Guardar</button>
            <button class="botControl" id="cancelar">Cancelar</button>
        </div>
    </div>
</body>
</html>
