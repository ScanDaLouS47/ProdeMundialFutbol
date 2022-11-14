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
                <form action="{{route('usuarios.store')}}" method="POST">
                    @csrf
                    <div class="form-group textologin">
                      <label for="exampleInputEmail1">Nombre Completo</label>
                      <input type="text" class="form-control" id="nombre" name="nombre" placeholder="ingrese su nombre completo" required autocomplete="off">
                    </div>
                    <div class="form-group textologin">
                        <label for="exampleInputPassword1">Dni</label>
                        <input type="number" class="form-control" id="dni" name="dni" placeholder="ingrese su dni" required autocomplete="off">
                      </div>
                      <div class="form-group textologin">
                        <label for="exampleInputPassword1">Telefono</label>
                        <input type="Telefono" class="form-control" id="telefono" name="telefono" placeholder="ingrese su telefono" autocomplete="off">
                      </div>
                      <div  class="form-group textologin">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="ingrese su contraseña" autocomplete="off">
                      </div>
                      <br>
                      <div class="form-group">
                        <button  type="submit" class="btn btn-block btn-primary">Crear Usuario</button>
                      </div>
                      <div class="row">
                        <div class="col"></div>
                        <div class="col-8 offset-md-8 col-md-4">
                          <a class="textologin" href="{{ route('login') }}"><i class="fa fa-user"></i> Ya tengo una cuenta</a>
                        </div>
                        <div class="col"></div>
                      </div>
                  </form>
              </div>
              <br>
            </div>
            <div class="col-md"></div>            
        </div>

        @if(session('resp') == 'existedni')
          <script>
            Swal.fire('Ya existe un usuario registrado con ese DNI');
          </script>
        @endif
        

            
        @yield('footer', View('footer'))
    </body>
</html>