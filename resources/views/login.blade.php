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
                <form action = "{{route('login.index')}}" method="POST">
                    @csrf
                    <div class="form-group textologin">
                        <label for="exampleInputPassword1">Dni</label>
                        <input type="number" class="form-control" id="dni" name="dni" placeholder="ingrese su dni" required autocomplete="off">
                      </div>
                      
                      <div  class="form-group textologin">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="ingrese su contraseña" required autocomplete="off">
                      </div>                  
                  <div class="row">
                    <button type="submit" class="btn btn-block btn-primary">Entrar</button>
                  </div>
                </form>                
                <div class="row">
                  <div class="col"></div>
                  <div class="col-8 offset-md-9 col-md-3">
                    <a class="textologin" href="{{route('olvidepass')}}"><i class="fa fa-lock"></i> Olvide mi contraseña</a>
                  </div>
                  <div class="col"></div>
                </div>                  
              </div>
            </div>
            <div class="col-md"></div>            
        </div>
        @if(url()->previous() == '{{ route('registro') }}' && session('resp'))                          
            @if(session('resp') == 'ok')
              <script>
                
                Swal.fire({
                  // title: 'Se ha registrado correctamente. Ahora puede entrar a nuestra app',
                  html: '<p class="modalAlertText">Se ha registrado correctamente. Ahora puede entrar a nuestra app.</p>',                  
                  width: 600,
                  padding: '3em',
                  color: '#fff',                                    
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
                // title: 'El usuario no se pudo registrar intentelo mas tarde.',
                html: '<p class="modalAlertText">El usuario no se pudo registrar intentelo mas tarde.</p>',
                width: 600,
                padding: '3em',
                color: '#fff',                
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