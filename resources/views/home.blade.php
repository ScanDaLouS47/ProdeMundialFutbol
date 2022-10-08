<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @yield('imports', View('imports'))

        <script>
            ScrollReveal({ duration: 1000 });
        </script>
        
        <title>ProdeMundial</title>        

        
    </head>
    <body class="antialiased">     
      <div class="row">
         <div class="col-12 col-md-12 p-0">
            @yield('menuhome', View('menuhome'))        
         </div>
      </div>         
        {{-- @yield('menuhome', View('menuhome'))         --}}

        <div class="row">
            <div class="col-12 offset-md-4 col-md-4">
               <h1 class="text-center tituloHome"><img class="iconoHome" src="img/imgHome/icono.jpg"> Prode 2022</h1>
            </div>
        </div>
        <div class="row">
         <div class="col-12 col-md-6">
            <div id="carouselExampleCaptions" class="carousel slide w-full h-auto" data-ride="carousel">
               <ol class="carousel-indicators">
               <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
               <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
               <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
               </ol>
               <div class="carousel-inner">
               <div class="carousel-item active w-full">
                  <img src="img/imghome/imagen-1.jpg" class="d-block w-100" alt="...">
                  <div class="carousel-caption d-none d-md-block badge badge-secondary text-wrap shadow-lg">                  
                     <h5>Apuesta contra otros usuarios</h5>
                     <p>Demuestra que eres la persona que mas sabe sobre este mundial qatar 2022.</p>
                  </div>
               </div>
               <div class="carousel-item">
                  <img src="img/imghome/imagen-2.jpg" class="d-block w-100" alt="...">
                  <div class="carousel-caption d-none d-md-block badge badge-secondary text-wrap shadow-lg">
                     <h5>Obten toda la información</h5>
                     <p>Verifica en tiempo real los resultados de los partidos y tus puntos obtenidos.</p>
                  </div>
               </div>
               <div class="carousel-item">
                  <img src="img/imghome/imagen-3.jpg" class="d-block w-100" alt="...">
                  <div class="carousel-caption d-none d-md-block badge badge-secondary text-wrap shadow-lg">
                     <h5>Vence y gana</h5>
                     <p>Supera a los demas participantes y consigue la victoria.</p>
                  </div>
               </div>
               </div>
               <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
               <span class="carousel-control-prev-icon" aria-hidden="true"></span>
               <span class="sr-only">Previous</span>
               </button>
               <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next">
               <span class="carousel-control-next-icon" aria-hidden="true"></span>
               <span class="sr-only">Next</span>
               </button>
            </div>
         </div>
         <div class="col-12 col-md-6">
            <div class="descripcion">
               <h2 class="tituloDetalleHome">¡¡Bienvenido!!</h2>
               <p class="textoDetalleHome">
                  Te damos la bienvenida a nuestro prode 2022 en donde podras participar por un premio contra los otros usuarios de la app.
               </p>
               <p class="textoDetalleHome">
                  Este proyecto es una iniciativa de la asociacion de futbol infantil de la ciudad de los condores.
               </p>
               <p class="textoDetalleHome">
                  Te deseamos mucha suerte y ante cualquier duda no dudes en contactarnos.
               </p>
            </div>
         </div>

        </div>
        <hr>
        <div class="row">
         <div class="col-12 col-md-4">
           <div class="card">
             <div class="card-body">
               <h5 class="card-title"><i class="fa fa-phone"></i> Contáctanos</h5>
               <p class="card-text">Ponte en contacto con un representante para obtener tu prode.</p>               
             </div>
           </div>
         </div>
         <div class="col-12 col-md-4">
           <div class="card">
             <div class="card-body">
               <h5 class="card-title"><i class="fa fa-sign-in-alt"></i> Ingresa</h5>
               <p class="card-text">Regístrate e ingresa a nuestra app para cargar tus prodes.</p>               
             </div>
           </div>
         </div>
         <div class="col-12 col-md-4">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title"><i class="fa fa-mobile-alt"></i> Infórmate</h5>
                <p class="card-text">Verifica los resultados de los partidos y tus puntos obtenidos.</p>                
              </div>
            </div>
          </div>
       </div>
       <br>
       <div class="row">
         <div class="col-12 col-md-4">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title"><i class="fa fa-donate"></i> ¡Gana!</h5>
                <p class="card-text">Consigue puntos y se el campeón de este prode.</p>                
              </div>
            </div>
          </div>
       </div>

       <div class="row">
         <div class="col-12 offset-md-4 col-md-4">
            <h2 class="text-center tituloHome">¿Cómo participar?</h2>
         </div>
       </div>

       <div class="row">
         <div class="col-12 offset-md-2 col-md-8">            
            {{-- <p>
               Para empezar debes registrarte y pedir tu prode despues de pagarlo. Ya teniendo tu PRODE puede marcar en cada partido a disputar si algunos de los 2 equipos en disputa gana el partido , pierde o empata; tambien puedes agregar algun resultado a tu parecer como en el ejemplo acontinuacion.
            </p> --}}
            <div class="container2">

               <ul class="bc text-center">
                   <li><a class="first" data-toggle="collapse" href="#infoComprar" role="button" aria-expanded="false" aria-controls="infoComprar"><i class="fa fa-money-check-alt"></i> Comprar</a></li>
                   <li><a data-toggle="collapse" href="#infoRegistrarse" role="button" aria-expanded="false" aria-controls="infoRegistrarse"><i class="fa fa-file-invoice"></i> Registrarse</a></li>
                   <li><a data-toggle="collapse" href="#infoIngresar" role="button" aria-expanded="false" aria-controls="infoIngresar"><i class="fa fa-sign-in-alt"></i> Ingresar</a></li>
                   <li><a data-toggle="collapse" href="#infoCargar" role="button" aria-expanded="false" aria-controls="infoCargar"><i class="fa fa-upload"></i> Cargar</a></li>
                   <li><a data-toggle="collapse" href="#infoModificar" role="button" aria-expanded="false" aria-controls="infoModificar"><i class="fa fa-pencil-alt"></i> Modificar</a></li>
                   <li><a class="current" data-toggle="collapse" href="#infoVerificar" role="button" aria-expanded="false" aria-controls="infoVerificar"><i class="fa fa-clipboard-check"></i> Verificar</a></li>
               </ul>
                 
            </div>
            <div class="collapse" id="infoComprar">
               <p class="">
                  <i class="fa fa-futbol"></i> Para comprar su prode debe ponerse en contacto con uno de nuestros representantes. En el pie de pagina tiene la información de contacto por si lo necesita.
               </p>
            </div>
            <div class="collapse" id="infoRegistrarse">
               <p class="">
                  <i class="fa fa-futbol"></i> Para registrarse debe entrar a la ventana registro mediante el menu principal que se encuentra en la parte de arriba de esta pagina. Allí debera ingresar la informacion solicitada en el formulario para poder ser usuario de nuestra app.
               </p>
            </div>
            <div class="collapse" id="infoIngresar">
               <p class="">
                  <i class="fa fa-futbol"></i> Ya registrados en la app debemos logearnos mediante la ventana de entrar con nuestro dni y nuestra password.
               </p>
            </div>
            <div class="collapse" id="infoCargar">
               <p class="">
                  <i class="fa fa-futbol"></i> Luego de ingresar a la app podremos cargar nuestro prode en la ventana de "Prode" con nuestros pronostico de lo que serán los resultados de los partidos.
               </p>
            </div>
            <div class="collapse" id="infoModificar">
               <p class="">
                  <i class="fa fa-futbol"></i> Los usuarios de la app tienen hasta un par de días antes de que comiencen los partidos para modificar sus prodes ya que esta opción se deshabilitará luego para evitar trampas y cambios que veneficien a los participantes.
               </p>
            </div>
            <div class="collapse" id="infoVerificar">
               <p class="">
                  <i class="fa fa-futbol"></i> Puede verificar los partidos ya jugados y sus resultados, como asi tambien el ranking de las personas en base a sus puntos obtenidos.
               </p>
            </div>
         </div>
       </div>

       <div class="row">
         <div class="col-12 offset-md-4 col-md-4">
            <h2 class="text-center tituloHome">Qatar 2022</h2>
         </div>
       </div>

       <div class="row p-4">
          <div class="card col-md-6 px-0" style="width: 18rem;">
            <img src="img/imgHome/sedes.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Sedes</h5>
              <p class="card-text">Catar hasta la actualidad confirmó ocho estadios en cinco ciudades para el mundial:
               Al Wakrah,
                Doha, Rayán,
                 Jor y Lusail,
                  todas ellas albergarán los 64 partidos de la Copa Mundial.</p>
            </div>
          </div>
          <div class="card col-md-6 px-0" style="width: 18rem;">
            <img src="img/imgHome/mascota.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Mascota</h5>
              <p class="card-text">La mascota oficial del Mundial de Catar 2022 es La'eeb que fue presentado el 1 de abril de 2022 en el sorteo para definir los grupos.</p>
            </div>
          </div>
          <div class="card col-md-6 px-0" style="width: 18rem;">
            <img src="img/imgHome/cancion.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Canción oficial</h5>
              <p class="card-text">El 1 de abril de 2022 se lanzó la canción oficial del mundial llamado «Hayya Hayya (Better Together)» interpretado por el cantante estadounidense Trinidad Cardona con la participación del ícono del afrobeats Davido y AISHA.</p>
            </div>
          </div>
          <div class="card col-md-6 px-0" style="width: 18rem;">
            <img src="img/imgHome/pelota_qatar.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Balón oficial</h5>
              <p class="card-text">Al Rihla es el nombre oficial del balón para el torneo.</p>
            </div>
          </div>
       </div>

        @yield('footer', View('footer'))
        <script>         
         ScrollReveal({ distance: '500px' }).reveal('.imgPrincipal', { origin: 'top' })
         ScrollReveal({ distance: '100px' }).reveal('.txtPrincipal', { delay: 2000, origin: 'right' })         
         ScrollReveal({ distance: '100px' }).reveal('.card', { delay: 1000, origin: 'bottom' })   
         ScrollReveal({ distance: '100px' }).reveal('.tituloHome', { delay: 1000, origin: 'left' })  
         ScrollReveal({ distance: '100px' }).reveal('.descripcion', { delay: 1000, origin: 'right' })  
         ScrollReveal({ distance: '100px' }).reveal('.container2', { delay: 1000, origin: 'bottom' })  
         ScrollReveal().reveal('.punchline', { delay: 2000 })
      </script>
    </body>
</html>