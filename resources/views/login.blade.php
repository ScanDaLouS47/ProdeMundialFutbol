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
              <br>
              <div class="fondoFormulario">
                <form>
                    
                    <div class="form-group textologin">
                        <label for="exampleInputPassword1">Dni</label>
                        <input type="number" class="form-control" id="dni" name="dni" placeholder="ingrese su dni" required autocomplete="false">
                      </div>
                      
                      <div  class="form-group textologin">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="ingrese su contraseña" required>
                      </div>
                  </form>
                  <div class="row">
                    <button class="btn btn-block btn-primary">Entrar</button>
                  </div>
                  <div class="row">
                    <div class="col"></div>
                    <div class="col-8 offset-md-8 col-md-4">
                      <a class="textologin" href="">Olvide mi contraseña</a>
                    </div>
                    <div class="col"></div>
                  </div>
                  
              </div>
            </div>
            <div class="col-md"></div>            
        </div>
        

            
        @yield('footer', View('footer'))
    </body>
</html>