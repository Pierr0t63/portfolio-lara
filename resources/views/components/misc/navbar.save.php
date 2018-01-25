<nav class="navbar fixed-top navbar-expand-lg navbar-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mainNavbar">
        <ul class="navbar-nav">
          <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">@lang('Accueil')</a></li>
          <li class="nav-item"><a class="nav-link" href="url('/')">@lang('Réalisations')</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ url('/contact') }}">@lang('Contact')</a></li>
        </ul>
        <ul class="navbar-nav ml-auto">
        @guest
            <li class="nav-item{{ currentRoute(route('login')) }}"><a class="nav-link" href="{{ route('login') }}">@lang('Connexion')</a></li>
        @else
          @admin
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle{{ currentRoute(
            route('category.index'),
            route('skill.index')
            )}}" href="#" id="navbarDropdownGestCat" role="button" data-toggle="Dropdown" aria-haspopup="true" aria-expanded="false">
              @lang('Administration')
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownGestCat">
              <a class="dropdown-item" href="{{ route('category.index') }}">
                <i class="fa fa-wrench fa-lg"></i> Catégories 
              </a>
              <a class="dropdown-item" href="{{ route('skill.index') }}">
                <i class="fa fa-wrench fa-lg"></i> Aptitudes 
              </a>
            </div>
          </li>
          @endadmin 
          <li class="nav-item">
              <a class="nav-link" href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();">
                  Déconnexion
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  {{ csrf_field() }}
              </form>
          </li>
        @endguest
        </ul>
    </div>
</nav>