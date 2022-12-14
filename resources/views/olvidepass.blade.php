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
                <form action = "{{route('olvidepass')}}" method="POST">
                    @csrf

                    <div class="form-group textologin">
                        <label for="exampleInputPassword1">Dni</label>
                        <input type="number" class="form-control" id="dni" name="dni" placeholder="ingrese su DNI" required autocomplete="off">
                      </div>
                    <div class="form-group textologin">
                        <label for="exampleInputPassword1">Nueva contraseña</label>
                        <div class="input-group mb-3">
                          <input type="password" class="form-control" id="nuevaPass" name="nuevaPass" placeholder="ingrese su contraseña" required autocomplete="off">
                          <div class="input-group-append">
                            <span class="input-group-text" id="basic-addon2" onClick="verPass()"><i class="fa fa-eye" id="iconoEye"></i></span>
                          </div>
                        </div>
                      </div>
                      
                      <div  class="form-group textologin">
                        <label for="exampleInputPassword1">Repita su contraseña</label>
                        <div class="input-group mb-3">
                          <input type="password" class="form-control" id="nuevaPass2" name="nuevapass2" placeholder="repita su contraseña" required autocomplete="off">
                          <div class="input-group-append">
                            <span class="input-group-text" id="basic-addon2" onClick="verPass()"><i class="fa fa-eye" id="iconoEye2"></i></span>
                          </div>
                        </div>
                        
                      </div>                  
                  <div class="row">
                    <button type="submit" class="btn btn-block btn-primary">Cambiar contraseña</button>
                  </div>
                </form>
                <div class="row">
                  <div class="col"></div>
                  <div class="col-8 offset-md-8 col-md-4">
                    {{-- <a class="textologin" href="">Olvide mi contraseña</a> --}}
                  </div>
                  <div class="col"></div>
                </div>                  
              </div>
            </div>
            <div class="col-md"></div>            
        </div>
        @if(url()->previous() == 'http://127.0.0.1:8000/registro')                  
            @if(session('resp') == 'ok')
              <script>
                
                Swal.fire({
                  title: 'Se ha registrado correctamente. Ahora puede entrar a nuestra app',
                  width: 600,
                  padding: '3em',
                  color: '#fff',
                  // color: '#716add',
                  background: '#8c183d url(/images/trees.png)',
                  backdrop: `
                    rgba(0,0,125,0.4)              
                    url("/img/qatar.gif")
                    center top
                    no-repeat
                  `
                })
              </script>
            @else
            <script>            
              Swal.fire({
                title: 'El usuario no se pudo registrar intentelo mas tarde.',
                width: 600,
                padding: '3em',
                color: '#fff',
                // color: '#716add',
                background: '#8c183d url(/images/trees.png)',
                backdrop: `
                  rgba(0,0,125,0.4)              
                  url("/img/qatar.gif")
                  center top
                  no-repeat
                `
              })
            </script>
            @endif
        @endif
        @if(session('message'))
            <script>
              Swal.fire('<?= session("message"); ?>');
            </script>
        @endif

            
        @yield('footer', View('footer'))
    </body>
</html>