 <!-- Sidebar -->
 <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3"><sup>{{ config('app.name') }} </sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('accueil_user') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Accueil</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
      Menu
    </div>
    <!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">

    @if (auth()->user()->type_utilisateur === 'Admin')
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            <i class="fas fa-fw fa-cog"></i>
            <span>Administrateur</span>
        </a>
        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('add_person') }} ">Ajouter admin</a>
                <a class="collapse-item" href="{{ route('list_persons') }} "> Liste des admins</a>
            </div>
        </div>
    @endif
        

    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-fw fa-cog"></i>
        <span>Citation</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="{{ route('add_citation') }} ">Poster une citation</a>
            <a class="collapse-item" href="{{ route('list_citations') }} "> Liste des citations</a>
        </div>
    </div>

    @can('create', \App\Model\Categorie::class)
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
            <i class="fas fa-fw fa-cog"></i>
            <span>Catégorie</span>
        </a>
        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('add_categorie') }} ">Ajouter une categorie</a>
                <a class="collapse-item" href="{{ route('list_categories') }}"> Liste des categories</a>
            </div>
        </div>
    @endcan
    
</li>

  <!-- Divider -->
  <hr class="sidebar-divider">

  </ul>
  <!-- End of Sidebar -->
