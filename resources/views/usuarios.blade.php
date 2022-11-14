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
         <br>        
        <p class="text-center textohome">Usuarios registrados</p>     
        <ul>                
            @foreach ($usuarios as $usuario)
                <li>{{ $usuario->nombre }}</li>
            @endforeach
        </ul>
        @if(session('resp'))
            <p>El mensaje es : {{ session('message') }}</p>        
        @endif
        <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">Usuario</th>
                <th scope="col">Nombre y Apellido</th>
                <th scope="col">Dni</th>                
                <th scope="col" class="text-center">Modificar</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($usuarios as $usuario)       
                <tr>
                  <th scope="row">{{ $usuario->id }}</th>
                  <td>{{ $usuario->name }}</td>
                  <td>{{ $usuario->dni }}</td>                  
                  <td class="text-center"><h5><i style="cursor: pointer;" class="fa-solid fa-user-edit mostrarUsuario" data-toggle="modal" data-target="#modUsuarioModal" aria-controls="{{ $usuario->id }}"></i></h5></td>
                </tr>                                 
                  <br>                        
              @endforeach
            </tbody>
          </table>
          <div class="row">
            <div class="col-12 offset-md-2 col-md-8">
                <div class="d-flex justify-content-center pagination-sm">
                    {!! $usuarios->links() !!}
                </div>
            </div>
        </div>
          <hr>
          <!-- Scrollable modal -->
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal fade" id="modUsuarioModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Activar prodes</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                      <table class="table" id="tablaProdes">
                        <thead>
                          <tr>                            
                            <th scope="col">Fecha</th>
                            <th scope="col">Estado</th>
                            <th scope="col">Aprobar</th>
                          </tr>
                        </thead>
                        <tbody>
                        </tbody>
                      </table>
            
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Salir</button>                        
                    </div>
                    </div>
                </div>
            </div>
        </div>

        @if(session('message'))
            <script>
              Swal.fire('Correcto','<?= session("message"); ?>','success');
            </script>
        @endif

        <script>
          $(".mostrarUsuario").on('click', function (e) {
                let id = $(this).attr("aria-controls");
                
                $.ajax({
                    type: "GET",
                    url: 'modusuario/'+id,
                    success: function(data) {
                        console.log(data); 
                        data.forEach(element => {  
                          let fechaCarga = element.fecha_carga.replace(/^(\d{4})-(\d{2})-(\d{2})$/g,'$3/$2/$1');
                          let estadoBtn = 'disabled';
                          let etEstado = '<h5><span class="badge badge-pill badge-success">aprobado</span></h5>';
                          if(element.estado === 0){
                            estadoBtn = 'enabled';
                            etEstado = '<h5><span class="badge badge-pill badge-danger">validando</span></h5>';
                          }
                          var htmlTags = '<tr>'+
                            '<td>' + fechaCarga + '</td>'+
                            '<td>' + etEstado + '</td>'+
                            '<td><button class="btn btn-primary" '+estadoBtn+' onclick="window.location.href=\'aprobarestado/'+element.id+'\'"><i class="fa fa-check"></i></button></td>'+                            
                          '</tr>';       
                            $("#tablaProdes tbody").append(htmlTags);                                             
                        });                       
                    },
                    error: function (error) { 
                        console.log(error);                         
                    }
                });
            });
        </script>

        <!-- JS, Popper.js, and jQuery -->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"  crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"  crossorigin="anonymous"></script>      

        @yield('footer', View('footer'))

        
    </body>
</html>