@extends('layout.utilisateur.index')
@section('title','Liste des citations')
@section('content')

<div class="col-md-12">
    <div class="card mb-4">
        <div class="card-header">
            <h5 class="text-center"> 
                <a href="{{ route('add_citation') }}" style="float: left;" type="button" class="btn btn-success"> 
                    <i class="fa fa-plus"> </i> Poster une citation 
                </a> 
                VOS CITATIONS | Nom d'utilisateur : {{ auth()->user()->name }} 
            </h5>
        </div>
    </div>
</div>

@if (auth()->user()->type_utilisateur === 'Admin')
    @foreach ($citation as $citations)

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1"> Auteur : {{ $citations->auteur }}</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <img src="/Zone/{{ $citations->profil }}" alt="" style="border-radius: 40px;" height="60px;" width="60px;">
                                <h5> <b>Catégorie : {{ $citations->categorie }} </b> </h5> 
                            </div>
                            <div> <em> "{{ $citations->citation }}" </em> </div>
                        </div>
                        <div class="d-flex justify-content-start">
                            <a href="{{ route('edit_citation',$citations->id) }}" class="btn btn-success"> Modifier </a>
                            &nbsp;
                            <form action="{{ route('citations.destroy',$citations->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <input class="btn btn-danger" onclick="return ActionDelete()" type="submit" value="Supprimer"> 
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    @endforeach
    
    @foreach ($citation_fake_delete as $fake_quote)

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1"> Auteur : {{ $fake_quote->auteur }} | Etat : <span style="color: green;"> supprimé </span> </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <img src="/Zone/{{ $fake_quote->profil }}" alt="" style="border-radius: 40px;" height="60px;" width="60px;">
                                <h5> <b> Catégorie : {{ $fake_quote->categorie }} </b>  </h5> 
                            </div>
                            <div> <em> "{{ $fake_quote->citation }}" </em> </div>
                        </div>
                        <div class="col-auto">
                            <form action="{{ route('citations.destroy',$fake_quote->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <input class="btn btn-outline-danger" onclick="return ActionDelete()" type="submit" value="Suppression définitive"> 
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    @endforeach


@elseif(auth()->user()->type_utilisateur === 'Client')
    @if ($nombre_citation  === 0 )
       <div class="mx-5">
        <h3 class="text-center"> Vous n'avez plus aucune citations ! </h3>
        <i class='far fa-sad-tear' style='font-size:60ch;'></i>
       </div>
    @endif
    @foreach ($client as $clients)
        <div class="card-body">
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Auteur : {{ $clients->auteur }}</div>
                                <div> <img src="{{ $clients->profil }}" alt="" style="border-radius: 40px;" height="60px;" width="60px;">  <h5> <b>Catégorie : {{ $clients->categorie }} </b>  </h5></div>
                                <div>  <em> "{{ $clients->citation }} " </em> </div>
                            </div>
                            <div class="col-auto">
                                <a href="{{ route('edit_citation',$clients->id) }}" class="btn btn-success"> Modifier </a>
                                <a href="{{ route('fake_delete_citation',$clients->id) }}" onclick="return ActionFakeDelete()" type="button" class="btn btn-danger"> Supprimer </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endif

 <script>  

    function ActionDelete()
    {
        var r = confirm("Voulez-vous definitivement supprimer cette citation ?");
        if (r == false) {
            return false;
        }

    }

    function ActionFakeDelete()
    {
        var r = confirm("Voulez-vous definitivement supprimer cette citation ?");
        if (r == false) {
            return false;
        }

    }


</script>

@endsection