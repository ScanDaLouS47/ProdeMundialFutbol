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
            <div class="col-12 col-md"></div>
            <div class="col-md-4">
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
            <div class="col-12 col-md"></div>
            <div class="col-md-4">
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
                

        @yield('footer', View('footer'))
    </body>
</html>