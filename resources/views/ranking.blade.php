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
            <div class="col-md"></div>
            <div class="col-md-8"><div class="col-md-12 bg-success tituloGrupos">RANKING</div>
            <table class="table table-striped table-dark">
                <thead>
                  <tr>
                    <th scope="col">#PUESTO</th>
                    <th scope="col">NOMBRE Y APELLIDO</th>
                    <th scope="col">PUNTOS</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row"><img src="/img/puesto.png" alt=""></th>
                    <td>Marcos Vela</td>
                    <td>30</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Jacob Carranza</td>
                    <td>23</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>Larry Perez</td>
                    <td>20</td>
                  </tr>
                  <tr>
                    <th scope="row">4</th>
                    <td>Leon Gil</td>
                    <td>18</td>
                  </tr>
                  <tr>
                    <th scope="row">5</th>
                    <td>Maico Beltran</td>
                    <td>17</td>
                  </tr>
                  <tr>
                    <th scope="row">6</th>
                    <td>Mateo Vergara</td>
                    <td>16</td>
                  </tr>
                </tbody>
              </table></div>
            <div class="col-md"></div>
        
        </div>
            

            
           
       
        
            
        @yield('footer', View('footer'))
    </body>
</html>