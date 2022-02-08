<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Incidencias</title>
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

        .urgente{
           background: linear-gradient(rgb(255, 113, 113), rgb(223, 84, 84));
        }

        .prioritaria{
            background: linear-gradient(rgb(253, 158, 94),rgb(247, 139, 68));
        }

        .noprioritaria{
            background: linear-gradient(rgb(214, 231, 245), lightsteelblue);
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

        #lPrioritaria{
            display: flex; 
            flex-direction: row;
            flex-wrap: wrap;
        }

        #lPrioritaria li{
            width: 50%;
        }

        #lNoprioritaria{
            display: flex; 
            flex-direction: row;
            flex-wrap: wrap;
        }

        #lNoprioritaria li{
            width: 50%;
        }
 
        @media (max-width:768px) {
            #lUrgentes li{
                width: 100%;
            }  
            
            #lPrioritaria li{
                width: 100%;
            }

            #lNoprioritaria li{
                width: 100%;
            }
        }
    </style>
</head>
<script src="./sweetalert2.all.min.js"></script>
<script src="./jquery-3.6.0.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
<sctipt src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></sctipt>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
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

               .urgente{
                background-image:linear-gradient(rgb(255, 102, 102),rgb(250, 83, 83)), url("./vector.jpg");
                background-size: cover;
                background-blend-mode: multiply;
                }

                .prioritaria{
                    background-image:linear-gradient(rgb(253, 158, 94),rgb(247, 139, 68)), url("./vector.jpg");
                    background-size: cover;
                    background-blend-mode: multiply;
                }

                .noprioritaria{
       
                    background-image:linear-gradient(rgb(214, 231, 245), lightsteelblue), url("./vector.jpg");
                    background-size: cover;
                    background-blend-mode: multiply;
                }
               
           </style>
           <div class="tecnicosOpc2 ${this.getAttribute("tipo")}">
               <div class="imagenTecn">
                <svg xmlns="http://www.w3.org/2000/svg" width="4pc" height="4.1pc" fill="currentColor" class="bi bi-exclamation" viewBox="0 0 16 16">
                <path d="M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.553.553 0 0 1-1.1 0L7.1 4.995z"/>
                </svg>
               </div>
               
               <div class="opciones">
                   <ul>
                       <li>
                           <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                               <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                           </svg>
                       </li>
                       <li>
                           <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                               <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                               <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                           </svg>
                       </li>
                   </ul>
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
                <li class="breadcrumb-item">Incidencias</li>
              </ol>
            </nav>
        </div>

        <ul>
            <li>
                <a class="title1">Incidencias Urgentes</a><!--Indicar el numero de incidencias-->
                <div class="opcIncidencia">
                    <ul id="lUrgentes">
                        <!--Introducir los datos aqui-->
                    </ul>
                </div>
            </li>
            <li>
                <a class="title1">Incidencias Prioritarias</a>
                <div class="opcIncidencia">
                    <ul id="lPrioritaria">
                        <!--Introducir los datos aqui-->
                    </ul>
                </div>
            </li>

            <li>
                <a class="title1">Incidencias No Prioritarias</a><!--Indicar el numero de incidencias-->
                <div class="opcIncidencia">
                    <ul id="lNoprioritaria">
                        <!--Introducir los datos aqui-->
                    </ul>
                </div>
            </li>
        </ul>
    </div>

    <div class="opcIncidencia2" onclick="location.href='./nuevaIncidencia'">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-plus" viewBox="0 0 16 16">
            <path d="M8 6.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V11a.5.5 0 0 1-1 0V9.5H6a.5.5 0 0 1 0-1h1.5V7a.5.5 0 0 1 .5-.5z"/>
            <path d="M14 4.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h5.5L14 4.5zm-3 0A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5h-2z"/>
          </svg>
        Nueva Incidencia
    </div>


    <script>
        //Array con datos (cambiar a consulta a BD)
        var datos=[
            {id:"A001A",calle:"Pozoa Kalea, Vitoria-Gasteiz",fecha:"2/2/2022",tipo:"urgente"},
            {id:"K2256",calle:"Calle Correría, Vitoria-Gasteiz",fecha:"5/2/2022",tipo:"urgente"},
            {id:"P381B",calle:"Calle Reyes Católicos, Vitoria-Gasteiz",fecha:"1/2/2022",tipo:"urgente"},
            {id:"HG2891F",calle:"Pozoa Kalea, Vitoria-Gasteiz",fecha:"2/2/2022",tipo:"urgente"},
            {id:"FR656A",calle:"Calle Correría, Vitoria-Gasteiz",fecha:"5/2/2022",tipo:"urgente"},
            {id:"A677S",calle:"Calle Ramón y Cajal, Vitoria-Gasteiz",fecha:"1/2/2022",tipo:"prioritaria"},
            {id:"4888V",calle:"Calle Prudencio María Verástegui, Vitoria-Gasteiz",fecha:"2/2/2022",tipo:"prioritaria"},
            {id:"AH995V",calle:"Calle de Puerto Rico, Vitoria-Gasteiz",fecha:"5/2/2022",tipo:"prioritaria"},
            {id:"X552P",calle:"Pozoa Kalea, Vitoria-Gasteiz",fecha:"2/2/2022",tipo:"noprioritaria"},
            {id:"88CA",calle:"Calle Correría, Vitoria-Gasteiz",fecha:"5/2/2022",tipo:"noprioritaria"},
            {id:"A265C",calle:"Calle Reyes Católicos, Vitoria-Gasteiz",fecha:"1/2/2022",tipo:"noprioritaria"},
            {id:"A016LA",calle:"Pozoa Kalea, Vitoria-Gasteiz",fecha:"2/2/2022",tipo:"noprioritaria"},
            {id:"ASLV5",calle:"Calle Correría, Vitoria-Gasteiz",fecha:"5/2/2022",tipo:"noprioritaria"},
        ];
       
        for(let i=0;i<datos.length;i++){
            var item=document.createElement("li");
           var elemento = document.createElement("incidencia-p");
           elemento.setAttribute("id",datos[i]["id"]);
           elemento.setAttribute("calle",datos[i]["calle"]);//Paso los datos del array mediante un atributo al web component
           elemento.setAttribute("fecha",datos[i]["fecha"]);
           elemento.setAttribute("tipo",datos[i]["tipo"]);
           item.appendChild(elemento);
       
           var posicionElemento = i+1;

           //Condicional para saber si es urgente
            if(datos[i]["tipo"]=="urgente"){
                document.getElementById("lUrgentes").appendChild(item);
            }else if(datos[i]["tipo"]=="prioritaria"){
                document.getElementById("lPrioritaria").appendChild(item);
            }else if(datos[i]["tipo"]=="noprioritaria"){
                document.getElementById("lNoprioritaria").appendChild(item);
            }
        }
    </script>



</body>
</html>
