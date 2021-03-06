<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Historial</title>
<script>
    //Web component
        class Incidencia extends HTMLElement{
            
            constructor(){
                super();
                
                 this.addEventListener("click",function(){
                    //Almacena los datos en sesion
                    sessionStorage.setItem("idIncidencia",this.id);
                    sessionStorage.setItem("calleIncidencia",this.getAttribute("calle"));
                    location.href='./detalleIncidencia';
                 });
            }
    
            connectedCallback(){
                let shadowRoot = this.attachShadow({ mode: "open" });
                shadowRoot.innerHTML = `
                <style>
                    *{
                        font-size: 1.35pc;
                    }
                    ul{
                        list-style: none;
                        margin: 0;
                        padding: 0%;
                    }
                    li{
                        margin: 2% 0 2.5% 0;
                    }
                    .tecnicosOpc2{
                        width: 98%;/*Cambiar a auto despues de poner Editar y eliminar de la lista de tecnicos*/
                        height: auto;
                        margin:1%;
                        border-radius: 0.4em;
                        box-shadow: 0px 0px 2px grey;
                        display: flex;
                        flex-direction: row;
                        position: relative;
                        overflow: hidden;
                        padding: 2% 0;
                        background-image:linear-gradient(rgb(214, 231, 245), lightsteelblue), url("./vector.jpg");
                        background-size: cover;
                        background-blend-mode: multiply;
                    }
                    
                    .tecnicosOpc2:hover{
                        cursor:pointer;
                    }
                    
                    .opciones li{
                        margin-bottom: 5px;
                    }
    
                    .imagenTecn{
                        width: auto;
                        height: auto;
                        background:rgba(255, 255, 255, 0.708) ;
                        margin-left: 2%;
                        border-radius: 0.4em;
                        display:flex;
                        align-items:center;
                        justify-content:center;
                    }
                    .info{
                        height: 70px;
                        width: 66%;
                        overflow:hidden;
                        margin-left: 1.5%;
                    }
    
                    .info li{
                        margin: 0 0 2% 0;
                        height:1.9pc;
                        overflow:hidden;
                    }
    
                    .opciones{
                        height: 100%;
                        width: auto;
                        position: absolute;
                        right: 3%;
                    }
    
                 
                    
                </style>
                <div class="tecnicosOpc2 ${this.getAttribute("tipo")}">
                    <div class="imagenTecn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="4pc" height="4.1pc" fill="currentColor" class="bi bi-list-check" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M5 11.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3.854 2.146a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708L2 3.293l1.146-1.147a.5.5 0 0 1 .708 0zm0 4a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708L2 7.293l1.146-1.147a.5.5 0 0 1 .708 0zm0 4a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 0 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0z"/>
                        </svg>
                    </div>             
    
                    <div class="info">
                        <ul>
                            <li style="font-weight:500;">${this.getAttribute("calle")}</li>
                            <li>${this.getAttribute("fecha")}</li>
                        </ul>
                    </div>
                </div>
                `;
            }
    
        }
    
        window.customElements.define("incidencia-p", Incidencia);
    </script>
<style>
         *{
            font-size: 1.35pc;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .mainIncidencia{
            width: 100%;
            height: auto;
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
            margin: 0% 0% 0 2%;
        }
        
        .title ol{
            margin-bottom:0;
            display: flex;
            justify-content: center;
        }

        .mainIncidencia ul{
            list-style: none;
            margin: 0;
            padding: 0%;
        }

        .opcIncidencia{
            width: 96%;
            margin: 0.5em 2% 2% 2%;
            height: auto;
            border-radius: 0.4em;
            position: relative;
        }

        .opcIncidencia p{
            margin-left: 3%;
        }

        .nIncidencias{
            position: absolute;
            bottom: 0%;
        }

        .ver{
            position: absolute;
            bottom: 8%;
            right: 4%;
        }

        .opcIncidencia2{
            height: 80px;
            width: 96%;
            background: linear-gradient(rgb(164, 228, 122), rgb(148, 202, 111));
            border-radius: 0.4em;
            margin: 5% 2% 4% 2%;
            font-size: 1.35pc;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
        
        }

        .opcIncidencia2 > svg{
            margin: 0 2%;
        }

        #lUrgentes{
            display: flex; 
            flex-direction: row;
            flex-wrap: wrap;
        }

        #lUrgentes li{
            width: 50%;
        }
 
        @media (max-width:768px) {
            #lUrgentes li{
                width: 100%;
            }  
        }
        
</style>
</head>
<script src="../js/jquery-3.6.0.min.js"></script>
<script src="../js/sweetalert2.all.min.js"></script>
<script src="../js/bootstrap.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
<body>
    @include('header')
    
    <div class="mainIncidencia">
        <div class="title">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-house" viewBox="0 0 15 20">
                      <path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
                      <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
                    </svg>
                </li>
                <li class="breadcrumb-item">Historial</li>
              </ol>
            </nav>
        </div>
        <!--Listado del historial de incidencias-->
        <ul>
            <li>
                <a class="title1">Historial de Incidencias</a><!--Indicar el numero de incidencias-->
                <div class="opcIncidencia">
                    <ul id="lUrgentes">
                        <!--Introducir los datos aqui-->
                    </ul>
                </div>
            </li>
        </ul>
    </div>


    <!--Creacion de los web components-->
    <script>
        //Array con datos (cambiar a consulta a BD)
        var datos=[
            {id:"A001A",calle:"Pozoa Kalea, Vitoria-Gasteiz",fecha:"2/2/2022",tipo:"urgente"},
            {id:"K2256",calle:"Calle Correr??a, Vitoria-Gasteiz",fecha:"5/2/2022",tipo:"urgente"},
            {id:"P381B",calle:"Calle Reyes Cat??licos, Vitoria-Gasteiz",fecha:"1/2/2022",tipo:"urgente"},
            {id:"HG2891F",calle:"Pozoa Kalea, Vitoria-Gasteiz",fecha:"2/2/2022",tipo:"urgente"},
            {id:"FR656A",calle:"Calle Correr??a, Vitoria-Gasteiz",fecha:"5/2/2022",tipo:"urgente"},
            {id:"A677S",calle:"Calle Ram??n y Cajal, Vitoria-Gasteiz",fecha:"1/2/2022",tipo:"prioritaria"},
            {id:"4888V",calle:"Calle Prudencio Mar??a Ver??stegui, Vitoria-Gasteiz",fecha:"2/2/2022",tipo:"prioritaria"},
            {id:"AH995V",calle:"Calle de Puerto Rico, Vitoria-Gasteiz",fecha:"5/2/2022",tipo:"prioritaria"},
            {id:"X552P",calle:"Pozoa Kalea, Vitoria-Gasteiz",fecha:"2/2/2022",tipo:"noprioritaria"},
            {id:"88CA",calle:"Calle Correr??a, Vitoria-Gasteiz",fecha:"5/2/2022",tipo:"noprioritaria"},
            {id:"A265C",calle:"Calle Reyes Cat??licos, Vitoria-Gasteiz",fecha:"1/2/2022",tipo:"noprioritaria"},
            {id:"A016LA",calle:"Pozoa Kalea, Vitoria-Gasteiz",fecha:"2/2/2022",tipo:"noprioritaria"},
            {id:"ASLV5",calle:"Calle Correr??a, Vitoria-Gasteiz",fecha:"5/2/2022",tipo:"noprioritaria"},
        ];
       
        for(let i=0;i<datos.length;i++){
            var item=document.createElement("li");
           var elemento = document.createElement("incidencia-p");
           elemento.setAttribute("id",datos[i]["id"]);
           elemento.setAttribute("calle",datos[i]["calle"]);//Paso los datos del array mediante un atributo al web component
           elemento.setAttribute("fecha",datos[i]["fecha"]);
           elemento.setAttribute("tipo",datos[i]["tipo"]);
           item.appendChild(elemento);
       
            document.getElementById("lUrgentes").appendChild(item);
        }
    </script>


</body>
</html>
