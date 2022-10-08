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
               <h1 class="text-center tituloHome">Titulo del prode</h1>
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
               <h2>Descripcion</h2>
               <p>
                  Hola mundo
               </p>
            </div>
         </div>

        </div>
        <hr>
        <div class="row">
         <div class="col-6 col-md-4">
           <div class="card">
             <div class="card-body">
               <h5 class="card-title"><i class="fa fa-phone"></i> Contáctanos</h5>
               <p class="card-text">Ponte en contacto con un representante para obtener tu prode.</p>               
             </div>
           </div>
         </div>
         <div class="col-6 col-md-4">
           <div class="card">
             <div class="card-body">
               <h5 class="card-title"><i class="fa fa-sign-in-alt"></i> Ingresa</h5>
               <p class="card-text">Regístrate e ingresa a nuestra app para cargar tus prodes.</p>               
             </div>
           </div>
         </div>
         <div class="col-6 col-md-4">
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
         <div class="col-6 col-md-4">
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
            <h2 class="text-center tituloHome">Como participar del prode 2022</h2>
         </div>
       </div>

       <div class="row">
         <div class="col-12 offset-md-1 col-md-10">            
            <p>
               Para empezar debes registrarte y pedir tu prode despues de pagarlo. Ya teniendo tu PRODE puede marcar en cada partido a disputar si algunos de los 2 equipos en disputa gana el partido , pierde o empata; tambien puedes agregar algun resultado a tu parecer como en el ejemplo acontinuacion.
            </p>
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
        
        {{-- <div class="row" data-aos="flip-left" data-aos-delay="100" data-aos-anchor=".row">
         <div class="col-md-4">
            <div data-aos="fade-in">
               <p class=" textohome txtPrincipal">
               La Copa Mundial de Fútbol de la FIFA Catar 2022,
               será la XXII edición de la Copa Mundial de Fútbol masculino organizada por la FIFA.
               Se desarrollará desde el 20 de noviembre al 18 de diciembre en Catar,
                  que consiguió los derechos de organización el 2 de diciembre de 2010.
               </p>
            </div>
               <hr>
                <h1 class="tituloshome" >
              SEDES
            </h1>
            <p class="textohome">
               Catar hasta la actualidad confirmó ocho estadios en cinco ciudades para el mundial:
                Al Wakrah,
                 Doha, Rayán,
                  Jor y Lusail,
                   todas ellas albergarán los 64 partidos de la Copa Mundial.
                   <hr>
                </p>
                <h1 class="tituloshome">
                   MASCOTA
                </h1>
                <p class="textohome">
                   La mascota oficial del Mundial de Catar 2022 es La'eeb que fue presentado el 1 de abril de 2022 en el sorteo para definir los grupos.
                   <hr>
                </p>
                <h1 class="tituloshome">
                   CANCION OFICIAL
                </h1>
                <p class="textohome">
                   El 1 de abril de 2022 se lanzó la canción oficial del mundial llamado «Hayya Hayya (Better Together)» interpretado por el cantante estadounidense Trinidad Cardona con la participación del ícono del afrobeats Davido y AISHA.
                   <hr>
                </p>
                   <h1 class="tituloshome">
                   BALON OFICIAL
                    </h1>
                    <p class="textohome">
                     <img src="./img/imghome/pelota qatar.jpg" alt="imgHome">
                    Al Rihla es el nombre oficial del balón para el torneo.
                     <hr>
                    </p>
                </div>
                <div class="col-md-2"></div>
                <div class="col-md-5 textohome">
                  <div class="col-md-12">
                     <img src="" alt=""> 
                </div>
                <div class="col-md-12 col-md-5">
                    <h1 class="tituloshome">
                     <div class="col-md-12 ">
                        <img src="./img/imghome/copa.jpg" style="width: 100px;" alt=""> 
                   </div>
                    INFO DEL PROFE Y SU FUNCIONAMIENTO 
                    </h1> 
                    <hr>
                    <p class="textohome">
                     Para empezar debes registrarte y pedir tu prode despues de pagarlo.
                     Ya teniendo tu PRODE puede marcar en cada partido a disputar si algunos de los 2 equipos en disputa gana el partido , pierde o empata;
                     tambien puedes agregar algun resultado a tu parecer como en el ejemplo acontinuacion.
                    </p>
                     <h1 class="textohome">
                        <div class="col">
                           <div class="row partidosProde">
                              <div class="col-md"></div>
                          <div class="col-md-4 bg-secondary">Argentina</div>
                          <div class="col-md-1 bg-success">
                              1</div>
                          <div class="col-md-1 bg-danger">
                             0</div>
                              <br>
                          <div class="col-md-4   bg-secondary">Arabia Saudita</div>
                          <div class="col-md"></div>        
                          </div>
                           
                            
                        
                         </div>
                    </h1>
                     <br>
                     
                     <p class="textohome">
                     Si aciertas el ganador ,perdedor o un empate ganaras 3 pts , pero si acierta el resultado que agregaste ganas total 5 pts por partido.
                     Luego de cada partido tendras que ver en que puesto estas en la tabla de posiciones.
                     <br>
                     tambien podes elegir los equipos que salgan primero y segundo de cada grupo para una posible segunda etapa.En caso de una 
                     segunda etapa se tendra en cuenta los resultados de la eleccion de primer y segundo puesto en cada grupo, para sumar dichos puntos.
                     </p>
                  </div>

                </div>
        </div> --}}

        @yield('footer', View('footer'))
        <script>         
         ScrollReveal({ distance: '500px' }).reveal('.imgPrincipal', { origin: 'top' })
         ScrollReveal({ distance: '100px' }).reveal('.txtPrincipal', { delay: 2000, origin: 'right' })         
         ScrollReveal({ distance: '100px' }).reveal('.card', { delay: 1000, origin: 'bottom' })   
         ScrollReveal({ distance: '100px' }).reveal('.tituloHome', { delay: 1000, origin: 'left' })  
         ScrollReveal({ distance: '100px' }).reveal('.descripcion', { delay: 1000, origin: 'right' })  
         ScrollReveal().reveal('.punchline', { delay: 2000 })
      </script>
    </body>
</html>