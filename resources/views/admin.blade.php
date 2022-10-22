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
        <div class="col-12 offset-md-1 col-md-10">
            <h1 class="text-center my-5">Bienvenido al Administrador del Prode 2022</h1>
        </div>
      </div> 
      <div class="row mb-5">
        <div class="col-12 offset-md-2 col-md-8">
            <p>En esta seccion podra cargar los resultados de los partidos jugados en el mundial qatar 2022.</p>
            <p>Tambien podra aprobar los prodes cargados por los usuarios de la app.</p>
            <p>Ante cualquier inconveniente no dude en consultar al equipo de desarrollo.</p>
        </div>
      </div>
        @yield('footer', View('footer'))
    </body>
</html>