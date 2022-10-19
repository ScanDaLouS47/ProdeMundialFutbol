<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>        
        @yield('imports', View('imports'))
        <title>ProdeMundial</title>        

        
    </head>
    <body class="antialiased">        
        <img src="./img/error.gif" class="imgHome">
    </body>
</html>