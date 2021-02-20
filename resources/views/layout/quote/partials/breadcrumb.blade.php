@if (!Route::is('accueil'))
  <div style="margin-top: 10px;">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a class="text-decoration-none" class="text-decoration-none" href="{{ route('accueil') }}">Accueil</a></li>
        @if (strtolower(Route::currentRouteName()) === strtolower('author') )
          <li class="breadcrumb-item">
            <a class="text-decoration-none" href="{{ route('author') }}">
              Auteurs
            </a>
          </li>

        @elseif (strtolower(Route::currentRouteName()) === strtolower('single_author') )
          <li class="breadcrumb-item">
            <a class="text-decoration-none" href="{{ route('author') }}">
              Auteurs
            </a>
          </li>

          <li class="breadcrumb-item">
            <a class="text-decoration-none" href="">
              {{ $request->id }}
            </a>
          </li>

        @elseif(strtolower(Route::currentRouteName()) === strtolower('suggestion'))
          <li class="breadcrumb-item">
            <a class="text-decoration-none" href="#">
              Proposition
            </a>
          </li>

        @elseif(strtolower(Route::currentRouteName()) === strtolower('subject'))
          <li class="breadcrumb-item">
            <a class="text-decoration-none" href="{{ route('subject') }}">
              Thèmes
            </a>
          </li>

        @elseif(strtolower(Route::currentRouteName()) === strtolower('single_subject'))
          <li class="breadcrumb-item">
            <a class="text-decoration-none" href="{{ route('subject') }}">
              Thèmes
            </a>
          </li>
          <li class="breadcrumb-item">
            <a class="text-decoration-none" href="{{ route('single_subject',$theme->libelle_categorie) }}">
              {{ $theme->libelle_categorie }}
            </a>
          </li>

        @elseif(strtolower(Route::currentRouteName()) === strtolower('single_citation'))
          <li class="breadcrumb-item">
            <a class="text-decoration-none" href="#">
              Auteurs
            </a>
          </li>
          <li class="breadcrumb-item">
            <a class="text-decoration-none" href="#">
              S 
            </a>
          </li>
          <li class="breadcrumb-item">
            <a class="text-decoration-none" href="#">
              {{ $quote->auteur }}
            </a>
          </li>

        @elseif(strtolower(Route::currentRouteName()) === strtolower('letter'))
          <li class="breadcrumb-item">
            <a class="text-decoration-none" href="#">
              Auteurs
            </a>
          </li>
          <li class="breadcrumb-item">
            <a class="text-decoration-none" href="{{ route('letter',$request->id) }}">
              Lettre
            </a>
          </li>
          <li class="breadcrumb-item">
            <a class="text-decoration-none" href="{{ $request->id }}">
              {{ $request->id }}
            </a>
          </li>

        @endif
      </ol>
    </nav>
  </div>
@endif
