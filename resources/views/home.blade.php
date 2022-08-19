<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @yield('imports', View('imports'))
        
        <title>ProdeMundial</title>        

        
    </head>
    <body class="antialiased">        
        @yield('menu', View('menu'))        
        
        <div class="row">
            <p>Contenido</p>
        </div>

        @yield('footer', View('footer'))
    </body>
</html>