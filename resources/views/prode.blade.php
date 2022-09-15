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
                    <div class="col-2 col-md-1 bg-secondary">
                        <img src="./img/banderas/inglaterra.gif" class="imgBandera">
                    </div>
                    <div class="col-10 col-md-3 bg-secondary nombreEquipos">INGLATERRA</div>
                    <div class="col-6 col-md-2 bg-secondary ">
                        <input type="number" style="width: 100%">
                    </div>
                    <div class="col-6 col-md-2 bg-secondary"> 
                        <input type="number" style="width: 100%">
                    </div>
                    <div class="col-10 col-md-3 bg-secondary textoSegundoEquipo nombreEquipos">IRAN</div>   
                    <div class="col-2 col-md-1 bg-secondary">
                        <img src="./img/banderas/iran.gif" class="imgBandera">
                    </div>
                </div>
                <div class="row partidosProde">
                    <div class="col-2 col-md-1 bg-secondary">
                        <img src="./img/banderas/eeuu.gif" class="imgBandera">
                    </div>
                    <div class="col-10 col-md-3 bg-secondary nombreEquipos">EE.UU</div>
                    <div class="col-6 col-md-2 bg-secondary ">
                        <input type="number" style="width: 100%">
                    </div>
                    <div class="col-6 col-md-2 bg-secondary"> 
                        <input type="number" style="width: 100%">
                    </div>
                    <div class="col-10 col-md-3 bg-secondary textoSegundoEquipo nombreEquipos">GALES</div>  
                    <div class="col-2 col-md-1 bg-secondary">
                        <img src="./img/banderas/gales.gif" class="imgBandera">
                    </div>       
                </div>
                <div class="row partidosProde">
                    <div class="col-2 col-md-1 bg-secondary">
                        <img src="./img/banderas/iran.gif" class="imgBandera">
                    </div>
                    <div class="col-10 col-md-3 bg-secondary nombreEquipos">IRAN</div>
                    <div class="col-6 col-md-2 bg-secondary ">
                        <input type="number" style="width: 100%">
                    </div>
                    <div class="col-6 col-md-2 bg-secondary"> 
                        <input type="number" style="width: 100%">
                    </div>
                    <div class="col-10 col-md-3 bg-secondary textoSegundoEquipo nombreEquipos">GALES</div>     
                    <div class="col-2 col-md-1 bg-secondary">
                        <img src="./img/banderas/gales.gif" class="imgBandera">
                    </div>    
                </div>
                <div class="row partidosProde">
                    <div class="col-2 col-md-1 bg-secondary">
                        <img src="./img/banderas/inglaterra.gif" class="imgBandera">
                    </div>
                    <div class="col-10 col-md-3 bg-secondary nombreEquipos">INGLATERRA</div>
                    <div class="col-6 col-md-2 bg-secondary ">
                        <input type="number" style="width: 100%">
                    </div>
                    <div class="col-6 col-md-2 bg-secondary"> 
                        <input type="number" style="width: 100%">
                    </div>
                    <div class="col-10 col-md-3 bg-secondary textoSegundoEquipo nombreEquipos">EE.UU</div> 
                    <div class="col-2 col-md-1 bg-secondary">
                        <img src="./img/banderas/eeuu.gif" class="imgBandera">
                    </div>        
                </div>
                <div class="row partidosProde">
                    <div class="col-2 col-md-1 bg-secondary">
                        <img src="./img/banderas/inglaterra.gif" class="imgBandera">
                    </div>
                    <div class="col-10 col-md-3 bg-secondary nombreEquipos">INGLATERRA</div>
                    <div class="col-6 col-md-2 bg-secondary ">
                        <input type="number" style="width: 100%">
                    </div>
                    <div class="col-6 col-md-2 bg-secondary"> 
                        <input type="number" style="width: 100%">
                    </div>
                    <div class="col-10 col-md-3 bg-secondary textoSegundoEquipo nombreEquipos">GALES</div>         
                    <div class="col-2 col-md-1 bg-secondary">
                        <img src="./img/banderas/gales.gif" class="imgBandera">
                    </div>
                </div>
                <div class="row partidosProde">
                    <div class="col-2 col-md-1 bg-secondary">
                        <img src="./img/banderas/iran.gif" class="imgBandera">
                    </div>
                    <div class="col-10 col-md-3 bg-secondary nombreEquipos">IRAN</div>
                    <div class="col-6 col-md-2 bg-secondary ">
                        <input type="number" style="width: 100%">
                    </div>
                    <div class="col-6 col-md-2 bg-secondary"> 
                        <input type="number" style="width: 100%">
                    </div>
                    <div class="col-10 col-md-3 bg-secondary textoSegundoEquipo nombreEquipos">EE.UU</div>   
                    <div class="col-2 col-md-1 bg-secondary">
                        <img src="./img/banderas/eeuu.gif" class="imgBandera">
                    </div>      
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
                    <div class="col-2 col-md-1 bg-secondary">
                        <img src="./img/banderas/argentina.gif" class="imgBandera">
                    </div>
                    <div class="col-10 col-md-3 bg-secondary nombreEquipos">ARGENTINA</div>
                    <div class="col-6 col-md-2 bg-secondary ">
                        <input type="number" style="width: 100%">
                    </div>
                    <div class="col-6 col-md-2 bg-secondary"> 
                        <input type="number" style="width: 100%">
                    </div>
                    <div class="col-10 col-md-3 bg-secondary textoSegundoEquipo nombreEquipos">ARABIA SAUDITA</div>    
                    <div class="col-2 col-md-1 bg-secondary">
                        <img src="./img/banderas/arabia-saudita.gif" class="imgBandera">
                    </div>     
                </div>
                <div class="row partidosProde">
                    <div class="col-2 col-md-1 bg-secondary">
                        <img src="./img/banderas/mexico.gif" class="imgBandera">
                    </div>
                    <div class="col-10 col-md-3 bg-secondary nombreEquipos">MEXICO</div>
                    <div class="col-6 col-md-2 bg-secondary ">
                        <input type="number" style="width: 100%">
                    </div>
                    <div class="col-6 col-md-2 bg-secondary"> 
                        <input type="number" style="width: 100%">
                    </div>
                    <div class="col-10 col-md-3 bg-secondary textoSegundoEquipo nombreEquipos">POLONIA</div>  
                    <div class="col-2 col-md-1 bg-secondary">
                        <img src="./img/banderas/polonia.gif" class="imgBandera">
                    </div>       
                </div>
                <div class="row partidosProde">
                    <div class="col-2 col-md-1 bg-secondary">
                        <img src="./img/banderas/arabia-saudita.gif" class="imgBandera">
                    </div>
                    <div class="col-10 col-md-3 bg-secondary nombreEquipos">ARABIA SAUDITA</div>
                    <div class="col-6 col-md-2 bg-secondary ">
                        <input type="number" style="width: 100%">
                    </div>
                    <div class="col-6 col-md-2 bg-secondary"> 
                        <input type="number" style="width: 100%">
                    </div>
                    <div class="col-10 col-md-3 bg-secondary textoSegundoEquipo nombreEquipos">POLONIA</div>  
                    <div class="col-2 col-md-1 bg-secondary">
                        <img src="./img/banderas/polonia.gif" class="imgBandera">
                    </div>       
                </div>
                <div class="row partidosProde">
                    <div class="col-2 col-md-1 bg-secondary">
                        <img src="./img/banderas/argentina.gif" class="imgBandera">
                    </div>
                    <div class="col-10 col-md-3 bg-secondary nombreEquipos">ARGENTINA </div>
                    <div class="col-6 col-md-2 bg-secondary ">
                        <input type="number" style="width: 100%">
                    </div>
                    <div class="col-6 col-md-2 bg-secondary"> 
                        <input type="number" style="width: 100%">
                    </div>
                    <div class="col-10 col-md-3 bg-secondary textoSegundoEquipo nombreEquipos">MEXICO</div>     
                    <div class="col-2 col-md-1 bg-secondary">
                        <img src="./img/banderas/mexico.gif" class="imgBandera">
                    </div>    
                </div>
                <div class="row partidosProde">
                    <div class="col-2 col-md-1 bg-secondary">
                        <img src="./img/banderas/argentina.gif" class="imgBandera">
                    </div>
                    <div class="col-10 col-md-3 bg-secondary nombreEquipos">ARGENTINA</div>
                    <div class="col-6 col-md-2 bg-secondary ">
                        <input type="number" style="width: 100%">
                    </div>
                    <div class="col-6 col-md-2 bg-secondary"> 
                        <input type="number" style="width: 100%">
                    </div>
                    <div class="col-10 col-md-3 bg-secondary textoSegundoEquipo nombreEquipos">POLONIA</div>  
                    <div class="col-2 col-md-1 bg-secondary">
                        <img src="./img/banderas/polonia.gif" class="imgBandera">
                    </div>       
                </div>
                <div class="row partidosProde">
                    <div class="col-2 col-md-1 bg-secondary">
                        <img src="./img/banderas/arabia-saudita.gif" class="imgBandera">
                    </div>
                    <div class="col-10 col-md-3 bg-secondary nombreEquipos">ARABIA SAUDITA</div>
                    <div class="col-6 col-md-2 bg-secondary ">
                        <input type="number" style="width: 100%">
                    </div>
                    <div class="col-6 col-md-2 bg-secondary"> 
                        <input type="number" style="width: 100%">
                    </div>
                    <div class="col-10 col-md-3 bg-secondary textoSegundoEquipo nombreEquipos">MEXICO</div>     
                    <div class="col-2 col-md-1 bg-secondary">
                        <img src="./img/banderas/mexico.gif" class="imgBandera">
                    </div>    
                </div>
            </div>
            <div class="col-md-6">
                <div class="row partidosProde">
                    <div class="col-md-12 bg-primary tituloGrupos">Grupo D</div>                     
                </div> 
                <br>
                <div class="row partidosProde">
                    <div class="col-2 col-md-1 bg-secondary">
                        <img src="./img/banderas/dinamarca.gif" class="imgBandera">
                    </div>
                    <div class="col-10 col-md-3 bg-secondary nombreEquipos">DINAMARCA</div>
                    <div class="col-6 col-md-2 bg-secondary ">
                        <input type="number" style="width: 100%">
                    </div>
                    <div class="col-6 col-md-2 bg-secondary"> 
                        <input type="number" style="width: 100%">
                    </div>
                    <div class="col-10 col-md-3 bg-secondary textoSegundoEquipo nombreEquipos">TUNEZ</div>   
                    <div class="col-2 col-md-1 bg-secondary">
                        <img src="./img/banderas/tunez.gif" class="imgBandera">
                    </div>      
                </div>
                <div class="row partidosProde">
                    <div class="col-2 col-md-1 bg-secondary">
                        <img src="./img/banderas/franc.gif" class="imgBandera">
                    </div>
                    <div class="col-10 col-md-3 bg-secondary nombreEquipos">FRANCIA</div>
                    <div class="col-6 col-md-2 bg-secondary ">
                        <input type="number" style="width: 100%">
                    </div>
                    <div class="col-6 col-md-2 bg-secondary"> 
                        <input type="number" style="width: 100%">
                    </div>
                    <div class="col-10 col-md-3 bg-secondary textoSegundoEquipo nombreEquipos">AUSTRALIA</div>  
                    <div class="col-2 col-md-1 bg-secondary">
                        <img src="./img/banderas/australia.gif" class="imgBandera">
                    </div>       
                </div>
                <div class="row partidosProde">
                    <div class="col-2 col-md-1 bg-secondary">
                        <img src="./img/banderas/australia.gif" class="imgBandera">
                    </div>
                    <div class="col-10 col-md-3 bg-secondary nombreEquipos">AUSTRALIA</div>
                    <div class="col-6 col-md-2 bg-secondary ">
                        <input type="number" style="width: 100%">
                    </div>
                    <div class="col-6 col-md-2 bg-secondary"> 
                        <input type="number" style="width: 100%">
                    </div>
                    <div class="col-10 col-md-3 bg-secondary textoSegundoEquipo nombreEquipos">TUNEZ</div>      
                    <div class="col-2 col-md-1 bg-secondary">
                        <img src="./img/banderas/tunez.gif" class="imgBandera">
                    </div>   
                </div>
                <div class="row partidosProde">
                    <div class="col-2 col-md-1 bg-secondary">
                        <img src="./img/banderas/franc.gif" class="imgBandera">
                    </div>
                    <div class="col-10 col-md-3 bg-secondary nombreEquipos">FRANCIA</div>
                    <div class="col-6 col-md-2 bg-secondary ">
                        <input type="number" style="width: 100%">
                    </div>
                    <div class="col-6 col-md-2 bg-secondary"> 
                        <input type="number" style="width: 100%">
                    </div>
                    <div class="col-10 col-md-3 bg-secondary textoSegundoEquipo nombreEquipos">DINAMARCA</div>    
                    <div class="col-2 col-md-1 bg-secondary">
                        <img src="./img/banderas/dinamarca.gif" class="imgBandera">
                    </div>     
                </div>
                <div class="row partidosProde">
                    <div class="col-2 col-md-1 bg-secondary">
                        <img src="./img/banderas/australia.gif" class="imgBandera">
                    </div>
                    <div class="col-10 col-md-3 bg-secondary nombreEquipos">AUSTRALIA</div>
                    <div class="col-6 col-md-2 bg-secondary ">
                        <input type="number" style="width: 100%">
                    </div>
                    <div class="col-6 col-md-2 bg-secondary"> 
                        <input type="number" style="width: 100%">
                    </div>
                    <div class="col-10 col-md-3 bg-secondary textoSegundoEquipo nombreEquipos">DINAMARCA</div>   
                    <div class="col-2 col-md-1 bg-secondary">
                        <img src="./img/banderas/dinamarca.gif" class="imgBandera">
                    </div>      
                </div>
                <div class="row partidosProde">
                    <div class="col-2 col-md-1 bg-secondary">
                        <img src="./img/banderas/franc.gif" class="imgBandera">
                    </div>
                    <div class="col-10 col-md-3 bg-secondary nombreEquipos">FRANCIA</div>
                    <div class="col-6 col-md-2 bg-secondary ">
                        <input type="number" style="width: 100%">
                    </div>
                    <div class="col-6 col-md-2 bg-secondary"> 
                        <input type="number" style="width: 100%">
                    </div>
                    <div class="col-10 col-md-3 bg-secondary textoSegundoEquipo nombreEquipos">TUNEZ</div>  
                    <div class="col-2 col-md-1 bg-secondary">
                        <img src="./img/banderas/tunez.gif" class="imgBandera">
                    </div>       
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
                    <div class="col-2 col-md-1 bg-secondary">
                        <img src="./img/banderas/alemania.gif" class="imgBandera">
                    </div>
                    <div class="col-10 col-md-3 bg-secondary nombreEquipos">ALEMANIA</div>
                    <div class="col-6 col-md-2 bg-secondary ">
                        <input type="number" style="width: 100%">
                    </div>
                    <div class="col-6 col-md-2 bg-secondary"> 
                        <input type="number" style="width: 100%">
                    </div>
                    <div class="col-10 col-md-3 bg-secondary textoSegundoEquipo nombreEquipos">JAPON</div>  
                    <div class="col-2 col-md-1 bg-secondary">
                        <img src="./img/banderas/japon.gif" class="imgBandera">
                    </div>       
                </div>
                <div class="row partidosProde">
                    <div class="col-2 col-md-1 bg-secondary">
                        <img src="./img/banderas/españa.gif" class="imgBandera">
                    </div>
                    <div class="col-10 col-md-3 bg-secondary nombreEquipos">ESPAÑA</div>
                    <div class="col-6 col-md-2 bg-secondary ">
                        <input type="number" style="width: 100%">
                    </div>
                    <div class="col-6 col-md-2 bg-secondary"> 
                        <input type="number" style="width: 100%">
                    </div>
                    <div class="col-10 col-md-3 bg-secondary textoSegundoEquipo nombreEquipos">COSTA RICA</div>    
                    <div class="col-2 col-md-1 bg-secondary">
                        <img src="./img/banderas/costa-rica.gif" class="imgBandera">
                    </div>     
                </div>
                <div class="row partidosProde">
                    <div class="col-2 col-md-1 bg-secondary">
                        <img src="./img/banderas/costa-rica.gif" class="imgBandera">
                    </div>
                    <div class="col-10 col-md-3 bg-secondary nombreEquipos">COSTA RICA</div>
                    <div class="col-6 col-md-2 bg-secondary ">
                        <input type="number" style="width: 100%">
                    </div>
                    <div class="col-6 col-md-2 bg-secondary"> 
                        <input type="number" style="width: 100%">
                    </div>
                    <div class="col-10 col-md-3 bg-secondary textoSegundoEquipo nombreEquipos">JAPON</div>  
                    <div class="col-2 col-md-1 bg-secondary">
                        <img src="./img/banderas/japon.gif" class="imgBandera">
                    </div>       
                </div>
                <div class="row partidosProde">
                    <div class="col-2 col-md-1 bg-secondary">
                        <img src="./img/banderas/españa.gif" class="imgBandera">
                    </div>
                    <div class="col-10 col-md-3 bg-secondary nombreEquipos">ESPAÑA </div>
                    <div class="col-6 col-md-2 bg-secondary ">
                        <input type="number" style="width: 100%">
                    </div>
                    <div class="col-6 col-md-2 bg-secondary"> 
                        <input type="number" style="width: 100%">
                    </div>
                    <div class="col-10 col-md-3 bg-secondary textoSegundoEquipo nombreEquipos">ALEMANIA</div>   
                    <div class="col-2 col-md-1 bg-secondary">
                        <img src="./img/banderas/alemania.gif" class="imgBandera">
                    </div>      
                </div>
                <div class="row partidosProde">
                    <div class="col-2 col-md-1 bg-secondary">
                        <img src="./img/banderas/españa.gif" class="imgBandera">
                    </div>
                    <div class="col-10 col-md-3 bg-secondary nombreEquipos">ESPAÑA</div>
                    <div class="col-6 col-md-2 bg-secondary ">
                        <input type="number" style="width: 100%">
                    </div>
                    <div class="col-6 col-md-2 bg-secondary"> 
                        <input type="number" style="width: 100%">
                    </div>
                    <div class="col-10 col-md-3 bg-secondary textoSegundoEquipo nombreEquipos">JAPON</div>       
                    <div class="col-2 col-md-1 bg-secondary">
                        <img src="./img/banderas/japon.gif" class="imgBandera">
                    </div>  
                </div>
                <div class="row partidosProde">
                    <div class="col-2 col-md-1 bg-secondary">
                        <img src="./img/banderas/costa-rica.gif" class="imgBandera">
                    </div>
                    <div class="col-10 col-md-3 bg-secondary nombreEquipos">COSTA RICA</div>
                    <div class="col-6 col-md-2 bg-secondary ">
                        <input type="number" style="width: 100%">
                    </div>
                    <div class="col-6 col-md-2 bg-secondary"> 
                        <input type="number" style="width: 100%">
                    </div>
                    <div class="col-10 col-md-3 bg-secondary textoSegundoEquipo nombreEquipos">ALEMANIA</div> 
                    <div class="col-2 col-md-1 bg-secondary">
                        <img src="./img/banderas/alemania.gif" class="imgBandera">
                    </div>        
                </div>
            </div>
            <div class="col-md-6">
                <div class="row partidosProde">
                    <div class="col-md-12 bg-primary tituloGrupos">Grupo F</div>                     
                </div> 
                <br>
                <div class="row partidosProde">
                    <div class="col-2 col-md-1 bg-secondary">
                        <img src="./img/banderas/marruecos.gif" class="imgBandera">
                    </div>
                    <div class="col-10 col-md-3 bg-secondary nombreEquipos">MARRUECOS</div>
                    <div class="col-6 col-md-2 bg-secondary ">
                        <input type="number" style="width: 100%">
                    </div>
                    <div class="col-6 col-md-2 bg-secondary"> 
                        <input type="number" style="width: 100%">
                    </div>
                    <div class="col-10 col-md-3 bg-secondary textoSegundoEquipo nombreEquipos">CROACIA</div>         
                    <div class="col-2 col-md-1 bg-secondary">
                        <img src="./img/banderas/croacia.gif" class="imgBandera">
                    </div>
                </div>
                <div class="row partidosProde">
                    <div class="col-2 col-md-1 bg-secondary">
                        <img src="./img/banderas/belgica.gif" class="imgBandera">
                    </div>
                    <div class="col-10 col-md-3 bg-secondary nombreEquipos">BELGICA</div>
                    <div class="col-6 col-md-2 bg-secondary ">
                        <input type="number" style="width: 100%">
                    </div>
                    <div class="col-6 col-md-2 bg-secondary"> 
                        <input type="number" style="width: 100%">
                    </div>
                    <div class="col-10 col-md-3 bg-secondary textoSegundoEquipo nombreEquipos">CANADA</div> 
                    <div class="col-2 col-md-1 bg-secondary">
                        <img src="./img/banderas/canad.png" class="imgBandera">
                    </div>       
                </div>
                <div class="row partidosProde">
                    <div class="col-2 col-md-1 bg-secondary">
                        <img src="./img/banderas/belgica.gif" class="imgBandera">
                    </div>
                    <div class="col-10 col-md-3 bg-secondary nombreEquipos">BELGICA</div>
                    <div class="col-6 col-md-2 bg-secondary ">
                        <input type="number" style="width: 100%">
                    </div>
                    <div class="col-6 col-md-2 bg-secondary"> 
                        <input type="number" style="width: 100%">
                    </div>
                    <div class="col-10 col-md-3 bg-secondary textoSegundoEquipo nombreEquipos">MARRUECOS</div>  
                    <div class="col-2 col-md-1 bg-secondary">
                        <img src="./img/banderas/marruecos.gif" class="imgBandera">
                    </div>       
                </div>
                <div class="row partidosProde">
                    <div class="col-2 col-md-1 bg-secondary">
                        <img src="./img/banderas/canad.png" class="imgBandera">
                    </div>
                    <div class="col-10 col-md-3 bg-secondary nombreEquipos">CANADA</div>
                    <div class="col-6 col-md-2 bg-secondary ">
                        <input type="number" style="width: 100%">
                    </div>
                    <div class="col-6 col-md-2 bg-secondary"> 
                        <input type="number" style="width: 100%">
                    </div>
                    <div class="col-10 col-md-3 bg-secondary textoSegundoEquipo nombreEquipos">CROACIA</div>  
                    <div class="col-2 col-md-1 bg-secondary">
                        <img src="./img/banderas/croacia.gif" class="imgBandera">
                    </div>       
                </div>
                <div class="row partidosProde">
                    <div class="col-2 col-md-1 bg-secondary">
                        <img src="./img/banderas/belgica.gif" class="imgBandera">
                    </div>
                    <div class="col-10 col-md-3 bg-secondary nombreEquipos">BELGICA</div>
                    <div class="col-6 col-md-2 bg-secondary ">
                        <input type="number" style="width: 100%">
                    </div>
                    <div class="col-6 col-md-2 bg-secondary"> 
                        <input type="number" style="width: 100%">
                    </div>
                    <div class="col-10 col-md-3 bg-secondary textoSegundoEquipo nombreEquipos">CROACIA</div>  
                    <div class="col-2 col-md-1 bg-secondary">
                        <img src="./img/banderas/croacia.gif" class="imgBandera">
                    </div>       
                </div>
                <div class="row partidosProde">
                    <div class="col-2 col-md-1 bg-secondary">
                        <img src="./img/banderas/canad.png" class="imgBandera">
                    </div>
                    <div class="col-10 col-md-3 bg-secondary nombreEquipos">CANADA</div>
                    <div class="col-6 col-md-2 bg-secondary ">
                        <input type="number" style="width: 100%">
                    </div>
                    <div class="col-6 col-md-2 bg-secondary"> 
                        <input type="number" style="width: 100%">
                    </div>
                    <div class="col-10 col-md-3 bg-secondary textoSegundoEquipo nombreEquipos">MARRUECOS</div>   
                    <div class="col-2 col-md-1 bg-secondary">
                        <img src="./img/banderas/marruecos.gif" class="imgBandera">
                    </div>      
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-6">
                <div class="row partidosProde">
                    <div class="col-md-12 bg-primary tituloGrupos ">Grupo G</div>                     
                </div> 
                <br>
                <div class="row partidosProde">
                    <div class="col-2 col-md-1 bg-secondary">
                        <img src="./img/banderas/suiza.gif" class="imgBandera">
                    </div>
                    <div class="col-10 col-md-3 bg-secondary nombreEquipos">SUIZA</div>
                    <div class="col-6 col-md-2 bg-secondary ">
                        <input type="number" style="width: 100%">
                    </div>
                    <div class="col-6 col-md-2 bg-secondary"> 
                        <input type="number" style="width: 100%">
                    </div>
                    <div class="col-10 col-md-3 bg-secondary textoSegundoEquipo nombreEquipos">CAMERUN</div>     
                    <div class="col-2 col-md-1 bg-secondary">
                        <img src="./img/banderas/camerun.gif" class="imgBandera">
                    </div>    
                </div>
                <div class="row partidosProde">
                    <div class="col-2 col-md-1 bg-secondary">
                        <img src="./img/banderas/brazil.gif" class="imgBandera">
                    </div>
                    <div class="col-10 col-md-3 bg-secondary nombreEquipos">BRASIL</div>
                    <div class="col-6 col-md-2 bg-secondary ">
                        <input type="number" style="width: 100%">
                    </div>
                    <div class="col-6 col-md-2 bg-secondary"> 
                        <input type="number" style="width: 100%">
                    </div>
                    <div class="col-10 col-md-3 bg-secondary textoSegundoEquipo nombreEquipos">SERBIA</div> 
                    <div class="col-2 col-md-1 bg-secondary">
                        <img src="./img/banderas/serbia.gif" class="imgBandera">
                    </div>        
                </div>
                <div class="row partidosProde">
                    <div class="col-2 col-md-1 bg-secondary">
                        <img src="./img/banderas/serbia.gif" class="imgBandera">
                    </div>
                    <div class="col-10 col-md-3 bg-secondary nombreEquipos">SERBIA</div>
                    <div class="col-6 col-md-2 bg-secondary ">
                        <input type="number" style="width: 100%">
                    </div>
                    <div class="col-6 col-md-2 bg-secondary"> 
                        <input type="number" style="width: 100%">
                    </div>
                    <div class="col-10 col-md-3 bg-secondary textoSegundoEquipo nombreEquipos">CAMERUN</div>         
                    <div class="col-2 col-md-1 bg-secondary">
                        <img src="./img/banderas/camerun.gif" class="imgBandera">
                    </div>
                </div>
                <div class="row partidosProde">
                    <div class="col-2 col-md-1 bg-secondary">
                        <img src="./img/banderas/brazil.gif" class="imgBandera">
                    </div>
                    <div class="col-10 col-md-3 bg-secondary nombreEquipos">BRASIL</div>
                    <div class="col-6 col-md-2 bg-secondary ">
                        <input type="number" style="width: 100%">
                    </div>
                    <div class="col-6 col-md-2 bg-secondary"> 
                        <input type="number" style="width: 100%">
                    </div>
                    <div class="col-10 col-md-3 bg-secondary textoSegundoEquipo nombreEquipos">SUIZA</div>   
                    <div class="col-2 col-md-1 bg-secondary">
                        <img src="./img/banderas/suiza.gif" class="imgBandera">
                    </div>      
                </div>
                <div class="row partidosProde">
                    <div class="col-2 col-md-1 bg-secondary">
                        <img src="./img/banderas/brazil.gif" class="imgBandera">
                    </div>
                    <div class="col-10 col-md-3 bg-secondary nombreEquipos">BRASIL</div>
                    <div class="col-6 col-md-2 bg-secondary ">
                        <input type="number" style="width: 100%">
                    </div>
                    <div class="col-6 col-md-2 bg-secondary"> 
                        <input type="number" style="width: 100%">
                    </div>
                    <div class="col-10 col-md-3 bg-secondary textoSegundoEquipo nombreEquipos">CAMERUN</div> 
                    <div class="col-2 col-md-1 bg-secondary">
                        <img src="./img/banderas/camerun.gif" class="imgBandera">
                    </div>        
                </div>
                <div class="row partidosProde">
                    <div class="col-2 col-md-1 bg-secondary">
                        <img src="./img/banderas/serbia.gif" class="imgBandera">
                    </div>
                    <div class="col-10 col-md-3 bg-secondary nombreEquipos">SERBIA</div>
                    <div class="col-6 col-md-2 bg-secondary ">
                        <input type="number" style="width: 100%">
                    </div>
                    <div class="col-6 col-md-2 bg-secondary"> 
                        <input type="number" style="width: 100%">
                    </div>
                    <div class="col-10 col-md-3 bg-secondary textoSegundoEquipo nombreEquipos">SUIZA</div>     
                    <div class="col-2 col-md-1 bg-secondary">
                        <img src="./img/banderas/suiza.gif" class="imgBandera">
                    </div>    
                </div>
            </div>
            <div class="col-md-6">
                <div class="row partidosProde">
                    <div class="col-md-12 bg-primary tituloGrupos ">Grupo H</div>                    
                </div> 
                <br>
                <div class="row partidosProde">
                    <div class="col-2 col-md-1 bg-secondary">
                        <img src="./img/banderas/uruguay.gif" class="imgBandera">
                    </div>
                    <div class="col-10 col-md-3 bg-secondary nombreEquipos">URUGUAY</div>
                    <div class="col-6 col-md-2 bg-secondary ">
                        <input type="number" style="width: 100%">
                    </div>
                    <div class="col-6 col-md-2 bg-secondary"> 
                        <input type="number" style="width: 100%">
                    </div>
                    <div class="col-10 col-md-3 bg-secondary textoSegundoEquipo nombreEquipos">COREA DEL SUR</div>   
                    <div class="col-2 col-md-1 bg-secondary">
                        <img src="./img/banderas/corea.gif" class="imgBandera">
                    </div>      
                </div>
                <div class="row partidosProde">
                    <div class="col-2 col-md-1 bg-secondary">
                        <img src="./img/banderas/portugal.gif" class="imgBandera">
                    </div>
                    <div class="col-10 col-md-3 bg-secondary nombreEquipos">PORTUGAL</div>
                    <div class="col-6 col-md-2 bg-secondary ">
                        <input type="number" style="width: 100%">
                    </div>
                    <div class="col-6 col-md-2 bg-secondary"> 
                        <input type="number" style="width: 100%">
                    </div>
                    <div class="col-10 col-md-3 bg-secondary textoSegundoEquipo nombreEquipos">GHANA</div>   
                    <div class="col-2 col-md-1 bg-secondary">
                        <img src="./img/banderas/ghana.gif" class="imgBandera">
                    </div>      
                </div>
                <div class="row partidosProde">
                    <div class="col-2 col-md-1 bg-secondary">
                        <img src="./img/banderas/ghana.gif" class="imgBandera">
                    </div>
                    <div class="col-10 col-md-3 bg-secondary nombreEquipos">GHANA</div>
                    <div class="col-6 col-md-2 bg-secondary ">
                        <input type="number" style="width: 100%">
                    </div>
                    <div class="col-6 col-md-2 bg-secondary"> 
                        <input type="number" style="width: 100%">
                    </div>
                    <div class="col-10 col-md-3 bg-secondary textoSegundoEquipo nombreEquipos">COREA DEL SUR</div>
                    <div class="col-2 col-md-1 bg-secondary">
                        <img src="./img/banderas/corea.gif" class="imgBandera">
                    </div>         
                </div>
                <div class="row partidosProde">
                    <div class="col-2 col-md-1 bg-secondary">
                        <img src="./img/banderas/portugal.gif" class="imgBandera">
                    </div>
                    <div class="col-10 col-md-3 bg-secondary nombreEquipos">PORTUGAL</div>
                    <div class="col-6 col-md-2 bg-secondary ">
                        <input type="number" style="width: 100%">
                    </div>
                    <div class="col-6 col-md-2 bg-secondary"> 
                        <input type="number" style="width: 100%">
                    </div>
                    <div class="col-10 col-md-3 bg-secondary textoSegundoEquipo nombreEquipos">URUGUAY</div>    
                    <div class="col-2 col-md-1 bg-secondary">
                        <img src="./img/banderas/uruguay.gif" class="imgBandera">
                    </div>     
                </div>
                <div class="row partidosProde">
                    <div class="col-2 col-md-1 bg-secondary">
                        <img src="./img/banderas/portugal.gif" class="imgBandera">
                    </div>
                    <div class="col-10 col-md-3 bg-secondary nombreEquipos">PORTUGAL</div>
                    <div class="col-6 col-md-2 bg-secondary ">
                        <input type="number" style="width: 100%">
                    </div>
                    <div class="col-6 col-md-2 bg-secondary"> 
                        <input type="number" style="width: 100%">
                    </div>
                    <div class="col-10 col-md-3 bg-secondary textoSegundoEquipo nombreEquipos">COREA DEL SUR</div>  
                    <div class="col-2 col-md-1 bg-secondary">
                        <img src="./img/banderas/corea.gif" class="imgBandera">
                    </div>       
                </div>
                <div class="row partidosProde">
                    <div class="col-2 col-md-1 bg-secondary">
                        <img src="./img/banderas/inglaterra.gif" class="imgBandera">
                    </div>
                    <div class="col-10 col-md-3 bg-secondary nombreEquipos">GHANA </div>
                    <div class="col-6 col-md-2 bg-secondary ">
                        <input type="number" style="width: 100%">
                    </div>
                    <div class="col-6 col-md-2 bg-secondary"> 
                        <input type="number" style="width: 100%">
                    </div>
                    <div class="col-10 col-md-3 bg-secondary textoSegundoEquipo nombreEquipos">URUGUAY</div>   
                    <div class="col-2 col-md-1 bg-secondary">
                        <img src="./img/banderas/uruguay.gif" class="imgBandera">
                    </div>      
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