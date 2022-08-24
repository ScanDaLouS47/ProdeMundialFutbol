<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @yield('imports', View('imports'))
        
        <title>ProdeMundial</title>        

        
    </head>
    <body class="antialiased">        
        @yield('menu', View('menu'))        
        <p>Hola mundo</p>     
        <ul>                
            @foreach ($usuarios as $usuario)
                <li>{{ $usuario->nombre }}</li>
            @endforeach
        </ul>

        @yield('footer', View('footer'))
    </body>
</html>