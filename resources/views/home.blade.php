<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @yield('imports', View('imports'))
        
        <title>ProdeMundial</title>        

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }

            a {
                text-decoration: none;
                color: #F3F3F5;
            }
            
            a:hover {
                color: #F3F3F5;
                text-decoration: underline;
                font-weight: bold;
            }
            .fondoMenu {
                background-color: #8c183d;
            }
        
            
        </style>
    </head>
    <body class="antialiased">
        @yield('menuhome', View('menuhome'))

        <p>Contenido</p>

        @yield('footer', View('footer'))
    </body>
</html>