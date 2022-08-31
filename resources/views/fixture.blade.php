<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @yield('imports', View('imports'))
        
        <title>ProdeMundial</title>        

        
    </head>
    <body class="antialiased">        
        @yield('menuhome', View('menuhome'))  
        <br>
        <div class="row partidosProde">
            <div class="col-md"></div>
        <div class="col-md-4 bg-danger">Partido jugado</div>
        <div class="col-md"></div>
        </div> 

        <br>
        <div class="row partidosProde">
            <div class="col-md"></div>
        <div class="col-md-3 bg-secondary">Argentina</div>
        <div class="col-md-1 bg-danger">
            <input type="number" value="1"></div>
        <div class="col-md-1 bg-danger">
           <input type="number" value="0"></div>
            <br>
        <div class="col-md-3 bg-secondary">Arabia Saudita</div>
        <div class="col-md"></div>        
        </div>
        <br>
        <div class="row partidosProde">
                <div class="col-md"></div>
                <div class="col-md-4 bg-success">Domingo (20/11) 07:00</div>
                <div class="col-md"></div>
        </div>
        <br>
        <div class="row partidosProde">
            <div class="col-md"></div>
        <div class="col-md-3 bg-secondary">Qatar</div>
        <div class="col-md-1 bg-success"> <input type="number"></div>
        <div class="col-md-1 bg-success"> <input type="number"></div>
        <div class="col-md-3 bg-secondary">Ecuador</div>
        <div class="col-md"></div>         
        </div>




        @if(session('resp') == 'ok')
          <script>
            
            // Swal.fire({
            //   title: 'Se ha registrado correctamente. Ahora puede entrar a nuestra app',
            //   width: 600,
            //   padding: '3em',
            //   color: '#fff',
            //   // color: '#716add',
            //   background: '#8c183d url(/images/trees.png)',
            //   backdrop: `
            //     rgba(0,0,125,0.4)              
            //     url("/img/qatar.gif")
            //     center top
            //     no-repeat
            //   `
            // })
          </script>
        @else
        <script>            
        //   Swal.fire({
        //     title: 'El usuario no se pudo registrar intentelo mas tarde.',
        //     width: 600,
        //     padding: '3em',
        //     color: '#fff',
        //     // color: '#716add',
        //     background: '#8c183d url(/images/trees.png)',
        //     backdrop: `
        //       rgba(0,0,125,0.4)              
        //       url("/img/qatar.gif")
        //       center top
        //       no-repeat
        //     `
        //   })
        </script>
        @endif

            
        @yield('footer', View('footer'))
    </body>
</html>