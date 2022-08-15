<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @yield('imports', View('imports'))
        
        <title>Laravel</title>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        @yield('menu', View('menu'))

        <p>Vista Registro</p>

        @yield('footer', View('footer'))
    </body>
</html>