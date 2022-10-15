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
         <br>        
        <p class="text-center textohome">Usuarios registrados</p>     
        <ul>                
            @foreach ($usuarios as $usuario)
                <li>{{ $usuario->nombre }}</li>
            @endforeach
        </ul>
        @if(session('resp'))
            <p>El mensaje es : {{ session('message') }}</p>        
        @endif
        <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">Usuario</th>
                <th scope="col">Nombre y Apellido</th>
                <th scope="col">Dni</th>
                <th scope="col">Cantidad de Prodes</th>
                <th scope="col">Modificar</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Marcos Gil</td>
                <td>35893816</td>
                <td>1</td>
                <td><i class="fa fa-user-edit"></i></td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Jacob Vagio</td>
                <td>23987357</td>
                <td>2</td>
                <td><i class="fa fa-user-edit"></i></td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Vanesa Rosso</td>
                <td>16893835</td>
                <td>1</td>
                <td><i class="fa fa-user-edit"></i></td>
              </tr>
              <tr>
                <th scope="row">4</th>
                <td>Julio Vignolo</td>
                <td>35987357</td>
                <td>3</td>
                <td><i class="fa fa-user-edit"></i></td>
              </tr>
              <tr>
                <th scope="row">5</th>
                <td>Carlos Beltran</td>
                <td>15369896</td>
                <td>1</td>
                <td><i class="fa fa-user-edit"></i></td>
              </tr>
            </tbody>
          </table>
          <hr>

        @yield('footer', View('footer'))

        
    </body>
</html>