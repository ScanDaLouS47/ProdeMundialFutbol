<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @yield('imports', View('imports'))
        
        <title>ProdeMundial</title>        

        
    </head>
    <body class="antialiased">        
        @yield('menuhome', View('menuhome'))  
        <br>
        <div class="row">
            <div class="col-md-6">
                <div class="row partidosProde">
                    <div class="col-md-12 bg-primary tituloGrupos">Grupo A</div>                    
                </div> 
                <br>
                <div class="row partidosProde" style="margin-bottom: 12px;">
                    <div class="col-2 col-md-1 bg-secondary">
                        <img src="./img/banderas/ecuador.gif" class="imgBandera">
                    </div>
                    <div class="col-10 col-md-3 bg-secondary nombreEquipos"> ECUADOR</div>
                    <div class="col-6 col-md-2 bg-secondary ">
                        <input type="number" style="width: 100%">
                    </div>
                    <div class="col-6 col-md-2 bg-secondary"> 
                        <input type="number" style="width: 100%">
                    </div>
                    <div class="col-10 col-md-3 bg-secondary textoSegundoEquipo nombreEquipos">QATAR</div>  
                    <div class="col-2 col-md-1 bg-secondary">
                        <img src="./img/banderas/qatar.gif" class="imgBandera">
                    </div>       
                </div>
                <div class="row partidosProde">
                    <div class="col-2 col-md-1 bg-secondary">
                        <img src="./img/banderas/senegal.gif" class="imgBandera">
                    </div>
                    <div class="col-10 col-md-3 bg-secondary nombreEquipos">SENEGAL</div>
                    <div class="col-6 col-md-2 bg-secondary ">
                        <input type="number" style="width: 100%">
                    </div>
                    <div class="col-6 col-md-2 bg-secondary"> 
                        <input type="number" style="width: 100%">
                    </div>
                    <div class="col-10 col-md-3 bg-secondary textoSegundoEquipo nombreEquipos">PAISES BAJOS</div>    
                    <div class="col-2 col-md-1 bg-secondary">
                        <img src="./img/banderas/holanda.gif" class="imgBandera">
                    </div>     
                </div>
                <div class="row partidosProde">
                    <div class="col-2 col-md-1 bg-secondary">
                        <img src="./img/banderas/qatar.gif" class="imgBandera">
                    </div>
                    <div class="col-10 col-md-3 bg-secondary nombreEquipos">QATAR</div>
                    <div class="col-6 col-md-2 bg-secondary ">
                        <input type="number" style="width: 100%">
                    </div>
                    <div class="col-6 col-md-2 bg-secondary"> 
                        <input type="number" style="width: 100%">
                    </div>
                    <div class="col-10 col-md-3 bg-secondary textoSegundoEquipo nombreEquipos">SENEGAL</div>   
                    <div class="col-2 col-md-1 bg-secondary">
                        <img src="./img/banderas/senegal.gif" class="imgBandera">
                    </div>      
                </div>
                <div class="row partidosProde">
                    <div class="col-2 col-md-1 bg-secondary">
                        <img src="./img/banderas/ecuador.gif" class="imgBandera">
                    </div>
                    <div class="col-10 col-md-3 bg-secondary nombreEquipos">ECUADOR</div>
                    <div class="col-6 col-md-2 bg-secondary ">
                        <input type="number" style="width: 100%">
                    </div>
                    <div class="col-6 col-md-2 bg-secondary"> 
                        <input type="number" style="width: 100%">
                    </div>
                    <div class="col-10 col-md-3 bg-secondary textoSegundoEquipo nombreEquipos">PAISES BAJOS</div>   
                    <div class="col-2 col-md-1 bg-secondary">
                        <img src="./img/banderas/holanda.gif" class="imgBandera">
                    </div>      
                </div>
                <div class="row partidosProde">
                    <div class="col-2 col-md-1 bg-secondary">
                        <img src="./img/banderas/qatar.gif" class="imgBandera">
                    </div>
                    <div class="col-10 col-md-3 bg-secondary nombreEquipos">QATAR</div>
                    <div class="col-6 col-md-2 bg-secondary ">
                        <input type="number" style="width: 100%">
                    </div>
                    <div class="col-6 col-md-2 bg-secondary"> 
                        <input type="number" style="width: 100%">
                    </div>
                    <div class="col-10 col-md-3 bg-secondary textoSegundoEquipo nombreEquipos">PAISES BAJOS</div>  
                    <div class="col-2 col-md-1 bg-secondary">
                        <img src="./img/banderas/holanda.gif" class="imgBandera">
                    </div>       
                </div>
                <div class="row partidosProde">
                    <div class="col-2 col-md-1 bg-secondary">
                        <img src="./img/banderas/ecuador.gif" class="imgBandera">
                    </div>
                    <div class="col-10 col-md-3 bg-secondary nombreEquipos">ECUADOR</div>
                    <div class="col-6 col-md-2 bg-secondary ">
                        <input type="number" style="width: 100%">
                    </div>
                    <div class="col-6 col-md-2 bg-secondary"> 
                        <input type="number" style="width: 100%">
                    </div>
                    <div class="col-10 col-md-3 bg-secondary textoSegundoEquipo nombreEquipos">SENEGAL</div>  
                    <div class="col-2 col-md-1 bg-secondary">
                        <img src="./img/banderas/senegal.gif" class="imgBandera">
                    </div>       
                </div>
            </div>
            <div class="col-md-6">
                <div class="row partidosProde">
                    <div class="col-md-12 bg-primary tituloGrupos">Grupo B</div>                     
                </div> 
                <br>
                <div class="row partidosProde">
                    <div class="col-4 col-md-4 bg-secondary">INGLATERRA</div>
                    <div class="col-2 col-md-2 bg-secondary ">
                        <input type="number" style="width: 100%">
                    </div>
                    <div class="col-2 col-md-2 bg-secondary"> 
                        <input type="number" style="width: 100%">
                    </div>
                    <div class="col-4 col-md-4 bg-secondary">IRAN</div>         
                </div>
                <div class="row partidosProde">
                    <div class="col-4 col-md-4 bg-secondary">EE.UU</div>
                    <div class="col-2 col-md-2 bg-secondary ">
                        <input type="number" style="width: 100%">
                    </div>
                    <div class="col-2 col-md-2 bg-secondary"> 
                        <input type="number" style="width: 100%">
                    </div>
                    <div class="col-4 col-md-4 bg-secondary">GALES</div>         
                </div>
                <div class="row partidosProde">
                    <div class="col-4 col-md-4 bg-secondary">IRAN</div>
                    <div class="col-2 col-md-2 bg-secondary ">
                        <input type="number" style="width: 100%">
                    </div>
                    <div class="col-2 col-md-2 bg-secondary"> 
                        <input type="number" style="width: 100%">
                    </div>
                    <div class="col-4 col-md-4 bg-secondary">GALES</div>         
                </div>
                <div class="row partidosProde">
                    <div class="col-4 col-md-4 bg-secondary">INGLATERRA</div>
                    <div class="col-2 col-md-2 bg-secondary ">
                        <input type="number" style="width: 100%">
                    </div>
                    <div class="col-2 col-md-2 bg-secondary"> 
                        <input type="number" style="width: 100%">
                    </div>
                    <div class="col-4 col-md-4 bg-secondary">EE.UU</div>         
                </div>
                <div class="row partidosProde">
                    <div class="col-4 col-md-4 bg-secondary">INGLATERRA</div>
                    <div class="col-2 col-md-2 bg-secondary ">
                        <input type="number" style="width: 100%">
                    </div>
                    <div class="col-2 col-md-2 bg-secondary"> 
                        <input type="number" style="width: 100%">
                    </div>
                    <div class="col-4 col-md-4 bg-secondary">GALES</div>         
                </div>
                <div class="row partidosProde">
                    <div class="col-4 col-md-4 bg-secondary">IRAN</div>
                    <div class="col-2 col-md-2 bg-secondary ">
                        <input type="number" style="width: 100%">
                    </div>
                    <div class="col-2 col-md-2 bg-secondary"> 
                        <input type="number" style="width: 100%">
                    </div>
                    <div class="col-4 col-md-4 bg-secondary">EE.UU</div>         
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-6">
                <div class="row partidosProde">
                    <div class="col-md-12 bg-primary tituloGrupos">Grupo C</div>                                         
                </div> 
                <br>
                <div class="row partidosProde">
                    <div class="col-4 col-md-4 bg-secondary">ARGENTINA</div>
                    <div class="col-2 col-md-2 bg-secondary ">
                        <input type="number" style="width: 100%">
                    </div>
                    <div class="col-2 col-md-2 bg-secondary"> 
                        <input type="number" style="width: 100%">
                    </div>
                    <div class="col-4 col-md-4 bg-secondary">ARABIA SAUDITA</div>         
                </div>
                <div class="row partidosProde">
                    <div class="col-4 col-md-4 bg-secondary">MEXICO</div>
                    <div class="col-2 col-md-2 bg-secondary ">
                        <input type="number" style="width: 100%">
                    </div>
                    <div class="col-2 col-md-2 bg-secondary"> 
                        <input type="number" style="width: 100%">
                    </div>
                    <div class="col-4 col-md-4 bg-secondary">POLONIA</div>         
                </div>
                <div class="row partidosProde">
                    <div class="col-4 col-md-4 bg-secondary">ARABIA SAUDITA</div>
                    <div class="col-2 col-md-2 bg-secondary ">
                        <input type="number" style="width: 100%">
                    </div>
                    <div class="col-2 col-md-2 bg-secondary"> 
                        <input type="number" style="width: 100%">
                    </div>
                    <div class="col-4 col-md-4 bg-secondary">POLONIA</div>         
                </div>
                <div class="row partidosProde">
                    <div class="col-4 col-md-4 bg-secondary">ARGENTINA </div>
                    <div class="col-2 col-md-2 bg-secondary ">
                        <input type="number" style="width: 100%">
                    </div>
                    <div class="col-2 col-md-2 bg-secondary"> 
                        <input type="number" style="width: 100%">
                    </div>
                    <div class="col-4 col-md-4 bg-secondary">MEXICO</div>         
                </div>
                <div class="row partidosProde">
                    <div class="col-4 col-md-4 bg-secondary">ARGENTINA</div>
                    <div class="col-2 col-md-2 bg-secondary ">
                        <input type="number" style="width: 100%">
                    </div>
                    <div class="col-2 col-md-2 bg-secondary"> 
                        <input type="number" style="width: 100%">
                    </div>
                    <div class="col-4 col-md-4 bg-secondary">POLONIA</div>         
                </div>
                <div class="row partidosProde">
                    <div class="col-4 col-md-4 bg-secondary">ARABIA SAUDITA</div>
                    <div class="col-2 col-md-2 bg-secondary ">
                        <input type="number" style="width: 100%">
                    </div>
                    <div class="col-2 col-md-2 bg-secondary"> 
                        <input type="number" style="width: 100%">
                    </div>
                    <div class="col-4 col-md-4 bg-secondary">MEXICO</div>         
                </div>
            </div>
            <div class="col-md-6">
                <div class="row partidosProde">
                    <div class="col-md-12 bg-primary tituloGrupos">Grupo D</div>                     
                </div> 
                <br>
                <div class="row partidosProde">
                    <div class="col-4 col-md-4 bg-secondary">DINAMARCA</div>
                    <div class="col-2 col-md-2 bg-secondary ">
                        <input type="number" style="width: 100%">
                    </div>
                    <div class="col-2 col-md-2 bg-secondary"> 
                        <input type="number" style="width: 100%">
                    </div>
                    <div class="col-4 col-md-4 bg-secondary">TUNEZ</div>         
                </div>
                <div class="row partidosProde">
                    <div class="col-4 col-md-4 bg-secondary">FRANCIA</div>
                    <div class="col-2 col-md-2 bg-secondary ">
                        <input type="number" style="width: 100%">
                    </div>
                    <div class="col-2 col-md-2 bg-secondary"> 
                        <input type="number" style="width: 100%">
                    </div>
                    <div class="col-4 col-md-4 bg-secondary">AUSTRALIA</div>         
                </div>
                <div class="row partidosProde">
                    <div class="col-4 col-md-4 bg-secondary">AUSTRALIA</div>
                    <div class="col-2 col-md-2 bg-secondary ">
                        <input type="number" style="width: 100%">
                    </div>
                    <div class="col-2 col-md-2 bg-secondary"> 
                        <input type="number" style="width: 100%">
                    </div>
                    <div class="col-4 col-md-4 bg-secondary">TUNEZ</div>         
                </div>
                <div class="row partidosProde">
                    <div class="col-4 col-md-4 bg-secondary">FRANCIA</div>
                    <div class="col-2 col-md-2 bg-secondary ">
                        <input type="number" style="width: 100%">
                    </div>
                    <div class="col-2 col-md-2 bg-secondary"> 
                        <input type="number" style="width: 100%">
                    </div>
                    <div class="col-4 col-md-4 bg-secondary">DINAMARCA</div>         
                </div>
                <div class="row partidosProde">
                    <div class="col-4 col-md-4 bg-secondary">AUSTRALIA</div>
                    <div class="col-2 col-md-2 bg-secondary ">
                        <input type="number" style="width: 100%">
                    </div>
                    <div class="col-2 col-md-2 bg-secondary"> 
                        <input type="number" style="width: 100%">
                    </div>
                    <div class="col-4 col-md-4 bg-secondary">DINAMARCA</div>         
                </div>
                <div class="row partidosProde">
                    <div class="col-4 col-md-4 bg-secondary">FRANCIA</div>
                    <div class="col-2 col-md-2 bg-secondary ">
                        <input type="number" style="width: 100%">
                    </div>
                    <div class="col-2 col-md-2 bg-secondary"> 
                        <input type="number" style="width: 100%">
                    </div>
                    <div class="col-4 col-md-4 bg-secondary">TUNEZ</div>         
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-6">
                <div class="row partidosProde">
                    <div class="col-md-12 bg-primary tituloGrupos">Grupo E</div>                 
                </div> 
                <br>
                <div class="row partidosProde">
                    <div class="col-4 col-md-4 bg-secondary">ALEMANIA</div>
                    <div class="col-2 col-md-2 bg-secondary ">
                        <input type="number" style="width: 100%">
                    </div>
                    <div class="col-2 col-md-2 bg-secondary"> 
                        <input type="number" style="width: 100%">
                    </div>
                    <div class="col-4 col-md-4 bg-secondary">JAPON</div>         
                </div>
                <div class="row partidosProde">
                    <div class="col-4 col-md-4 bg-secondary">ESPAÑA</div>
                    <div class="col-2 col-md-2 bg-secondary ">
                        <input type="number" style="width: 100%">
                    </div>
                    <div class="col-2 col-md-2 bg-secondary"> 
                        <input type="number" style="width: 100%">
                    </div>
                    <div class="col-4 col-md-4 bg-secondary">COSTA RICA</div>         
                </div>
                <div class="row partidosProde">
                    <div class="col-4 col-md-4 bg-secondary">COSTA RICA</div>
                    <div class="col-2 col-md-2 bg-secondary ">
                        <input type="number" style="width: 100%">
                    </div>
                    <div class="col-2 col-md-2 bg-secondary"> 
                        <input type="number" style="width: 100%">
                    </div>
                    <div class="col-4 col-md-4 bg-secondary">JAPON</div>         
                </div>
                <div class="row partidosProde">
                    <div class="col-4 col-md-4 bg-secondary">ESPAÑA </div>
                    <div class="col-2 col-md-2 bg-secondary ">
                        <input type="number" style="width: 100%">
                    </div>
                    <div class="col-2 col-md-2 bg-secondary"> 
                        <input type="number" style="width: 100%">
                    </div>
                    <div class="col-4 col-md-4 bg-secondary">ALEMANIA</div>         
                </div>
                <div class="row partidosProde">
                    <div class="col-4 col-md-4 bg-secondary">ESPAÑA</div>
                    <div class="col-2 col-md-2 bg-secondary ">
                        <input type="number" style="width: 100%">
                    </div>
                    <div class="col-2 col-md-2 bg-secondary"> 
                        <input type="number" style="width: 100%">
                    </div>
                    <div class="col-4 col-md-4 bg-secondary">JAPON</div>         
                </div>
                <div class="row partidosProde">
                    <div class="col-4 col-md-4 bg-secondary">COSTA RICA</div>
                    <div class="col-2 col-md-2 bg-secondary ">
                        <input type="number" style="width: 100%">
                    </div>
                    <div class="col-2 col-md-2 bg-secondary"> 
                        <input type="number" style="width: 100%">
                    </div>
                    <div class="col-4 col-md-4 bg-secondary">ALEMANIA</div>         
                </div>
            </div>
            <div class="col-md-6">
                <div class="row partidosProde">
                    <div class="col-md-12 bg-primary tituloGrupos">Grupo F</div>                     
                </div> 
                <br>
                <div class="row partidosProde">
                    <div class="col-4 col-md-4 bg-secondary">MARRUECOS</div>
                    <div class="col-2 col-md-2 bg-secondary ">
                        <input type="number" style="width: 100%">
                    </div>
                    <div class="col-2 col-md-2 bg-secondary"> 
                        <input type="number" style="width: 100%">
                    </div>
                    <div class="col-4 col-md-4 bg-secondary">CROACIA</div>         
                </div>
                <div class="row partidosProde">
                    <div class="col-4 col-md-4 bg-secondary">BELGICA</div>
                    <div class="col-2 col-md-2 bg-secondary ">
                        <input type="number" style="width: 100%">
                    </div>
                    <div class="col-2 col-md-2 bg-secondary"> 
                        <input type="number" style="width: 100%">
                    </div>
                    <div class="col-4 col-md-4 bg-secondary">CANADA</div>         
                </div>
                <div class="row partidosProde">
                    <div class="col-4 col-md-4 bg-secondary">BELGICA</div>
                    <div class="col-2 col-md-2 bg-secondary ">
                        <input type="number" style="width: 100%">
                    </div>
                    <div class="col-2 col-md-2 bg-secondary"> 
                        <input type="number" style="width: 100%">
                    </div>
                    <div class="col-4 col-md-4 bg-secondary">MARRUECOS</div>         
                </div>
                <div class="row partidosProde">
                    <div class="col-4 col-md-4 bg-secondary">CANADA</div>
                    <div class="col-2 col-md-2 bg-secondary ">
                        <input type="number" style="width: 100%">
                    </div>
                    <div class="col-2 col-md-2 bg-secondary"> 
                        <input type="number" style="width: 100%">
                    </div>
                    <div class="col-4 col-md-4 bg-secondary">CROACIA</div>         
                </div>
                <div class="row partidosProde">
                    <div class="col-4 col-md-4 bg-secondary">BELGICA</div>
                    <div class="col-2 col-md-2 bg-secondary ">
                        <input type="number" style="width: 100%">
                    </div>
                    <div class="col-2 col-md-2 bg-secondary"> 
                        <input type="number" style="width: 100%">
                    </div>
                    <div class="col-4 col-md-4 bg-secondary">CROACIA</div>         
                </div>
                <div class="row partidosProde">
                    <div class="col-4 col-md-4 bg-secondary">CANADA</div>
                    <div class="col-2 col-md-2 bg-secondary ">
                        <input type="number" style="width: 100%">
                    </div>
                    <div class="col-2 col-md-2 bg-secondary"> 
                        <input type="number" style="width: 100%">
                    </div>
                    <div class="col-4 col-md-4 bg-secondary">MARRUECOS</div>         
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-6">
                <div class="row partidosProde">
                    <div class="col-md-12 bg-primary tituloGrupos">Grupo G</div>                     
                </div> 
                <br>
                <div class="row partidosProde">
                    <div class="col-4 col-md-4 bg-secondary">SUIZA</div>
                    <div class="col-2 col-md-2 bg-secondary ">
                        <input type="number" style="width: 100%">
                    </div>
                    <div class="col-2 col-md-2 bg-secondary"> 
                        <input type="number" style="width: 100%">
                    </div>
                    <div class="col-4 col-md-4 bg-secondary">CAMERUN</div>         
                </div>
                <div class="row partidosProde">
                    <div class="col-4 col-md-4 bg-secondary">BRASIL</div>
                    <div class="col-2 col-md-2 bg-secondary ">
                        <input type="number" style="width: 100%">
                    </div>
                    <div class="col-2 col-md-2 bg-secondary"> 
                        <input type="number" style="width: 100%">
                    </div>
                    <div class="col-4 col-md-4 bg-secondary">SERBIA</div>         
                </div>
                <div class="row partidosProde">
                    <div class="col-4 col-md-4 bg-secondary">SERBIA</div>
                    <div class="col-2 col-md-2 bg-secondary ">
                        <input type="number" style="width: 100%">
                    </div>
                    <div class="col-2 col-md-2 bg-secondary"> 
                        <input type="number" style="width: 100%">
                    </div>
                    <div class="col-4 col-md-4 bg-secondary">CAMERUN</div>         
                </div>
                <div class="row partidosProde">
                    <div class="col-4 col-md-4 bg-secondary">BRASIL</div>
                    <div class="col-2 col-md-2 bg-secondary ">
                        <input type="number" style="width: 100%">
                    </div>
                    <div class="col-2 col-md-2 bg-secondary"> 
                        <input type="number" style="width: 100%">
                    </div>
                    <div class="col-4 col-md-4 bg-secondary">SUIZA</div>         
                </div>
                <div class="row partidosProde">
                    <div class="col-4 col-md-4 bg-secondary">BRASIL</div>
                    <div class="col-2 col-md-2 bg-secondary ">
                        <input type="number" style="width: 100%">
                    </div>
                    <div class="col-2 col-md-2 bg-secondary"> 
                        <input type="number" style="width: 100%">
                    </div>
                    <div class="col-4 col-md-4 bg-secondary">CAMERUN</div>         
                </div>
                <div class="row partidosProde">
                    <div class="col-4 col-md-4 bg-secondary">SERBIA</div>
                    <div class="col-2 col-md-2 bg-secondary ">
                        <input type="number" style="width: 100%">
                    </div>
                    <div class="col-2 col-md-2 bg-secondary"> 
                        <input type="number" style="width: 100%">
                    </div>
                    <div class="col-4 col-md-4 bg-secondary">SUIZA</div>         
                </div>
            </div>
            <div class="col-md-6">
                <div class="row partidosProde">
                    <div class="col-md-12 bg-primary tituloGrupos">Grupo H</div>                    
                </div> 
                <br>
                <div class="row partidosProde">
                    <div class="col-4 col-md-4 bg-secondary">URUGUAY</div>
                    <div class="col-2 col-md-2 bg-secondary ">
                        <input type="number" style="width: 100%">
                    </div>
                    <div class="col-2 col-md-2 bg-secondary"> 
                        <input type="number" style="width: 100%">
                    </div>
                    <div class="col-4 col-md-4 bg-secondary">COREA DEL SUR</div>         
                </div>
                <div class="row partidosProde">
                    <div class="col-4 col-md-4 bg-secondary">PORTUGAL</div>
                    <div class="col-2 col-md-2 bg-secondary ">
                        <input type="number" style="width: 100%">
                    </div>
                    <div class="col-2 col-md-2 bg-secondary"> 
                        <input type="number" style="width: 100%">
                    </div>
                    <div class="col-4 col-md-4 bg-secondary">GHANA</div>         
                </div>
                <div class="row partidosProde">
                    <div class="col-4 col-md-4 bg-secondary">GHANA</div>
                    <div class="col-2 col-md-2 bg-secondary ">
                        <input type="number" style="width: 100%">
                    </div>
                    <div class="col-2 col-md-2 bg-secondary"> 
                        <input type="number" style="width: 100%">
                    </div>
                    <div class="col-4 col-md-4 bg-secondary">COREA DEL SUR</div>         
                </div>
                <div class="row partidosProde">
                    <div class="col-4 col-md-4 bg-secondary">PORTUGAL</div>
                    <div class="col-2 col-md-2 bg-secondary ">
                        <input type="number" style="width: 100%">
                    </div>
                    <div class="col-2 col-md-2 bg-secondary"> 
                        <input type="number" style="width: 100%">
                    </div>
                    <div class="col-4 col-md-4 bg-secondary">URUGUAY</div>         
                </div>
                <div class="row partidosProde">
                    <div class="col-4 col-md-4 bg-secondary">PORTUGAL</div>
                    <div class="col-2 col-md-2 bg-secondary ">
                        <input type="number" style="width: 100%">
                    </div>
                    <div class="col-2 col-md-2 bg-secondary"> 
                        <input type="number" style="width: 100%">
                    </div>
                    <div class="col-4 col-md-4 bg-secondary">COREA DEL SUR</div>         
                </div>
                <div class="row partidosProde">
                    <div class="col-4 col-md-4 bg-secondary">GHANA </div>
                    <div class="col-2 col-md-2 bg-secondary ">
                        <input type="number" style="width: 100%">
                    </div>
                    <div class="col-2 col-md-2 bg-secondary"> 
                        <input type="number" style="width: 100%">
                    </div>
                    <div class="col-4 col-md-4 bg-secondary">URUGUAY</div>         
                </div>
            </div>
        </div>
        <br>

        @if(session('resp') == 'ok')
          <script>
            
            // Swal.fire({
            //   title: 'Se ha registrado correctamente. Ahora puede entrar a nuestra app',
            //   width: 600,
            //   padding: '3em',
            //   color: '#fff',
            //   // color: '#716add',
            //   background: '#8c183d url(/images/trees.png)',
            //   backdrop: `
            //     rgba(0,0,125,0.4)              
            //     url("/img/qatar.gif")
            //     center top
            //     no-repeat
            //   `
            // })
          </script>
        @else
        <script>            
        //   Swal.fire({
        //     title: 'El usuario no se pudo registrar intentelo mas tarde.',
        //     width: 600,
        //     padding: '3em',
        //     color: '#fff',
        //     // color: '#716add',
        //     background: '#8c183d url(/images/trees.png)',
        //     backdrop: `
        //       rgba(0,0,125,0.4)              
        //       url("/img/qatar.gif")
        //       center top
        //       no-repeat
        //     `
        //   })
        </script>
        @endif

            
        @yield('footer', View('footer'))
    </body>
</html>