<nav class="navbar navbar-expand-lg fondoMenu">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"><img src="img/toggle.png" alt=""></span> <span class="text-white">Menu</span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
  
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0 text-left">
          <li class="nav-item fondoBoton">
            <a class="nav-link textoMenu text-success" href="#"> <img src="img/botonUsuario.png" class="margenMenu" alt="">  {{ Auth::user()->name }}</a>
          </li>
          <li class="nav-item fondoBoton ">
            <a class="nav-link textoMenu" href="{{ route('prode') }}"> <img src="img/botonProde.png" class="margenMenu" alt="">  Prode</a>
          </li>
          <li class="nav-item fondoBoton">
              <a class="nav-link textoMenu" href="{{ route('fixture') }}"><img src="img/botonFixture.png" class="margenMenu" alt="">  Fixture</a>
            </li>
            <li class="nav-item fondoBoton ">
              <a class="nav-link textoMenu" href="{{ route('ranking') }}"> <img src="img/botonRanking.png" class="margenMenu" alt="">  Ranking</a>
            </li>
            <li class="nav-item fondoBoton ">
              <a class="nav-link textoMenu" href="{{ route('logout') }}"> <i class="fa fa-sign-out-alt"></i>  Salir</a>
            </li>
      </ul>
  </div>
</nav>