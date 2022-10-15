<nav class="navbar navbar-expand-lg fondoMenu">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"><img src="img/toggle.png" alt=""></span> <span class="text-white">Menu</span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">    
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0 text-left">
            <li class="nav-item ">
              <a class="nav-link textoMenu" href="{{ route('resultados') }}"><i class="fa fa-file-upload"></i> Resultados</a>
            </li>
            <li class="nav-item">
                <a class="nav-link textoMenu" href="{{ route('usuarios.index') }}"><i class="fa fa-users"></i> Usuarios</a>
              </li>
        </ul>
    </div>
  </nav>