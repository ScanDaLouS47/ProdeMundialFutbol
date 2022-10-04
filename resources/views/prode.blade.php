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
            <div class="col-md-1"></div>
            <div class="col-12 col-md-10">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                      <button class="nav-link active" id="home-tab" data-toggle="tab" data-target="#grupoA" type="button" role="tab" aria-controls="home" aria-selected="true">Grupo A</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="profile-tab" data-toggle="tab" data-target="#grupoB" type="button" role="tab" aria-controls="profile" aria-selected="false">Grupo B</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="contact-tab" data-toggle="tab" data-target="#grupoC" type="button" role="tab" aria-controls="contact" aria-selected="false">Grupo C</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="contact-tab" data-toggle="tab" data-target="#grupoD" type="button" role="tab" aria-controls="contact" aria-selected="false">Grupo D</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="contact-tab" data-toggle="tab" data-target="#grupoE" type="button" role="tab" aria-controls="contact" aria-selected="false">Grupo E</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="contact-tab" data-toggle="tab" data-target="#grupoF" type="button" role="tab" aria-controls="contact" aria-selected="false">Grupo F</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="contact-tab" data-toggle="tab" data-target="#grupoG" type="button" role="tab" aria-controls="contact" aria-selected="false">Grupo G</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="contact-tab" data-toggle="tab" data-target="#grupoH" type="button" role="tab" aria-controls="contact" aria-selected="false">Grupo H</button>
                    </li>
                  </ul>
                  <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="grupoA" role="tabpanel" aria-labelledby="home-tab">
                        <div class="row">
                            <div class="col-md-12">
                                <br>
                                <div class="row partidosProde">
                                    <div class="col-md-12 bg-primary tituloGrupos">Grupo A</div>                    
                                </div> 
                                <br>
                                <div class="row partidosProde" style="margin-bottom: 12px;">
                                    <div class="col-12 col-md-1 ">
                                        <img src="./img/banderas/ecuador.gif" class="imgBandera">
                                    </div>
                                    <div class="col-12 col-md-3  nombreEquipos"> ECUADOR</div>
                                    <div class="col-12 col-md-2  ">
                                        <input type="number" style="width: 100%" name="p-1-1">
                                    </div>
                                    <div class="col-12 col-md-2 "> 
                                        <input type="number" style="width: 100%" name="p-1-2">
                                    </div>
                                    <div class="col-12 col-md-3  textoSegundoEquipo nombreEquipos">QATAR</div>  
                                    <div class="col-12 col-md-1 ">
                                        <img src="./img/banderas/qatar.gif" class="imgBandera">
                                    </div>       
                                </div>
                                <div class="row partidosProde">
                                    <div class="col-12 col-md-1 ">
                                        <img src="./img/banderas/senegal.gif" class="imgBandera">
                                    </div>
                                    <div class="col-12 col-md-3  nombreEquipos">SENEGAL</div>
                                    <div class="col-12 col-md-2  ">
                                        <input type="number" style="width: 100%" name="p-2-1">
                                    </div>
                                    <div class="col-12 col-md-2 "> 
                                        <input type="number" style="width: 100%" name="p-2-2">
                                    </div>
                                    <div class="col-12 col-md-3  textoSegundoEquipo nombreEquipos">PAISES BAJOS</div>    
                                    <div class="col-12 col-md-1">
                                        <img src="./img/banderas/holanda.gif" class="imgBandera">
                                    </div>     
                                </div>
                                <div class="row partidosProde">
                                    <div class="col-12 col-md-1 ">
                                        <img src="./img/banderas/qatar.gif" class="imgBandera">
                                    </div>
                                    <div class="col-12 col-md-3  nombreEquipos">QATAR</div>
                                    <div class="col-12 col-md-2  ">
                                        <input type="number" style="width: 100%" name="p-3-1">
                                    </div>
                                    <div class="col-12 col-md-2 "> 
                                        <input type="number" style="width: 100%" name="p-3-2">
                                    </div>
                                    <div class="col-12 col-md-3  textoSegundoEquipo nombreEquipos">SENEGAL</div>   
                                    <div class="col-12 col-md-1 ">
                                        <img src="./img/banderas/senegal.gif" class="imgBandera">
                                    </div>      
                                </div>
                                <div class="row partidosProde">
                                    <div class="col-12 col-md-1 ">
                                        <img src="./img/banderas/ecuador.gif" class="imgBandera">
                                    </div>
                                    <div class="col-12 col-md-3  nombreEquipos">ECUADOR</div>
                                    <div class="col-12 col-md-2  ">
                                        <input type="number" style="width: 100%" name="p-4-1" >
                                    </div>
                                    <div class="col-12 col-md-2 "> 
                                        <input type="number" style="width: 100%" name="p-4-2">
                                    </div>
                                    <div class="col-12 col-md-3  textoSegundoEquipo nombreEquipos">PAISES BAJOS</div>   
                                    <div class="col-12 col-md-1 ">
                                        <img src="./img/banderas/holanda.gif" class="imgBandera">
                                    </div>      
                                </div>
                                <div class="row partidosProde">
                                    <div class="col-12 col-md-1 ">
                                        <img src="./img/banderas/qatar.gif" class="imgBandera">
                                    </div>
                                    <div class="col-12 col-md-3  nombreEquipos">QATAR</div>
                                    <div class="col-12 col-md-2  ">
                                        <input type="number" style="width: 100%" name="p-5-1">
                                    </div>
                                    <div class="col-12 col-md-2 "> 
                                        <input type="number" style="width: 100%" name="p-5-2">
                                    </div>
                                    <div class="col-12 col-md-3  textoSegundoEquipo nombreEquipos">PAISES BAJOS</div>  
                                    <div class="col-12 col-md-1 ">
                                        <img src="./img/banderas/holanda.gif" class="imgBandera">
                                    </div>       
                                </div>
                                <div class="row partidosProde">
                                    <div class="col-12 col-md-1 ">
                                        <img src="./img/banderas/ecuador.gif" class="imgBandera">
                                    </div>
                                    <div class="col-12 col-md-3  nombreEquipos">ECUADOR</div>
                                    <div class="col-12 col-md-2  ">
                                        <input type="number" style="width: 100%" name="p-6-1">
                                    </div>
                                    <div class="col-12 col-md-2 "> 
                                        <input type="number" style="width: 100%" name="p-6-2">
                                    </div>
                                    <div class="col-12 col-md-3  textoSegundoEquipo nombreEquipos">SENEGAL</div>  
                                    <div class="col-12 col-md-1 ">
                                        <img src="./img/banderas/senegal.gif" class="imgBandera">
                                    </div>       
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <button class="btn btn-success" data-toggle="tab" data-target="#grupoB" type="button" role="tab" aria-controls="profile" aria-selected="false">SIGUIENTE</button>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="grupoB" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="row">                            
                            <div class="col-md-12">
                                <br>
                                <div class="row partidosProde">
                                    <div class="col-md-12 bg-primary  tituloGrupos">Grupo B</div>                     
                                </div> 
                                <br>
                                <div class="row partidosProde">
                                    <div class="col-12 col-md-1 ">
                                        <img src="./img/banderas/inglaterra.gif" class="imgBandera">
                                    </div>
                                    <div class="col-12 col-md-3  nombreEquipos">INGLATERRA</div>
                                    <div class="col-12 col-md-2  ">
                                        <input type="number" style="width: 100%">
                                    </div>
                                    <div class="col-12 col-md-2 "> 
                                        <input type="number" style="width: 100%">
                                    </div>
                                    <div class="col-12 col-md-3  textoSegundoEquipo nombreEquipos">IRAN</div>   
                                    <div class="col-12 col-md-1 ">
                                        <img src="./img/banderas/iran.gif" class="imgBandera">
                                    </div>
                                </div>
                                <div class="row partidosProde">
                                    <div class="col-12 col-md-1 ">
                                        <img src="./img/banderas/eeuu.gif" class="imgBandera">
                                    </div>
                                    <div class="col-12 col-md-3  nombreEquipos">EE.UU</div>
                                    <div class="col-12 col-md-2  ">
                                        <input type="number" style="width: 100%">
                                    </div>
                                    <div class="col-12 col-md-2 "> 
                                        <input type="number" style="width: 100%">
                                    </div>
                                    <div class="col-12 col-md-3  textoSegundoEquipo nombreEquipos">GALES</div>  
                                    <div class="col-12 col-md-1 ">
                                        <img src="./img/banderas/gales.gif" class="imgBandera">
                                    </div>       
                                </div>
                                <div class="row partidosProde">
                                    <div class="col-12 col-md-1 ">
                                        <img src="./img/banderas/iran.gif" class="imgBandera">
                                    </div>
                                    <div class="col-12 col-md-3  nombreEquipos">IRAN</div>
                                    <div class="col-12 col-md-2  ">
                                        <input type="number" style="width: 100%">
                                    </div>
                                    <div class="col-12 col-md-2 "> 
                                        <input type="number" style="width: 100%">
                                    </div>
                                    <div class="col-12 col-md-3  textoSegundoEquipo nombreEquipos">GALES</div>     
                                    <div class="col-12 col-md-1 ">
                                        <img src="./img/banderas/gales.gif" class="imgBandera">
                                    </div>    
                                </div>
                                <div class="row partidosProde">
                                    <div class="col-12 col-md-1 ">
                                        <img src="./img/banderas/inglaterra.gif" class="imgBandera">
                                    </div>
                                    <div class="col-12 col-md-3  nombreEquipos">INGLATERRA</div>
                                    <div class="col-12 col-md-2  ">
                                        <input type="number" style="width: 100%">
                                    </div>
                                    <div class="col-12 col-md-2 "> 
                                        <input type="number" style="width: 100%">
                                    </div>
                                    <div class="col-12 col-md-3  textoSegundoEquipo nombreEquipos">EE.UU</div> 
                                    <div class="col-12 col-md-1 ">
                                        <img src="./img/banderas/eeuu.gif" class="imgBandera">
                                    </div>        
                                </div>
                                <div class="row partidosProde">
                                    <div class="col-12 col-md-1 ">
                                        <img src="./img/banderas/inglaterra.gif" class="imgBandera">
                                    </div>
                                    <div class="col-12 col-md-3  nombreEquipos">INGLATERRA</div>
                                    <div class="col-12 col-md-2  ">
                                        <input type="number" style="width: 100%">
                                    </div>
                                    <div class="col-12 col-md-2 "> 
                                        <input type="number" style="width: 100%">
                                    </div>
                                    <div class="col-12 col-md-3  textoSegundoEquipo nombreEquipos">GALES</div>         
                                    <div class="col-12 col-md-1 ">
                                        <img src="./img/banderas/gales.gif" class="imgBandera">
                                    </div>
                                </div>
                                <div class="row partidosProde">
                                    <div class="col-12 col-md-1 ">
                                        <img src="./img/banderas/iran.gif" class="imgBandera">
                                    </div>
                                    <div class="col-12 col-md-3  nombreEquipos">IRAN</div>
                                    <div class="col-12 col-md-2  ">
                                        <input type="number" style="width: 100%">
                                    </div>
                                    <div class="col-12 col-md-2 "> 
                                        <input type="number" style="width: 100%">
                                    </div>
                                    <div class="col-12 col-md-3  textoSegundoEquipo nombreEquipos">EE.UU</div>   
                                    <div class="col-12 col-md-1 ">
                                        <img src="./img/banderas/eeuu.gif" class="imgBandera">
                                    </div>      
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="row">
                                <div class="col-md-4">
                                    <button class="btn btn-primary" data-toggle="tab" data-target="#grupoB" type="button" role="tab" aria-controls="profile" aria-selected="false">ANTERIOR</button>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <button class="btn btn-primary" data-toggle="tab" data-target="#grupoB" type="button" role="tab" aria-controls="profile" aria-selected="false">SIGUIENTE</button>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="grupoC" role="tabpanel" aria-labelledby="contact-tab">
                        <div class="row">                            
                            <div class="col-md-12">
                                <br>
                                <div class="row partidosProde">
                                    <div class="col-md-12 bg-primary tituloGrupos">Grupo C</div>                                         
                                </div> 
                                <br>
                                <div class="row partidosProde">
                                    <div class="col-12 col-md-1 ">
                                        <img src="./img/banderas/argentina.gif" class="imgBandera">
                                    </div>
                                    <div class="col-12 col-md-3  nombreEquipos">ARGENTINA</div>
                                    <div class="col-12 col-md-2  ">
                                        <input type="number" style="width: 100%">
                                    </div>
                                    <div class="col-12 col-md-2 "> 
                                        <input type="number" style="width: 100%">
                                    </div>
                                    <div class="col-12 col-md-3  textoSegundoEquipo nombreEquipos">ARABIA SAUDITA</div>    
                                    <div class="col-12 col-md-1 ">
                                        <img src="./img/banderas/arabia-saudita.gif" class="imgBandera">
                                    </div>     
                                </div>
                                <div class="row partidosProde">
                                    <div class="col-12 col-md-1 ">
                                        <img src="./img/banderas/mexico.gif" class="imgBandera">
                                    </div>
                                    <div class="col-12 col-md-3  nombreEquipos">MEXICO</div>
                                    <div class="col-12 col-md-2  ">
                                        <input type="number" style="width: 100%">
                                    </div>
                                    <div class="col-12 col-md-2 "> 
                                        <input type="number" style="width: 100%">
                                    </div>
                                    <div class="col-12 col-md-3  textoSegundoEquipo nombreEquipos">POLONIA</div>  
                                    <div class="col-12 col-md-1 ">
                                        <img src="./img/banderas/polonia.gif" class="imgBandera">
                                    </div>       
                                </div>
                                <div class="row partidosProde">
                                    <div class="col-12 col-md-1 ">
                                        <img src="./img/banderas/arabia-saudita.gif" class="imgBandera">
                                    </div>
                                    <div class="col-12 col-md-3  nombreEquipos">ARABIA SAUDITA</div>
                                    <div class="col-12 col-md-2  ">
                                        <input type="number" style="width: 100%">
                                    </div>
                                    <div class="col-12 col-md-2 "> 
                                        <input type="number" style="width: 100%">
                                    </div>
                                    <div class="col-12 col-md-3  textoSegundoEquipo nombreEquipos">POLONIA</div>  
                                    <div class="col-12 col-md-1 ">
                                        <img src="./img/banderas/polonia.gif" class="imgBandera">
                                    </div>       
                                </div>
                                <div class="row partidosProde">
                                    <div class="col-12 col-md-1 ">
                                        <img src="./img/banderas/argentina.gif" class="imgBandera">
                                    </div>
                                    <div class="col-12 col-md-3  nombreEquipos">ARGENTINA </div>
                                    <div class="col-12 col-md-2  ">
                                        <input type="number" style="width: 100%">
                                    </div>
                                    <div class="col-12 col-md-2 "> 
                                        <input type="number" style="width: 100%">
                                    </div>
                                    <div class="col-12 col-md-3  textoSegundoEquipo nombreEquipos">MEXICO</div>     
                                    <div class="col-12 col-md-1 ">
                                        <img src="./img/banderas/mexico.gif" class="imgBandera">
                                    </div>    
                                </div>
                                <div class="row partidosProde">
                                    <div class="col-12 col-md-1 ">
                                        <img src="./img/banderas/argentina.gif" class="imgBandera">
                                    </div>
                                    <div class="col-12 col-md-3  nombreEquipos">ARGENTINA</div>
                                    <div class="col-12 col-md-2  ">
                                        <input type="number" style="width: 100%">
                                    </div>
                                    <div class="col-12 col-md-2 "> 
                                        <input type="number" style="width: 100%">
                                    </div>
                                    <div class="col-12 col-md-3  textoSegundoEquipo nombreEquipos">POLONIA</div>  
                                    <div class="col-12 col-md-1 ">
                                        <img src="./img/banderas/polonia.gif" class="imgBandera">
                                    </div>       
                                </div>
                                <div class="row partidosProde">
                                    <div class="col-12 col-md-1 ">
                                        <img src="./img/banderas/arabia-saudita.gif" class="imgBandera">
                                    </div>
                                    <div class="col-12 col-md-3  nombreEquipos">ARABIA SAUDITA</div>
                                    <div class="col-12 col-md-2  ">
                                        <input type="number" style="width: 100%">
                                    </div>
                                    <div class="col-12 col-md-2 "> 
                                        <input type="number" style="width: 100%">
                                    </div>
                                    <div class="col-12 col-md-3  textoSegundoEquipo nombreEquipos">MEXICO</div>     
                                    <div class="col-12 col-md-1 ">
                                        <img src="./img/banderas/mexico.gif" class="imgBandera">
                                    </div>    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <button class="btn btn-primary" data-toggle="tab" data-target="#grupoB" type="button" role="tab" aria-controls="profile" aria-selected="false">ANTERIOR</button>
                        </div>
                        <div class="col-md-4">
                            <button class="btn btn-primary" data-toggle="tab" data-target="#grupoB" type="button" role="tab" aria-controls="profile" aria-selected="false">SIGUIENTE</button>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="grupoD" role="tabpanel" aria-labelledby="contact-tab">
                        <div class="row">                            
                            <div class="col-md-12">
                                <br>
                                <div class="row partidosProde">
                                    <div class="col-md-12 bg-primary tituloGrupos">Grupo D</div>                     
                                </div> 
                                <br>
                                <div class="row partidosProde">
                                    <div class="col-12 col-md-1 ">
                                        <img src="./img/banderas/dinamarca.gif" class="imgBandera">
                                    </div>
                                    <div class="col-12 col-md-3  nombreEquipos">DINAMARCA</div>
                                    <div class="col-12 col-md-2  ">
                                        <input type="number" style="width: 100%">
                                    </div>
                                    <div class="col-12 col-md-2 "> 
                                        <input type="number" style="width: 100%">
                                    </div>
                                    <div class="col-12 col-md-3  textoSegundoEquipo nombreEquipos">TUNEZ</div>   
                                    <div class="col-12 col-md-1 ">
                                        <img src="./img/banderas/tunez.gif" class="imgBandera">
                                    </div>      
                                </div>
                                <div class="row partidosProde">
                                    <div class="col-12 col-md-1 ">
                                        <img src="./img/banderas/franc.gif" class="imgBandera">
                                    </div>
                                    <div class="col-12 col-md-3  nombreEquipos">FRANCIA</div>
                                    <div class="col-12 col-md-2  ">
                                        <input type="number" style="width: 100%">
                                    </div>
                                    <div class="col-12 col-md-2 "> 
                                        <input type="number" style="width: 100%">
                                    </div>
                                    <div class="col-12 col-md-3  textoSegundoEquipo nombreEquipos">AUSTRALIA</div>  
                                    <div class="col-12 col-md-1 ">
                                        <img src="./img/banderas/australia.gif" class="imgBandera">
                                    </div>       
                                </div>
                                <div class="row partidosProde">
                                    <div class="col-12 col-md-1 ">
                                        <img src="./img/banderas/australia.gif" class="imgBandera">
                                    </div>
                                    <div class="col-12 col-md-3  nombreEquipos">AUSTRALIA</div>
                                    <div class="col-12 col-md-2  ">
                                        <input type="number" style="width: 100%">
                                    </div>
                                    <div class="col-12 col-md-2 "> 
                                        <input type="number" style="width: 100%">
                                    </div>
                                    <div class="col-12 col-md-3  textoSegundoEquipo nombreEquipos">TUNEZ</div>      
                                    <div class="col-12 col-md-1 ">
                                        <img src="./img/banderas/tunez.gif" class="imgBandera">
                                    </div>   
                                </div>
                                <div class="row partidosProde">
                                    <div class="col-12 col-md-1 ">
                                        <img src="./img/banderas/franc.gif" class="imgBandera">
                                    </div>
                                    <div class="col-12 col-md-3  nombreEquipos">FRANCIA</div>
                                    <div class="col-12 col-md-2  ">
                                        <input type="number" style="width: 100%">
                                    </div>
                                    <div class="col-12 col-md-2 "> 
                                        <input type="number" style="width: 100%">
                                    </div>
                                    <div class="col-12 col-md-3  textoSegundoEquipo nombreEquipos">DINAMARCA</div>    
                                    <div class="col-12 col-md-1 ">
                                        <img src="./img/banderas/dinamarca.gif" class="imgBandera">
                                    </div>     
                                </div>
                                <div class="row partidosProde">
                                    <div class="col-12 col-md-1 ">
                                        <img src="./img/banderas/australia.gif" class="imgBandera">
                                    </div>
                                    <div class="col-12 col-md-3  nombreEquipos">AUSTRALIA</div>
                                    <div class="col-12 col-md-2  ">
                                        <input type="number" style="width: 100%">
                                    </div>
                                    <div class="col-12 col-md-2 "> 
                                        <input type="number" style="width: 100%">
                                    </div>
                                    <div class="col-12 col-md-3  textoSegundoEquipo nombreEquipos">DINAMARCA</div>   
                                    <div class="col-12 col-md-1 ">
                                        <img src="./img/banderas/dinamarca.gif" class="imgBandera">
                                    </div>      
                                </div>
                                <div class="row partidosProde">
                                    <div class="col-12 col-md-1 ">
                                        <img src="./img/banderas/franc.gif" class="imgBandera">
                                    </div>
                                    <div class="col-12 col-md-3  nombreEquipos">FRANCIA</div>
                                    <div class="col-12 col-md-2  ">
                                        <input type="number" style="width: 100%">
                                    </div>
                                    <div class="col-12 col-md-2 "> 
                                        <input type="number" style="width: 100%">
                                    </div>
                                    <div class="col-12 col-md-3  nombreEquipos">TUNEZ</div>  
                                    <div class="col-12 col-md-1 ">
                                        <img src="./img/banderas/tunez.gif" class="imgBandera">
                                    </div>       
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <button class="btn btn-primary" data-toggle="tab" data-target="#grupoB" type="button" role="tab" aria-controls="profile" aria-selected="false">ANTERIOR</button>
                        </div>
                        <div class="col-md-4">
                            <button class="btn btn-primary" data-toggle="tab" data-target="#grupoB" type="button" role="tab" aria-controls="profile" aria-selected="false">SIGUIENTE</button>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="grupoE" role="tabpanel" aria-labelledby="contact-tab">
                        <div class="row">                            
                            <div class="col-md-12">
                                <br>
                                <div class="row partidosProde">
                                    <div class="col-md-12 bg-primary tituloGrupos">Grupo E</div>                 
                                </div> 
                                <br>
                                <div class="row partidosProde">
                                    <div class="col-12 col-md-1 ">
                                        <img src="./img/banderas/alemania.gif" class="imgBandera">
                                    </div>
                                    <div class="col-12 col-md-3  nombreEquipos">ALEMANIA</div>
                                    <div class="col-12 col-md-2  ">
                                        <input type="number" style="width: 100%">
                                    </div>
                                    <div class="col-12 col-md-2 "> 
                                        <input type="number" style="width: 100%">
                                    </div>
                                    <div class="col-12 col-md-3  textoSegundoEquipo nombreEquipos">JAPON</div>  
                                    <div class="col-12 col-md-1 ">
                                        <img src="./img/banderas/japon.gif" class="imgBandera">
                                    </div>       
                                </div>
                                <div class="row partidosProde">
                                    <div class="col-12 col-md-1 ">
                                        <img src="./img/banderas/españa.gif" class="imgBandera">
                                    </div>
                                    <div class="col-12 col-md-3  nombreEquipos">ESPAÑA</div>
                                    <div class="col-12 col-md-2  ">
                                        <input type="number" style="width: 100%">
                                    </div>
                                    <div class="col-12 col-md-2 "> 
                                        <input type="number" style="width: 100%">
                                    </div>
                                    <div class="col-12 col-md-3  textoSegundoEquipo nombreEquipos">COSTA RICA</div>    
                                    <div class="col-12 col-md-1 ">
                                        <img src="./img/banderas/costa-rica.gif" class="imgBandera">
                                    </div>     
                                </div>
                                <div class="row partidosProde">
                                    <div class="col-12 col-md-1 ">
                                        <img src="./img/banderas/costa-rica.gif" class="imgBandera">
                                    </div>
                                    <div class="col-12 col-md-3  nombreEquipos">COSTA RICA</div>
                                    <div class="col-12 col-md-2  ">
                                        <input type="number" style="width: 100%">
                                    </div>
                                    <div class="col-12 col-md-2 "> 
                                        <input type="number" style="width: 100%">
                                    </div>
                                    <div class="col-12 col-md-3  textoSegundoEquipo nombreEquipos">JAPON</div>  
                                    <div class="col-12 col-md-1 ">
                                        <img src="./img/banderas/japon.gif" class="imgBandera">
                                    </div>       
                                </div>
                                <div class="row partidosProde">
                                    <div class="col-12 col-md-1 ">
                                        <img src="./img/banderas/españa.gif" class="imgBandera">
                                    </div>
                                    <div class="col-12 col-md-3  nombreEquipos">ESPAÑA </div>
                                    <div class="col-12 col-md-2  ">
                                        <input type="number" style="width: 100%">
                                    </div>
                                    <div class="col-12 col-md-2 "> 
                                        <input type="number" style="width: 100%">
                                    </div>
                                    <div class="col-12 col-md-3  textoSegundoEquipo nombreEquipos">ALEMANIA</div>   
                                    <div class="col-12 col-md-1 ">
                                        <img src="./img/banderas/alemania.gif" class="imgBandera">
                                    </div>      
                                </div>
                                <div class="row partidosProde">
                                    <div class="col-12 col-md-1 ">
                                        <img src="./img/banderas/españa.gif" class="imgBandera">
                                    </div>
                                    <div class="col-12 col-md-3  nombreEquipos">ESPAÑA</div>
                                    <div class="col-12 col-md-2  ">
                                        <input type="number" style="width: 100%">
                                    </div>
                                    <div class="col-12 col-md-2 "> 
                                        <input type="number" style="width: 100%">
                                    </div>
                                    <div class="col-12 col-md-3  textoSegundoEquipo nombreEquipos">JAPON</div>       
                                    <div class="col-12 col-md-1 ">
                                        <img src="./img/banderas/japon.gif" class="imgBandera">
                                    </div>  
                                </div>
                                <div class="row partidosProde">
                                    <div class="col-12 col-md-1 ">
                                        <img src="./img/banderas/costa-rica.gif" class="imgBandera">
                                    </div>
                                    <div class="col-12 col-md-3  nombreEquipos">COSTA RICA</div>
                                    <div class="col-12 col-md-2  ">
                                        <input type="number" style="width: 100%">
                                    </div>
                                    <div class="col-12 col-md-2 "> 
                                        <input type="number" style="width: 100%">
                                    </div>
                                    <div class="col-12 col-md-3  textoSegundoEquipo nombreEquipos">ALEMANIA</div> 
                                    <div class="col-12 col-md-1 ">
                                        <img src="./img/banderas/alemania.gif" class="imgBandera">
                                    </div>        
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <button class="btn btn-primary" data-toggle="tab" data-target="#grupoB" type="button" role="tab" aria-controls="profile" aria-selected="false">ANTERIOR</button>
                        </div>
                        <div class="col-md-4">
                            <button class="btn btn-primary" data-toggle="tab" data-target="#grupoB" type="button" role="tab" aria-controls="profile" aria-selected="false">SIGUIENTE</button>
                        </div>
                    </div>   
                    <div class="tab-pane fade" id="grupoF" role="tabpanel" aria-labelledby="contact-tab">
                        <div class="col-md-12">
                            <br>
                            <div class="row partidosProde">
                                <div class="col-md-12 bg-primary tituloGrupos">Grupo F</div>                     
                            </div> 
                            <br>
                            <div class="row partidosProde">
                                <div class="col-12 col-md-1 ">
                                    <img src="./img/banderas/marruecos.gif" class="imgBandera">
                                </div>
                                <div class="col-12 col-md-3  nombreEquipos">MARRUECOS</div>
                                <div class="col-12 col-md-2  ">
                                    <input type="number" style="width: 100%">
                                </div>
                                <div class="col-12 col-md-2 "> 
                                    <input type="number" style="width: 100%">
                                </div>
                                <div class="col-12 col-md-3  textoSegundoEquipo nombreEquipos">CROACIA</div>         
                                <div class="col-12 col-md-1 ">
                                    <img src="./img/banderas/croacia.gif" class="imgBandera">
                                </div>
                            </div>
                            <div class="row partidosProde">
                                <div class="col-12 col-md-1 ">
                                    <img src="./img/banderas/belgica.gif" class="imgBandera">
                                </div>
                                <div class="col-12 col-md-3  nombreEquipos">BELGICA</div>
                                <div class="col-12 col-md-2  ">
                                    <input type="number" style="width: 100%">
                                </div>
                                <div class="col-12 col-md-2 "> 
                                    <input type="number" style="width: 100%">
                                </div>
                                <div class="col-12 col-md-3  textoSegundoEquipo nombreEquipos">CANADA</div> 
                                <div class="col-12 col-md-1 ">
                                    <img src="./img/banderas/canad.png" class="imgBandera">
                                </div>       
                            </div>
                            <div class="row partidosProde">
                                <div class="col-12 col-md-1 ">
                                    <img src="./img/banderas/belgica.gif" class="imgBandera">
                                </div>
                                <div class="col-12 col-md-3  nombreEquipos">BELGICA</div>
                                <div class="col-12 col-md-2  ">
                                    <input type="number" style="width: 100%">
                                </div>
                                <div class="col-12 col-md-2 "> 
                                    <input type="number" style="width: 100%">
                                </div>
                                <div class="col-12 col-md-3  textoSegundoEquipo nombreEquipos">MARRUECOS</div>  
                                <div class="col-12 col-md-1 ">
                                    <img src="./img/banderas/marruecos.gif" class="imgBandera">
                                </div>       
                            </div>
                            <div class="row partidosProde">
                                <div class="col-12 col-md-1 ">
                                    <img src="./img/banderas/canad.png" class="imgBandera">
                                </div>
                                <div class="col-12 col-md-3  nombreEquipos">CANADA</div>
                                <div class="col-12 col-md-2  ">
                                    <input type="number" style="width: 100%">
                                </div>
                                <div class="col-12 col-md-2 "> 
                                    <input type="number" style="width: 100%">
                                </div>
                                <div class="col-12 col-md-3  textoSegundoEquipo nombreEquipos">CROACIA</div>  
                                <div class="col-12 col-md-1 ">
                                    <img src="./img/banderas/croacia.gif" class="imgBandera">
                                </div>       
                            </div>
                            <div class="row partidosProde">
                                <div class="col-12 col-md-1 ">
                                    <img src="./img/banderas/belgica.gif" class="imgBandera">
                                </div>
                                <div class="col-12 col-md-3  nombreEquipos">BELGICA</div>
                                <div class="col-12 col-md-2  ">
                                    <input type="number" style="width: 100%">
                                </div>
                                <div class="col-12 col-md-2 "> 
                                    <input type="number" style="width: 100%">
                                </div>
                                <div class="col-12 col-md-3  textoSegundoEquipo nombreEquipos">CROACIA</div>  
                                <div class="col-12 col-md-1 ">
                                    <img src="./img/banderas/croacia.gif" class="imgBandera">
                                </div>       
                            </div>
                            <div class="row partidosProde">
                                <div class="col-12 col-md-1 ">
                                    <img src="./img/banderas/canad.png" class="imgBandera">
                                </div>
                                <div class="col-12 col-md-3  nombreEquipos">CANADA</div>
                                <div class="col-12 col-md-2  ">
                                    <input type="number" style="width: 100%">
                                </div>
                                <div class="col-12 col-md-2 "> 
                                    <input type="number" style="width: 100%">
                                </div>
                                <div class="col-12 col-md-3  textoSegundoEquipo nombreEquipos">MARRUECOS</div>   
                                <div class="col-12 col-md-1 ">
                                    <img src="./img/banderas/marruecos.gif" class="imgBandera">
                                </div>      
                            </div>
                        </div>
                        <div class="col-md-4">
                            <button class="btn btn-primary" data-toggle="tab" data-target="#grupoB" type="button" role="tab" aria-controls="profile" aria-selected="false">ANTERIOR</button>
                        </div>
                        <div class="col-md-4">
                            <button class="btn btn-primary" data-toggle="tab" data-target="#grupoB" type="button" role="tab" aria-controls="profile" aria-selected="false">SIGUIENTE</button>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="grupoG" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="row">
                            <div class="col-md-12">
                                <br>
                                <div class="row partidosProde">
                                    <div class="col-md-12 bg-primary tituloGrupos ">Grupo G</div>                     
                                </div> 
                                <br>
                                <div class="row partidosProde">
                                    <div class="col-12 col-md-1 ">
                                        <img src="./img/banderas/suiza.gif" class="imgBandera">
                                    </div>
                                    <div class="col-12 col-md-3  nombreEquipos">SUIZA</div>
                                    <div class="col-12 col-md-2  ">
                                        <input type="number" style="width: 100%">
                                    </div>
                                    <div class="col-12 col-md-2 "> 
                                        <input type="number" style="width: 100%">
                                    </div>
                                    <div class="col-12 col-md-3  textoSegundoEquipo nombreEquipos">CAMERUN</div>     
                                    <div class="col-12 col-md-1 ">
                                        <img src="./img/banderas/camerun.gif" class="imgBandera">
                                    </div>    
                                </div>
                                <div class="row partidosProde">
                                    <div class="col-12 col-md-1 ">
                                        <img src="./img/banderas/brazil.gif" class="imgBandera">
                                    </div>
                                    <div class="col-12 col-md-3  nombreEquipos">BRASIL</div>
                                    <div class="col-12 col-md-2  ">
                                        <input type="number" style="width: 100%">
                                    </div>
                                    <div class="col-12 col-md-2 "> 
                                        <input type="number" style="width: 100%">
                                    </div>
                                    <div class="col-12 col-md-3  textoSegundoEquipo nombreEquipos">SERBIA</div> 
                                    <div class="col-12 col-md-1 ">
                                        <img src="./img/banderas/serbia.gif" class="imgBandera">
                                    </div>        
                                </div>
                                <div class="row partidosProde">
                                    <div class="col-12 col-md-1 ">
                                        <img src="./img/banderas/serbia.gif" class="imgBandera">
                                    </div>
                                    <div class="col-12 col-md-3  nombreEquipos">SERBIA</div>
                                    <div class="col-12 col-md-2  ">
                                        <input type="number" style="width: 100%">
                                    </div>
                                    <div class="col-12 col-md-2 "> 
                                        <input type="number" style="width: 100%">
                                    </div>
                                    <div class="col-12 col-md-3  textoSegundoEquipo nombreEquipos">CAMERUN</div>         
                                    <div class="col-12 col-md-1 ">
                                        <img src="./img/banderas/camerun.gif" class="imgBandera">
                                    </div>
                                </div>
                                <div class="row partidosProde">
                                    <div class="col-12 col-md-1 ">
                                        <img src="./img/banderas/brazil.gif" class="imgBandera">
                                    </div>
                                    <div class="col-12 col-md-3  nombreEquipos">BRASIL</div>
                                    <div class="col-12 col-md-2  ">
                                        <input type="number" style="width: 100%">
                                    </div>
                                    <div class="col-12 col-md-2 "> 
                                        <input type="number" style="width: 100%">
                                    </div>
                                    <div class="col-12 col-md-3  textoSegundoEquipo nombreEquipos">SUIZA</div>   
                                    <div class="col-12 col-md-1 ">
                                        <img src="./img/banderas/suiza.gif" class="imgBandera">
                                    </div>      
                                </div>
                                <div class="row partidosProde">
                                    <div class="col-12 col-md-1 ">
                                        <img src="./img/banderas/brazil.gif" class="imgBandera">
                                    </div>
                                    <div class="col-12 col-md-3  nombreEquipos">BRASIL</div>
                                    <div class="col-12 col-md-2  ">
                                        <input type="number" style="width: 100%">
                                    </div>
                                    <div class="col-12 col-md-2 "> 
                                        <input type="number" style="width: 100%">
                                    </div>
                                    <div class="col-12 col-md-3  textoSegundoEquipo nombreEquipos">CAMERUN</div> 
                                    <div class="col-12 col-md-1 ">
                                        <img src="./img/banderas/camerun.gif" class="imgBandera">
                                    </div>        
                                </div>
                                <div class="row partidosProde">
                                    <div class="col-12 col-md-1 ">
                                        <img src="./img/banderas/serbia.gif" class="imgBandera">
                                    </div>
                                    <div class="col-12 col-md-3  nombreEquipos">SERBIA</div>
                                    <div class="col-12 col-md-2  ">
                                        <input type="number" style="width: 100%">
                                    </div>
                                    <div class="col-12 col-md-2 "> 
                                        <input type="number" style="width: 100%">
                                    </div>
                                    <div class="col-12 col-md-3  textoSegundoEquipo nombreEquipos">SUIZA</div>     
                                    <div class="col-12 col-md-1 ">
                                        <img src="./img/banderas/suiza.gif" class="imgBandera">
                                    </div>    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <button class="btn btn-primary" data-toggle="tab" data-target="#grupoB" type="button" role="tab" aria-controls="profile" aria-selected="false">ANTERIOR</button>
                        </div>
                        <div class="col-md-4">
                            <button class="btn btn-primary" data-toggle="tab" data-target="#grupoB" type="button" role="tab" aria-controls="profile" aria-selected="false">SIGUIENTE</button>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="grupoH" role="tabpanel" aria-labelledby="contact-tab">
                        <div class="row">
                            <div class="col-md-12">
                                <br>
                                <div class="row partidosProde">
                                    <div class="col-md-12 bg-primary tituloGrupos ">Grupo H</div>                    
                                </div> 
                                <br>
                                <div class="row partidosProde">
                                    <div class="col-12 col-md-1 ">
                                        <img src="./img/banderas/uruguay.gif" class="imgBandera">
                                    </div>
                                    <div class="col-12 col-md-3  nombreEquipos">URUGUAY</div>
                                    <div class="col-12 col-md-2  ">
                                        <input type="number" style="width: 100%">
                                    </div>
                                    <div class="col-12 col-md-2 "> 
                                        <input type="number" style="width: 100%">
                                    </div>
                                    <div class="col-12 col-md-3  textoSegundoEquipo nombreEquipos">COREA DEL SUR</div>   
                                    <div class="col-12 col-md-1 ">
                                        <img src="./img/banderas/corea.gif" class="imgBandera">
                                    </div>      
                                </div>
                                <div class="row partidosProde">
                                    <div class="col-12 col-md-1 ">
                                        <img src="./img/banderas/portugal.gif" class="imgBandera">
                                    </div>
                                    <div class="col-12 col-md-3  nombreEquipos">PORTUGAL</div>
                                    <div class="col-12 col-md-2  ">
                                        <input type="number" style="width: 100%">
                                    </div>
                                    <div class="col-12 col-md-2 "> 
                                        <input type="number" style="width: 100%">
                                    </div>
                                    <div class="col-12 col-md-3  textoSegundoEquipo nombreEquipos">GHANA</div>   
                                    <div class="col-12 col-md-1 ">
                                        <img src="./img/banderas/ghana.gif" class="imgBandera">
                                    </div>      
                                </div>
                                <div class="row partidosProde">
                                    <div class="col-12 col-md-1 ">
                                        <img src="./img/banderas/ghana.gif" class="imgBandera">
                                    </div>
                                    <div class="col-12 col-md-3  nombreEquipos">GHANA</div>
                                    <div class="col-12 col-md-2  ">
                                        <input type="number" style="width: 100%">
                                    </div>
                                    <div class="col-12 col-md-2 "> 
                                        <input type="number" style="width: 100%">
                                    </div>
                                    <div class="col-12 col-md-3  textoSegundoEquipo nombreEquipos">COREA DEL SUR</div>
                                    <div class="col-12 col-md-1 ">
                                        <img src="./img/banderas/corea.gif" class="imgBandera">
                                    </div>         
                                </div>
                                <div class="row partidosProde">
                                    <div class="col-12 col-md-1 ">
                                        <img src="./img/banderas/portugal.gif" class="imgBandera">
                                    </div>
                                    <div class="col-12 col-md-3  nombreEquipos">PORTUGAL</div>
                                    <div class="col-12 col-md-2  ">
                                        <input type="number" style="width: 100%">
                                    </div>
                                    <div class="col-12 col-md-2 "> 
                                        <input type="number" style="width: 100%">
                                    </div>
                                    <div class="col-12 col-md-3  textoSegundoEquipo nombreEquipos">URUGUAY</div>    
                                    <div class="col-12 col-md-1 ">
                                        <img src="./img/banderas/uruguay.gif" class="imgBandera">
                                    </div>     
                                </div>
                                <div class="row partidosProde">
                                    <div class="col-12 col-md-1 ">
                                        <img src="./img/banderas/portugal.gif" class="imgBandera">
                                    </div>
                                    <div class="col-12 col-md-3  nombreEquipos">PORTUGAL</div>
                                    <div class="col-12 col-md-2  ">
                                        <input type="number" style="width: 100%">
                                    </div>
                                    <div class="col-12 col-md-2 "> 
                                        <input type="number" style="width: 100%">
                                    </div>
                                    <div class="col-12 col-md-3  textoSegundoEquipo nombreEquipos">COREA DEL SUR</div>  
                                    <div class="col-12 col-md-1 ">
                                        <img src="./img/banderas/corea.gif" class="imgBandera">
                                    </div>       
                                </div>
                                <div class="row partidosProde">
                                    <div class="col-12 col-md-1 ">
                                        <img src="./img/banderas/inglaterra.gif" class="imgBandera">
                                    </div>
                                    <div class="col-12 col-md-3  nombreEquipos">GHANA </div>
                                    <div class="col-12 col-md-2  ">
                                        <input type="number" style="width: 100%">
                                    </div>
                                    <div class="col-12 col-md-2 "> 
                                        <input type="number" style="width: 100%">
                                    </div>
                                    <div class="col-12 col-md-3  textoSegundoEquipo nombreEquipos">URUGUAY</div>   
                                    <div class="col-12 col-md-1 ">
                                        <img src="./img/banderas/uruguay.gif" class="imgBandera">
                                    </div>      
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <button class="btn btn-primary" data-toggle="tab" data-target="#grupoB" type="button" role="tab" aria-controls="profile" aria-selected="false">ANTERIOR</button>
                        </div>
                    </div>    
                  </div>
            </div>
            <div class="col-md-1"></div>
        </div>        
        <br>
        <br>
        <div class="row">
            
            
        </div>
        <br>
        <div class="row">
            
            
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