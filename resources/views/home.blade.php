<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @yield('imports', View('imports'))
        
        <title>ProdeMundial</title>        

        
    </head>
    <body class="antialiased">        
        @yield('menu', View('menu'))        
        
        <div class="row">
            <div class="col-md-5 textohome">
            La Copa Mundial de Fútbol de la FIFA Catar 2022,
             será la XXII edición de la Copa Mundial de Fútbol masculino organizada por la FIFA.
              Se desarrollará desde el 20 de noviembre al 18 de diciembre en Catar,
               que consiguió los derechos de organización el 2 de diciembre de 2010.
               <hr>
              SEDES:
               Catar hasta la actualidad confirmó ocho estadios en cinco ciudades para el mundial:
                Al Wakrah,
                 Doha, Rayán,
                  Jor y Lusail,
                   todas ellas albergarán los 64 partidos de la Copa Mundial.
                   <hr>
                   MASCOTA:
                   La mascota oficial del Mundial de Catar 2022 es La'eeb que fue presentado el 1 de abril de 2022 en el sorteo para definir los grupos.
                   <hr>
                   CANCION OFICIAL:
                   El 1 de abril de 2022 se lanzó la canción oficial del mundial llamado «Hayya Hayya (Better Together)» interpretado por el cantante estadounidense Trinidad Cardona con la participación del ícono del afrobeats Davido y AISHA.
                   <hr>
                   BALON OFICIAL:
                    Al Rihla es el nombre oficial del balón para el torneo.
                     <hr>
                </div>
                <div class="col-md-2"></div>
                <div class="col-md-5 textohome">
                    INFO DEL PROFE Y SU FUNCIONAMIENTO: 
                     <hr>
                     Para empezar debes registrarte y pedir tu prode despues de pagarlo.
                     Ya teniendo tu PRODE puede marcar en cada partido a disputar si algunos de los 2 equipos en disputa gana el partido , pierde o empata;
                     tambien puedes agregar algun resultado a tu parecer como en el ejemplo acontinuacion.
                    <hr>
                     ARGENTINA 2
                     <br>
                              vs
                     <br>
                     POLONIA    1
                     <br>
                     Si aciertas el ganador ,perdedor o un empate ganaras 3 pts , pero si acierta el resultado que agregaste ganas total 5 pts por partido.
                     Luego de cada partido tendras que ver en que puesto estas en la tabla de posiciones.
                     <br>
                     tambien podes elegir los equipos que salgan primero y segundo de cada grupo para una posible segunda etapa.


                </div>
        </div>

        @yield('footer', View('footer'))
    </body>
</html>