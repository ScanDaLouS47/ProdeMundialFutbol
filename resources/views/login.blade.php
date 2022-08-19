<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @yield('imports', View('imports'))
        
        <title>ProdeMundial</title>        

        
    </head>
    <body class="antialiased">        
        @yield('menuhome', View('menuhome'))        
        
        <div class="row fondoLogin">
            <div class="col-md"></div>
            <div class="col-md-6"> 
                <form>
                    <div class="form-group textologin">
                      <label for="exampleInputEmail1">Nombre Completo</label>
                      <input type="text" class="form-control" id="nombre" name="nombre" placeholder="ingrese su nombre completo" required>
                    </div>
                    <div class="form-group textologin">
                        <label for="exampleInputPassword1">Dni</label>
                        <input type="number" class="form-control" id="dni" name="dni" placeholder="ingrese su dni" required>
                      </div>
                      <div class="form-group textologin">
                        <label for="exampleInputPassword1">Telefono</label>
                        <input type="Telefono" class="form-control" id="telefono" name="telefono" placeholder="ingrese su telefono">
                      </div>
                      <div  class="form-group textologin">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="ingrese su contraseña">
                      </div>
                      <br>
                      <div class="form-group">
                        <button style="background-color: #7C1838;" type="submit" class="btn btn-block">Crear Usuario</button>
                      </div>
                  </form>
            </div>
            <div class="col-md"></div>            
        </div>
        

            
        @yield('footer', View('footer'))
    </body>
</html>