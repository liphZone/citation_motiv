<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <a class="navbar-brand" href="{{ route('accueil') }}"> {{ config('app.name') }} </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <form class="form-inline" action="" method="get">
        <div class="form-group mb-2">
          <input class="form-control" type="search" name="search" autocomplete="off" value="thème ou auteur" id="" required>
        </div>
        <div class="form-group mx-sm-3 mb-2">
          <button type="submit" class="btn btn-primary" title="chercher"> <i class="fa fa-search" aria-hidden="true"></i></button>
        </div>
      </form>
    </ul>
  
    <ul class="navbar-nav ml-auto">
      @if (Route::is('accueil'))
        <li class="nav-item">
          <a class="nav-link" href="{{ route('author') }}"> Auteurs </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('subject') }}"> Thèmes </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('suggestion') }}"> Proposition </a>
        </li>
      @elseif (Route::is('author'))
        <li class="nav-item">
          <a class="nav-link" href="{{ route('accueil') }}"> Accueil </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('subject') }}"> Thèmes </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('suggestion') }}"> Proposition </a>
        </li>
      @elseif (Route::is('subject'))
        <li class="nav-item">
          <a class="nav-link" href="{{ route('accueil') }}"> Accueil </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('author') }}"> Auteurs </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('suggestion') }}"> Proposition </a>
        </li>
      @elseif (Route::is('suggestion'))
        <li class="nav-item">
          <a class="nav-link" href="{{ route('accueil') }}"> Accueil </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('author') }}"> Auteurs </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('subject') }}"> Thèmes </a>
        </li>
      @elseif (!(Route::is('accueil') || Route::is('author') || Route::is('suggestion')  || Route::is('subject') ) )
        <li class="nav-item">
          <a class="nav-link" href="{{ route('accueil') }}"> Accueil </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('author') }}"> Auteurs </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('subject') }}"> Thèmes </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('suggestion') }}"> Proposition </a>
        </li>
      @endif

      @auth
        <li class="nav-item">
          <a href="{{ route('accueil_user') }}" type="button" class="btn btn-secondary"> Gérer mon compte </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{ route('deconnexion') }}"> <i class="fa fa-power-off" aria-hidden="true"></i> Déconnexion </a>
        </li>
      @endauth

      @guest
        <li class="nav-item {{ set_active_route('form_login') }}">
          <a class="nav-link" href="{{ route('form_login') }}"> Connexion </a>
        </li>
        <li class="nav-item {{ set_active_route('form_register') }}">
          <a class="btn btn-success" href="{{ route('form_register') }}" role="button"> Proposer une citation </a>
         
        </li>
      @endguest
    
     
    </ul>
  </div>
</nav>
  