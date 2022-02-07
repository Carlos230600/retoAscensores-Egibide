<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Manuales</title>
<script>
//Web component
    class Manual extends HTMLElement{
        
        constructor(){
            super();

            this.addEventListener("click",function(){
            //abrir prf
            window.open('./Práctica Heroku.pdf');
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
                    background-image:linear-gradient(rgb(214, 231, 245), lightsteelblue), url("./vector3.jpg");
                    background-size: cover;
                    background-blend-mode: multiply;
                }
                
                .opciones li{
                    margin: 6px;
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
            <div class="tecnicosOpc2">
                <div class="imagenTecn">
                    <svg xmlns="http://www.w3.org/2000/svg" width="4pc" height="4.1pc" fill="currentColor" class="bi bi-info" viewBox="0 0 16 16">
                    <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                    </svg>
                </div>
                
                <div class="opciones">
                    <ul>
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
                        <li style="font-weight:500;">${this.getAttribute("modeloAscensor")}</li>
                        <li>${this.getAttribute("idManual")}</li>
                    </ul>
                </div>
            </div>
            `;
        }

    }

    window.customElements.define("manual-p", Manual);
</script>
<style>
    *{
        font-size: 1.35pc;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    .mainmanuales{
        width: 96%;
        margin: 0 2%;
        height: auto;
    }

    .mainmanuales ul{
        list-style: none;
        margin: 0;
        padding: 0%;
    }

    .mainmanuales li{
        margin:0;
    }

    .manOpc{
        width: 100%;
        height: 70px;
        border-radius: 0.4em;  
        display: flex;
        justify-content: center;
        align-items: center;
        /*box-shadow: 0px 0px 2px grey;*/
        margin-bottom: 0%;
    }

    .subMan{
        background: linear-gradient(rgb(164, 228, 122), rgb(148, 202, 111));
        margin: 3% 0;
    }

    .contflex{
        display: flex;
        flex-direction: row;
        justify-content: space-around;
    }

    .manOpc2{
        height: 70px;
        border-radius: 0.4em;
        display: flex;
        justify-content: center;
        align-items: center; 
        /*box-shadow: 0px 0px 2px grey;*/
    }
    
    .manOpc3{
        height: auto;
    }

    #listaManuales{
        width: 100%;
        height: auto;
        margin: 0% auto;
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
    }

    #listaManuales >li{
        width: 50%;
    }

</style>
</head>
<body>
    @include('header')

    <div class="mainmanuales">
        <ul>
            <li>
                <div class="manOpc">
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
            </li>
            <li><div class="manOpc subMan">Subir Nuevo Manual</div></li>
            <li>
                <div class="contflex">
                    <div class="manOpc2" style="flex-grow: 0.5;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-filter" viewBox="0 0 16 16">
                            <path d="M6 10.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5zm-2-3a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm-2-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z"/>
                        </svg>
                    </div>
                    <!--Busqueda-->
                    <div class="manOpc2" style="flex-grow: 2;">
                        <div class="input-group mb-3" style="margin: 0;display: flex;justify-content: center;align-items: center;">
                            <input type="text" class="form-control" placeholder="Buscar en manuales..." aria-label="Buscar en manuales..." aria-describedby="basic-addon2">
                            <div class="input-group-append">
                              <span class="input-group-text" id="basic-addon2">Buscar</span>
                            </div>
                          </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="manOpc manOpc3">
                    <ul id="listaManuales">
                        <!--Poner datos aqui-->
                    </ul>
                </div>
            </li>
        </ul>
    </div>


    <script>
        var manuales=[
            {idManual:"2D13Va",modeloAscensor:"Kobra"},
            {idManual:"2D13Va",modeloAscensor:"Boa"},
            {idManual:"2D13Va",modeloAscensor:"Titan"},
            {idManual:"2D13Va",modeloAscensor:"Spider"},
            {idManual:"2D13Va",modeloAscensor:"E3MKA"},
            {idManual:"2D13Va",modeloAscensor:"CC32A"},
            {idManual:"2D13Va",modeloAscensor:"KDSL3"},
            {idManual:"2D13Va",modeloAscensor:"4OASF"}
        ];    

        for(let i=0;i<manuales.length;i++){
            var item=document.createElement("li");
            var elemento = document.createElement("manual-p");
            elemento.setAttribute("idManual",manuales[i]["idManual"]);
            elemento.setAttribute("modeloAscensor",manuales[i]["modeloAscensor"]);//Paso los datos del array mediante un atributo al web component
            item.appendChild(elemento);
            document.getElementById("listaManuales").appendChild(item);
        }

    </script>
</body>
</html>
