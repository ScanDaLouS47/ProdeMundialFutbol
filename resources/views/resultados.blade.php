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
        <form action="{{ route('resultado') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-md"></div>
            <div class="col-12 col-md-4">
                <select class="custom-select" name="id_partido">
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
                <div class="row">
                    <div class="col-12 col-md-6">
                        <input placeholder="Equipo 1" type="number" style="width: 100%" name="Equipo1" value="{{ old('Equipo1') }}" required>
                    </div>
                    <div class="col-12 col-md-6">
                        <input placeholder="Equipo 2" type="number" style="width: 100%" name="Equipo2" value="{{ old('Equipo2') }}" required>
                    </div>
                </div>
            </div>
            <div class="col-md"></div>
        </div>    
        <br>
        <div class="row">
            <div class="col-md"></div>
            <div class="col-12 col-md-4">
                <button type="submit" class="btn btn-block text-center textohome btn-primary">Guardar partido</button>
            </div>
            <div class="col-md"></div>
        </div>
        <br>
        </form>
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
                        @foreach ($resultados as $resultado)
                        @php
                            $winner = '';
                            if($resultado->goles_equipo_1 > $resultado->goles_equipo_2){
                                $winner = $resultado->partido->equipo_1->nombre_equipo." (".$resultado->goles_equipo_1."-".$resultado->goles_equipo_2.")";
                            }elseif($resultado->goles_equipo_1 < $resultado->goles_equipo_2){
                                $winner = $resultado->partido->equipo_2->nombre_equipo." (".$resultado->goles_equipo_2."-".$resultado->goles_equipo_1.")";
                            }else{
                                $winner = "Empate (".$resultado->goles_equipo_1."-".$resultado->goles_equipo_2.")";
                            }
                        @endphp
                          <tr>
                            <th>{{ $resultado->id }}</th>
                            <td>{{ $resultado->partido->equipo_1->nombre_equipo }}</td>
                            <td>{{ $resultado->partido->equipo_2->nombre_equipo }}</td>
                            <td>{{ $winner }}</td>                            
                          </tr>
                        @endforeach
                    </tbody>
                  </table>
            </div>
            <div class="col-md"></div>
        </div>

        @if(session('message'))
            <script>
              Swal.fire('Guardado','<?= session("message"); ?>','success');
            </script>
        @endif

        @if(session('messageError'))
            <script>
              Swal.fire('Seleccione un partido','<?= session("messageError"); ?>','warning');
            </script>
        @endif

        @yield('footer', View('footer'))
    </body>
</html>