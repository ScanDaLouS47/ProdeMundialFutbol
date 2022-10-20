<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @yield('imports', View('imports'))
        
        <title>ProdeMundial</title>        

        
    </head>
    <body class="antialiased">        
        @yield('menu', View('menu'))  
        <br>        
        @foreach ($partidos as $partido)                    
            @php                                                
                $fecha = explode("-",$partido->fecha);
                $hoy = Carbon\Carbon::now();            
            @endphp            
            @if ($partido->fecha > $hoy)                
                <div class="row partidosProde">
                    <div class="col-md"></div>
                    <div class="col-12 col-md-8 bg-danger titulosFixture card-header">{{ $fecha[2]."-".$fecha[1]."-".$fecha[0] }} | {{ $partido->hora }} hs</div>
                    <div class="col-md"></div>
                </div>   
                <div class="row partidosProde card-body">
                    <div class="col-md"></div>
                    <div class="col-md-3 "> 
                        <div class="row">
                            <div class="col-md-3">
                                <img src="img/banderas/{{ $partido->equipo_1->imagen }}" class="imgBandera">
                            </div>
                            <div class="col-md-9 nombreEquipos centrarNombres">
                                {{ $partido->equipo_1->nombre_equipo }}
                            </div>                            
                        </div>
                    </div>
                    <div class="col-md-1 bg-danger">
                        @if ($partido->resultado)
                            <input class="golesResultado bg-dark text-white" type="text" value="{{ $partido->resultado->goles_equipo_1 }}" readonly></div>
                        @else
                            <input class="golesResultado bg-dark text-white" type="text" value="" readonly></div>
                        @endif                        
                    <div class="col-md-1 bg-danger">
                        @if ($partido->resultado)
                            <input class="golesResultado bg-dark text-white" type="text" value="{{ $partido->resultado->goles_equipo_2 }}" readonly></div>
                        @else
                            <input class="golesResultado bg-dark text-white" type="text" value="" readonly></div>
                        @endif                                             
                    <div class="col-md-3 ">
                        <div class="row">                                                      
                            <div class="col-md-9 nombreEquipos centrarNombres">
                                {{ $partido->equipo_2->nombre_equipo }}
                            </div>   
                            <div class="col-md-3">
                                <img src="img/banderas/{{ $partido->equipo_2->imagen }}" class="imgBandera">
                            </div>                           
                        </div>                        
                    </div>
                    <div class="col-md"></div>        
                </div>
                <div class="row">
                    <div class="col-md"></div>
                    <div class="col-md-8">
                        <hr>
                    </div>
                    <div class="col-md"></div>
                </div>                
            @else
                <div class="row partidosProde">
                    <div class="col-md"></div>
                    <div class="col-12 col-md-8 bg-success titulosFixture card-header">{{ $fecha[2]."-".$fecha[1]."-".$fecha[0] }} | {{ $partido->estadio()->nombre_estadio }} | {{ $partido->hora }} hs</div>
                    <div class="col-md"></div>
                </div> 
                <div class="row partidosProde">
                    <div class="col-md"></div>
                    <div class="col-md-3 ">
                        <div class="row">  
                            <div class="col-md-3">
                                <img src="img/banderas/{{ $partido->equipo_1->imagen }}" class="imgBandera">
                            </div>                         
                            <div class="col-md-9 nombreEquipos centrarNombres">
                                {{ $partido->equipo_1->nombre_equipo }}                                                                
                            </div>                            
                        </div>                        
                    </div>
                    <div class="col-md-1 bg-success">
                        @if ($partido->resultado)
                            <input class="golesResultado bg-dark text-white" type="text" value="{{ $partido->resultado->goles_equipo_1 }}" readonly></div>
                        @else
                            <input class="golesResultado bg-dark text-white" type="text" value="" readonly></div>
                        @endif                           
                    <div class="col-md-1 bg-success">
                        @if ($partido->resultado)
                            <input class="golesResultado bg-dark text-white" type="text" value="{{ $partido->resultado->goles_equipo_2 }}" readonly></div>
                        @else
                            <input class="golesResultado bg-dark text-white" type="text" value="" readonly></div>
                        @endif                     
                    <div class="col-md-3 ">
                        <div class="row">                            
                            <div class="col-md-9 nombreEquipos centrarNombres">
                                {{ $partido->equipo_2->nombre_equipo }}
                            </div>
                            <div class="col-md-3">
                                <img src="img/banderas/{{ $partido->equipo_2->imagen }}" class="imgBandera">
                            </div>
                        </div>                        
                    </div>
                    <div class="col-md"></div>        
                </div> 
                <div class="row">
                    <div class="col-md"></div>
                    <div class="col-md-8">
                        <hr>
                    </div>
                    <div class="col-md"></div>
                </div>  
            @endif 
        @endforeach        

        <div class="row">
            <div class="col-12 offset-md-2 col-md-8">
                <div class="d-flex justify-content-center pagination-sm">
                    {!! $partidos->links() !!}
                </div>
            </div>
        </div>
        {{-- <div class="d-flex justify-content-center pagination-lg">
            {!! $partidos->links() !!}
        </div> --}}

        @if(session('resp') == 'ok')
          <script>
          </script>
        @else
        <script>            
        </script>
        @endif        
            
        @yield('footer', View('footer'))
    </body>
</html>