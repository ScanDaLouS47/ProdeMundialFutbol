<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @yield('imports', View('imports'))
        
        <title>ProdeMundial</title>        

        
    </head>
    <body class="antialiased">        
        <div class="row">
            <div class="col-12 col-md-12 p-0">
               @yield('menuadmin', View('menuadmin'))        
            </div>
        </div>  
        <div class="row">
            <div class="col-12 col-md"></div>
            <div class="col-md-4">
                <p class="text-center textohome">Resultados Partidos</p>
             </div> 
            <div class="col-md"></div>    
           
        </div>  
        <div class="row">
            <div class="col-md"></div>
            <div class="col-12 col-md-4">
                <select class="custom-select">
                    <option value="0" selected>-Seleccione el partido-</option>                   
                    @foreach ($partidos as $partido)   
                        @php                                                
                            $fecha = explode("-",$partido->fecha);                                         
                         @endphp                        
                        <option value="{{ $partido->id }}">{{ $partido->equipo_1->nombre_equipo }} vs {{ $partido->equipo_2->nombre_equipo }} ({{ $fecha[2]."-".$fecha[1]."-".$fecha[0] }})</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md"></div>
        </div>       
        <br>
        <div class="row">
            <div class="col-md"></div>
            <div class="col-12 col-md-4">
                <select class="custom-select">
                    <option selected>Open this select menu</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
            </div>
            <div class="col-md"></div>
        </div>    
        <br>
        <div class="row">
            <div class="col-md"></div>
            <div class="col-12 col-md-4">
                <button class="btn btn-block text-center textohome btn-primary">Guardar partido</button>
            </div>
            <div class="col-md"></div>
        </div>
        <br>
        <hr>    
        <div class="row">
            <div class="col-md"></div>
            <div class="col-12 col-md-4">
                <p class="text-center textohome">Resultados Cargados</p>
            </div>
            <div class="col-md"></div>
        </div>
        <div class="row">
            <div class="col-md"></div>
            <div class="col-12 col-md-6">
                <table class="table table-striped table-dark">
                    <thead>
                      <tr>
                        <th scope="col">fecha</th>
                        <th scope="col">Equipo 1</th>
                        <th scope="col">Equipo 2</th>
                        <th scope="col">Resultado</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>Argentina</td>
                        <td>Polonia</td>
                        <td>Argentina(3-2)</td>
                        
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>Francia</td>
                        <td>Dinamarca</td>
                        <td>Francia(3-2)</td>
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td>Brazil</td>
                        <td>Suiza</td>
                        <td>Brazil(2-1)</td>
                      </tr>
                      <tr>
                        <th scope="row">4</th>
                        <td>Brazil</td>
                        <td>Camerun</td>
                        <td>Brazil(3-1)</td>
                      </tr>
                    </tbody>
                  </table>
            </div>
            <div class="col-md"></div>
        </div>

        @yield('footer', View('footer'))
    </body>
</html>