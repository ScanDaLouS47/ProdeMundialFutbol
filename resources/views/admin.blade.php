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
       

        @yield('footer', View('footer'))
    </body>
</html>