<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle de Incidencia</title>
    <style>
      *{
            font-size: 1.35pc;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .titulo1{
            color: steelblue;
            font-weight: 500;
            text-decoration: none;
        }
        
        .title{
            display:flex;
            align-items:center;
            justify-content:center;
        }
        
        .title ol{
            margin-bottom:0;
        }

        .maindetalleIncidencia{
            width: 96%;
            height: auto;
            margin: 0 2%;
        }

        .maindetalleIncidencia ul{
            list-style: none;
            margin: 0;
            padding: 0%;
        }

        .maindetalleIncidencia li{
            margin: 2% 0;
        }

        .manOpc{
            width: 100%;
            height: 70px;
            border-radius: 0.4em;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
            box-shadow: 0px 0px 2px grey;
        }

        .manOpc2{
            height: 350px;
        }

        .manOpc3{
            width: 100%;
            display: flex;
            height: auto !important;
            border: none;
        }

        .manOpc4{
            height: auto;
            background: none;
            border: solid 0.5px gainsboro;
            overflow-y: scroll;
            justify-content: flex-start;
        }

        #lcomentarios{
            padding: 0;
            margin: 0;
            height: 100%;
        }

        /*Mapas*/
        #map {
            height: 100%;
            width: 100%;
        }

        .custom-map-control-button {
            background-color: #fff;
            border: 0;
            border-radius: 2px;
            box-shadow: 0 1px 4px -1px rgba(0, 0, 0, 0.3);
            margin: 10px;
            padding: 0 0.5em;
            font: 400 18px Roboto, Arial, sans-serif;
            overflow: hidden;
            height: 40px;
            cursor: pointer;
        }
        .custom-map-control-button:hover {
            background: #ebebeb;
        }

        #addComent{
            background: linear-gradient(rgb(164, 228, 122), rgb(148, 202, 111));
        }

        #addComent:hover{
            cursor: pointer;
        }

        #addComent > svg{
            margin: 0 2%;
        }

        #comentario{
            display: flex;
            flex-direction: column;
        }

        .comentarioStyle{
            background-color: rgb(245, 245, 245);
            height: auto;
            width: 98%;
            border-radius: 0 0.75em 0.75em 0.75em;
        }

        #comentario > textarea{
            width: 100%;
        }
        
        #enviar{
            background: linear-gradient(rgb(214, 231, 245), lightsteelblue);
            height: auto;
            width: fit-content;
            padding: 1% 2%;
            display: flex;
            align-items: center;
            justify-content: center;
            align-self: flex-end;
            margin: 0.5em 0 0 0;
        }

        #enviar:hover{
            cursor:pointer;
        }

        #enviar > svg{
            margin: 0 2%;
        }

        #lDetalles{
            list-style: circle !important;
            margin-left: 1em;
        }
        
       .breadcrumb-item > a,svg:hover{
            cursor:pointer;
        }
        
         /*Cambia el tamaño del mapa para pc*/
        @media (min-width:1000px) {
            .manOpc2{
                height: 600px;
            }
        }
        
         @media (max-width:850px) {
            .maindetalleIncidencia{
               padding: 0 1.5%;
            }
        }
    </style>

    <!--Mapas-->
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script><!--Axios para peticiones con geolocalizacion-->
    <script>
        //Geolocalizacion
        function geocode(){
            var location=sessionStorage.getItem("calleIncidencia"); //Obtener el nombre de la calle de la incidencia(portal,Nombre,Ciudad,Comunidad,Pais(Opcional))
            return new Promise((resolve,reject)=>{
                resolve( 
                axios.get("https://maps.googleapis.com/maps/api/geocode/json",{
                params:{
                    address: location, //Localizacion que quiero buscar
                    key: 'AIzaSyBmBn7kS79QyLpJnHnuTTW2uN-TTh_q-e8',//Clave del proyecto de Google Developers
                }}).then(function(response){//Respuesta de la peticion
                    var lat = response.data.results[0].geometry.location.lat;
                    var lng = response.data.results[0].geometry.location.lng;
                    console.log(`lat: ${lat} y lng:${lng}`);
                    var posicion = [lat,lng];//Devuelvo las posiciones para que el metodo render lo centre en el sitio exacto
                    return posicion;
                }).catch(function(error){//En caso de error
                    if(error){
                        console.log(error);
                    }
                }))
                });
           
        }

        //Renderizar mapa
        let map, infoWindow;
        async function initMap(){//Funcion asincrona
            
        var posiciones=await geocode();//lat y lng para centrar el mapa en la calle requerida await funcion de obtencion de pos.
        map = new google.maps.Map(document.getElementById("map"), {
            center: { lat: posiciones[0], lng: posiciones[1] },
            zoom: 18,
        });
        infoWindow = new google.maps.InfoWindow();
        }
       
    </script>
    <script src="./jquery-3.6.0.min.js"></script>
    <script src="./sweetalert2.all.min.js"></script>
</head>
<body>

    @include('header')

    <div class="maindetalleIncidencia">
        <div>
            <div class="col">
                    <!--Añadir las clases de bootstrap-->
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <ul>
                        <li>
                            <div class="title">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <svg onclick="confirmaNavegar('./')" xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-house" viewBox="0 0 16 20">
                                            <path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
                                            <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
                                        </svg>
                                    </li>
                                        <li class="breadcrumb-item"><a onclick="confirmaNavegar('./incidencias')">Incidencias</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Id Incidencia</li>
                                    </ol>
                                </nav>
                            </div>
                        </li>
                        <li><div class="manOpc manOpc2">
                            <div id="map"></div>
                            <!-- Async script executes immediately and must be after any DOM elements used in callback. -->
                            <script
                                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyALUqJpjrUqrUZaDmf5akxGk01EeU-1Do0&callback=initMap&v=weekly"
                                async
                            ></script>
                        </div></li>
                                <li>
                            <a class="titulo1">Descripción</a>
                            <p id="descripcion"></p>
                        </li>
                        <li>
                            <a class="titulo1">Detalles</a>
                            <div class="manOpc3">
                                <ul id="lDetalles"></ul>
                            </div>
                        </li>
                        <li>
                            <a class="titulo1">Comentarios</a>
                            <div id="manOpc4" class="manOpc manOpc4">
                                <!--Cargar los comentarios-->
                                <ul id="lcomentarios"></ul>
                            </div>
                        </li>
                    </ul>
                       
                    <div id="comentario" height: auto;">
                        <textarea id="inpComentario" class="form-control" maxlength="150" rows="2" placeholder="Escribe aqui tu comentario"></textarea>
                        <!--Añadir comentario-->
                        <div id="enviar">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-send" viewBox="0 0 16 16">
                                <path d="M15.854.146a.5.5 0 0 1 .11.54l-5.819 14.547a.75.75 0 0 1-1.329.124l-3.178-4.995L.643 7.184a.75.75 0 0 1 .124-1.33L15.314.037a.5.5 0 0 1 .54.11ZM6.636 10.07l2.761 4.338L14.13 2.576 6.636 10.07Zm6.787-8.201L1.591 6.602l4.339 2.76 7.494-7.493Z"/>
                            </svg> Enviar
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

     <script>       
        //Confirma estado de incidencia antes de salir
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
                        window.scrollTo(0,document.body.scrollHeight);
                        document.getElementById("inpComentario").focus();
                    }
                    }));
            });
        }
        async function confirmaNavegar(ir){
            //Obtengo lo que el usuario ha seleccionado del popup
            var seleccion = await navegar();
            if(seleccion=="salir"){
                window.location.href=ir;
            } 
        }
        
        //Carga descripcion
        var descripcion="La polea es un componente esencial para el correcto funcionamiento de un elevador. Con el tiempo, el roce constante y diario de los cables que la unen a la cabina, hace que se desgaste y que el cableado acabe por resbalar sobre ella. ";
        document.getElementById("descripcion").innerHTML=descripcion;

        //Carga detalles
        var detalles={
            comunidad:"Alava",
            localidad:"Vitoria-Gasteiz",
            calle:sessionStorage.getItem("calleIncidencia"),
            idAscensor:"15653AV",
            idManualAsociado:"213342"
        }

        for(var clave in detalles){
            var detalle = document.createElement("li");
            var texto = document.createTextNode(`${clave}: ${detalles[clave]}`);
            detalle.appendChild(texto);
            var listaDetalles = document.getElementById("lDetalles");
            listaDetalles.appendChild(detalle);
        }

        //Ejemplo de muestra de comentarios
        var comentarios = ["Incidencia en proceso",
        "Arreglo de los botones de cerrar puertas",
        "Hello World",
        "Comentario de ejemplo para el proyecto del reto 3 de Desarrollo de Aplicaciones Web",
        "Lorem Ipsum is simply dummy text of the printing and typesetting industry",
        "Es práctica común en los medios de comunicación utilizar textos falsos en sus plantillas y maquetas",
        "Comentario de ejemplo",
        "Ultimo comentario"];

        var nombreUsuario="Carlos";

        //Calcula fecha actual formateada
        function calculaFecha() {
            var today = new Date();
            var dd = today.getDate();
            var mm = today.getMonth() + 1;
    
            var yyyy = today.getFullYear();
            if (dd < 10) {dd = '0' + dd;}
            if (mm < 10) {mm = '0' + mm;}
            var today = dd + '/' + mm + '/' + yyyy;

            return today;
        }

        comentarios.forEach(element => {
            var comentario = document.createElement("li");
            var textoComentario = document.createTextNode(element);
            
            /*Añadir Nombre del usuario que comenta*/
            var usuarioComentario = document.createElement("a");
            var fecha = calculaFecha()//Fecha Actual
            var usuarioComentarioTexto = document.createTextNode(`  (${nombreUsuario}) ${fecha}`);
            usuarioComentario.appendChild(usuarioComentarioTexto);
            const attr =document.createAttribute("style");
            attr.value="font-style: italic;color:steelblue;";
            usuarioComentario.setAttributeNode(attr);
            /*-------------------------*/
            comentario.appendChild(textoComentario);
            comentario.appendChild(usuarioComentario);//Añade el nombre de usuario
            comentario.classList.add("comentarioStyle");//Añade estilos a cada comentario
            var listaComentarios = document.getElementById("lcomentarios");
            listaComentarios.appendChild(comentario);
        });

        /*Muestra los ultimos comentarios (scrollbar en el bottom)
        var objDiv = document.getElementById("manOpc4");
        objDiv.scrollTop = objDiv.scrollHeight;*/
    </script>
    
</body>
</html>
