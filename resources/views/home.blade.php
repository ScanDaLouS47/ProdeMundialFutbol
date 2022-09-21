<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @yield('imports', View('imports'))

        <script>
            AOS.init();
        </script>
        
        <title>ProdeMundial</title>        

        
    </head>
    <body class="antialiased">        
        @yield('menuhome', View('menuhome'))        
        
        <div class="row" data-aos="flip-left" data-aos-delay="100" data-aos-anchor=".row">
         <div class="col-md-12 ">
              <img src="./img/imghome/jugadores.jpg" alt=""> 
         </div>
         <div class="col-md-4 col-md-5">
             <p class=" textohome">
            La Copa Mundial de Fútbol de la FIFA Catar 2022,
             será la XXII edición de la Copa Mundial de Fútbol masculino organizada por la FIFA.
              Se desarrollará desde el 20 de noviembre al 18 de diciembre en Catar,
               que consiguió los derechos de organización el 2 de diciembre de 2010.
            </p>
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
                        <img src="./img/imghome/copa.jpg" alt=""> 
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
                     <img src="./img/imghome/pelota22.jpg" alt="">
                     <p class="textohome">
                     Si aciertas el ganador ,perdedor o un empate ganaras 3 pts , pero si acierta el resultado que agregaste ganas total 5 pts por partido.
                     Luego de cada partido tendras que ver en que puesto estas en la tabla de posiciones.
                     <br>
                     tambien podes elegir los equipos que salgan primero y segundo de cada grupo para una posible segunda etapa.En caso de una 
                     segunda etapa se tendra en cuenta los resultados de la eleccion de primer y segundo puesto en cada grupo, para sumar dichos puntos.
                     </p>
                  </div>

                </div>
        </div>

        @yield('footer', View('footer'))
    </body>
</html>