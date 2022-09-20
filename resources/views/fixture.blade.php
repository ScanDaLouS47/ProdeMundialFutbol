<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @yield('imports', View('imports'))
        
        <title>ProdeMundial</title>        

        
    </head>
    <body class="antialiased">        
        @yield('menuhome', View('menuhome'))  
        <br>        
        @foreach ($partidos as $partido)        
            @php
                $hoy = new Date('Y-m-d');
                $fechaPartido = new Date($partido->fecha);
                $fecha = explode("-",$partido->fecha);
            @endphp            
            @if ($partido->estado == 0)
                <div class="row partidosProde">
                    <div class="col-md"></div>
                    <div class="col-md-4 bg-danger titulosFixture">{{ $fecha[2]."-".$fecha[1]."-".$fecha[0] }} | {{ $partido->hora }} hs</div>
                    <div class="col-md"></div>
                </div>   
                <div class="row partidosProde">
                    <div class="col-md"></div>
                    <div class="col-md-3 bg-secondary"> 
                        <div class="row">
                            <div class="col-md-2">
                                <img src="img/banderas/{{ $partido->equipo_1->imagen }}" class="imgBandera">
                            </div>
                            <div class="col-md-10 nombreEquipos centrarNombres">
                                {{ $partido->equipo_1->nombre_equipo }}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-1 bg-danger">
                        <input class="golesResultado" type="number" value="1" readonly></div>
                    <div class="col-md-1 bg-danger">
                        <input class="golesResultado" type="number" value="1" readonly></div>
                    <div class="col-md-3 bg-secondary">
                        <div class="row">
                            <div class="col-md-2">
                                <img src="img/banderas/{{ $partido->equipo_2->imagen }}" class="imgBandera">
                            </div>
                            <div class="col-md-10 nombreEquipos centrarNombres">
                                {{ $partido->equipo_2->nombre_equipo }}
                            </div>
                        </div>                        
                    </div>
                    <div class="col-md"></div>        
                </div> 
            @else
                <div class="row partidosProde">
                    <div class="col-md"></div>
                    <div class="col-md-4 bg-success titulosFixture">{{ $fecha[2]."-".$fecha[1]."-".$fecha[0] }} | {{ $partido->hora }} hs</div>
                    <div class="col-md"></div>
                </div> 
                <div class="row partidosProde">
                    <div class="col-md"></div>
                    <div class="col-md-3 bg-secondary">
                        <div class="row">
                            <div class="col-md-2">
                                <img src="img/banderas/{{ $partido->equipo_1->imagen }}" class="imgBandera">
                            </div>
                            <div class="col-md-10 nombreEquipos centrarNombres">
                                {{ $partido->equipo_1->nombre_equipo }}
                            </div>
                        </div>                        
                    </div>
                    <div class="col-md-1 bg-success">
                        <input class="golesResultado" type="number" value="1" readonly></div>
                    <div class="col-md-1 bg-success">
                        <input class="golesResultado" type="number" value="1" readonly></div>                    
                    <div class="col-md-3 bg-secondary">
                        <div class="row">
                            <div class="col-md-2">
                                <img src="img/banderas/{{ $partido->equipo_2->imagen }}" class="imgBandera">
                            </div>
                            <div class="col-md-10 nombreEquipos centrarNombres">
                                {{ $partido->equipo_2->nombre_equipo }}
                            </div>
                        </div>                        
                    </div>
                    <div class="col-md"></div>        
                </div> 
            @endif 
            {{-- <br>    
            <div class="row partidosProde">
                <div class="col-md"></div>
                <div class="col-md-3 bg-secondary">{{ $partido->equipo_1->nombre_equipo }}</div>
                <div class="col-md-1 bg-danger">
                    <input type="number" value="1"></div>
                <div class="col-md-1 bg-danger">
                <input type="number" value="0"></div>
                <br>
                <div class="col-md-3 bg-secondary">{{ $partido->equipo_2->nombre_equipo }}</div>
                <div class="col-md"></div>        
            </div>                          --}}
        @endforeach

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