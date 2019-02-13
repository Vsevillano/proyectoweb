    
    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="/">Vsevillano</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="/">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/portfolio">Portfolio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/blog">Blog</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Proyectos
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
                <a class="dropdown-item" href="sistemas">Admon. de sistemas</a>
                <a class="dropdown-item" href="desarrollo">Desarrollo web</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/contacto">Contacto</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                @if (Auth::guest())
                    Log in
                @else
                    Log out
                @endif
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
              @if (Auth::guest())
                  <a class="dropdown-item" href="login">Iniciar sesión <i class="fas fa-sign-in-alt"></i></a>
                  <a class="dropdown-item" href="register">Crear cuenta <i class="fas fa-user-plus"></i></a>
              @else
              <form method="post" action="{{ route('logout') }}">
                {{ csrf_field() }}
                <button class="dropdown-item">Cerrar sesión <i class="fas fa-sign-out-alt"></i></button>
              </form>
              @endif
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
