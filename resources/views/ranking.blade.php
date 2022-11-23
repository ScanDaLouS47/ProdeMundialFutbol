<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @yield('imports', View('imports'))
        
        <title>ProdeMundial</title>        

        
    </head>
    <body class="antialiased">        
        @yield('menu', View('menu'))  
        <br>             
        <div class="row">
          <div class="col-12 offset-md-3 col-md-6 bg-info">
              <p>Estamos concientes de problemas en la carga de los puntos. El problema ya fue solucionado le pedimos disculpas a los usuarios y gracias por saber entender.</p>
          </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md"></div>
            <div class="col-md-8"><div class="col-md-12 bg-success tituloGrupos">RANKING</div>
            <table class="table table-striped table-dark">
                <thead>
                  <tr>
                    <th scope="col" class="text-center">#PUESTO</th>
                    <th scope="col">NOMBRE Y APELLIDO</th>
                    <th scope="col" class="text-center">PUNTOS</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($prodes as $key => $prode)     
                    <tr>
                      @if (($key + 1) == 1)
                        <th scope="row" class="text-center"><img src="/img/puesto.png" alt=""></th>
                      @else
                        <th scope="row" class="text-center">{{ $key + 1 }}</th>
                      @endif
                      <td>{{ $prode->usuario->name }}</td>
                      <td class="text-center">{{ $prode->puntaje }}</td>
                    </tr>
                  @endforeach
                  {{-- <tr>
                    <th scope="row" class="text-center"><img src="/img/puesto.png" alt=""></th>
                    <td>Marcos Vela</td>
                    <td class="text-center">30</td>
                  </tr>
                  <tr>
                    <th scope="row" class="text-center">2</th>
                    <td>Jacob Carranza</td>
                    <td class="text-center">23</td>
                  </tr>
                  <tr>
                    <th scope="row" class="text-center">3</th>
                    <td>Larry Perez</td>
                    <td class="text-center">20</td>
                  </tr>
                  <tr>
                    <th scope="row" class="text-center">4</th>
                    <td>Leon Gil</td>
                    <td class="text-center">18</td>
                  </tr>
                  <tr>
                    <th scope="row" class="text-center">5</th>
                    <td>Maico Beltran</td>
                    <td class="text-center">17</td>
                  </tr>
                  <tr>
                    <th scope="row" class="text-center">6</th>
                    <td>Mateo Vergara</td>
                    <td class="text-center">16</td>
                  </tr>
                  <tr>
                    <th scope="row" class="text-center">7</th>
                    <td>José Peralta</td>
                    <td class="text-center">15</td>
                  </tr>
                  <tr>
                    <th scope="row" class="text-center">8</th>
                    <td>Angelo Timoteo</td>
                    <td class="text-center">13</td>
                  </tr>
                  <tr>
                    <th scope="row" class="text-center">9</th>
                    <td>Vanesa Michalonga</td>
                    <td class="text-center">10</td>
                  </tr>
                  <tr>
                    <th scope="row" class="text-center">10</th>
                    <td>Julio Picapiedra</td>
                    <td class="text-center">5</td>
                  </tr> --}}
                </tbody>
              </table></div>
            <div class="col-md"></div>
        
        </div>
            

            
           
       
        
            
        @yield('footer', View('footer'))
    </body>
</html>