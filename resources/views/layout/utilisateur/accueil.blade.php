@extends('layout.utilisateur.index')
@section('title','Accueil')
@section('content')

@if (auth()->user()->type_utilisateur === 'Admin')
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
            <div class="col mr-2">
                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Citations Administrateurs</div>
                {{-- <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $admin =\App\Models\Citation::where('type','Administrateur')->count() }}</div> --}}
            </div>
            <div class="col-auto">
                <i class="fas fa-comments fa-2x text-gray-300"></i>
            </div>
            </div>
        </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
            <div class="col mr-2">
                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Citations Utilisateurs</div>
                {{-- <div class="h5 mb-0 font-weight-bold text-gray-800"> {{ $user =\App\Models\Citation::where('type','Utilisateur')->count() }} </div> --}}
            </div>
            <div class="col-auto">
                <i class="fas fa-comments fa-2x text-gray-300"></i>
            </div>
            </div>
        </div>
        </div>
    </div>


    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Nombre utilisateurs</div>
                        <div class="row no-gutters align-items-center">
                            <div class="col-auto">
                                {{-- <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{ $user }}% </div> --}}
                            </div>
                            <div class="col">
                                <div class="progress progress-sm mr-2">
                                    {{-- <div class="progress-bar bg-info" role="progressbar" style="width: {{ "$user%"  }}" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">NOMBRE CATEGORIES</div>
                        {{-- <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $categorie =\App\Models\Categorie::count() }}</div> --}}
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-list fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Citations Postées</div>
                        {{-- <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $admin =\App\Models\Citation::where('email_auteur',auth()->user()->email)->count() }}</div> --}}
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-comments fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Commentaires Postés</div>
                        {{-- <div class="h5 mb-0 font-weight-bold text-gray-800"> {{ $user =\App\Models\Comment::where('email',auth()->user()->email)->count() }} </div> --}}
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-comments fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
@elseif(auth()->user()->type_utilisateur === 'Client')
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">NOMBRE CATEGORIES</div>
                        {{-- <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $categorie =\App\Models\Categorie::count() }}</div> --}}
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-list fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Citations Postées</div>
                        {{-- <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $admin =\App\Models\Citation::where('email_auteur',auth()->user()->email)->count() }}</div> --}}
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-comments fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endif
 

@endsection
