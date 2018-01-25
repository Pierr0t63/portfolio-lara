<nav class="navbar fixed-top navbar-expand-lg navbar-dark">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav">
          <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">@lang('Accueil')</a></li>
          <li class="nav-item"><a class="nav-link" href="{{url('/realisations')}}">@lang('Réalisations')</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ url('/contact') }}">@lang('Contact')</a></li>
    </ul>
    <ul class="navbar-nav ml-auto">
        @admin
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownGestCat" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Administration
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownGestCat">
            <a class="dropdown-item" href="{{ route('msgcontact.index') }}">
              <i class="fa fa-wrench fa-lg"></i> Messages reçus 
            </a>
            <a class="dropdown-item" href="{{ route('category.index') }}">
              <i class="fa fa-wrench fa-lg"></i> Catégories 
            </a>
            <a class="dropdown-item" href="{{ route('project.index') }}">
              <i class="fa fa-wrench fa-lg"></i> Projets 
            </a>
            <a class="dropdown-item" href="{{ route('skill.index') }}">
              <i class="fa fa-wrench fa-lg"></i> Aptitudes 
            </a>
            <a class="dropdown-item" href="{{ route('training.index') }}">
              <i class="fa fa-wrench fa-lg"></i> Formation 
            </a>
          </div>
        </li>
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
        @endadmin
     
    </ul>
  </div>
</nav>