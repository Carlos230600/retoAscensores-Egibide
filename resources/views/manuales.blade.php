<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manuales</title>
    <style>
        *{
            font-size: 1.35pc;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .mainmanuales{
            width: 100%;
            height: auto;
        }

        .mainmanuales ul{
            list-style: none;
            margin: 0;
            padding: 0%;
        }

        .mainmanuales li{
            margin: 1.5% 0;
        }

        .manOpc{
            width: 100%;
            height: 70px;
            background: linear-gradient(rgb(214, 231, 245), lightsteelblue);
            border-radius: 0.4em;
    
            display: flex;
            justify-content: center;
            align-items: center;
            box-shadow: 0px 0px 2px grey;
        }

        .contflex{
            display: flex;
            flex-direction: row;
            justify-content: space-around;
        }

        .manOpc2{
            height: 70px;
            border-radius: 0.4em;
            background: linear-gradient(rgb(214, 231, 245), lightsteelblue);
            display: flex;
            justify-content: center;
            align-items: center; 
            box-shadow: 0px 0px 2px grey;
        }
        
        .manOpc3{
            height: 400px;
        }
    </style>
</head>
<body>

@include('header')

    <div class="mainmanuales">
        <ul>
            <li><div class="manOpc">Apartado Manuales</div></li>
            <li><div class="manOpc">Subir Nuevo Manual</div></li>
            <li>
                <div class="contflex">
                    <div class="manOpc2" style="flex-grow: 0.5;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-filter" viewBox="0 0 16 16">
                            <path d="M6 10.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5zm-2-3a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm-2-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z"/>
                        </svg>
                    </div>
                    <div class="manOpc2" style="flex-grow: 2;">Barra Busqueda</div>
                </div>
            </li>
            <li><div class="manOpc manOpc3">Apartado Manuales</div></li>
        </ul>
    </div>
    
</body>
</html>
