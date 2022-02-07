<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle Reporte</title>
    <style>

        *{
            font-size: 1.35pc;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .detalleReporte{
            width: 100%;
            height: auto;
        }

        .maindetalleReporte ul{
            list-style: none;
            margin: 0;
            padding: 0%;
        }

        .maindetalleReporte li{
            margin: 2% 0;
        }

        .repOpc{
            width: 100%;
            height: 70px;
            background: linear-gradient(rgb(214, 231, 245), lightsteelblue);
            border-radius: 0.4em;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
            box-shadow: 0px 0px 2px grey;
        }

        .repOpc3{
            width: 100%;
            height: 300px;
            border-radius: 0.4em;
            border: solid 0.5px gainsboro;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
            box-shadow: 0px 0px 2px grey;
        }

        #cerrar{
            width: 30%;
            height: auto;
            padding: 2% 0;
        }

    </style>
</head>
<body>

    <div class="maindetalleReporte">
        <ul>
            <li><div class="repOpc">Detalles Reporte</div></li>
            <li><div class="repOpc manOpc3">Autor Jede de Equipo</div></li>
            <li><div class="repOpc">Fecha</div></li>
            <li><div class="repOpc3">Reporte</div></li>
        </ul>
    </div>

    <button id="cerrar">Cerrar</button>
    
</body>
</html>
