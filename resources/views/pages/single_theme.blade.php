@extends('layout.quote.index')
@section('title','Thème')
@section('content') 

<h4> <span class="text-muted"> Thème : </span> {{ $theme->libelle_categorie}} </h4>



<div class="card-deck mb-3">
    @foreach ($citation as $citations) 
    @php
        $like = \App\Models\Like::where('citation_id',$citations->id)->count();
    @endphp

    <div class="card">
      <div class="card-body">
        <h5 class="card-title text-center"> 
            <a href="{{ route('single_citation',$citations->id) }}" style="text-decoration:none;color:black;"> &#96;&#96;{{ $citations->citation }}&#180;&#180; </a> 
        </h5>
        <p class="card-text text-center">
            <img src="/Zone/{{ $citations->profil }}" alt="" style="border-radius: 60px;" height="120px;" width="120px;">
        </p>
        <p class="text-center" > 
            <a href="#" class="text-decoration-none text-primary"> - {{ $citations->auteur }} </a>
        </p>
      </div>
        
      <div class="card-footer">
        <small class="text-muted">
            <i class="fa fa-heart" aria-hidden="true"> </i>  {{ $like }}
        </small>
        <div style="float: right;">
            @auth
                <form action="{{ route('likes.store') }}" method="post">
                    @csrf
                    <div hidden class="form-group">
                        <input class="form-control" type="text" value="{{ auth()->user()->id }}" name="utilisateur" readonly>
                        <input class="form-control" type="text" value="{{ $citations->id }}" name="post" readonly>
                    </div>
                    <button class="btn btn-light" type="submit"> <i class="fa fa-heart" aria-hidden="true"></i> </button>
                </form>
            @endauth
            @guest
                <button class="btn btn-primary" onclick="return action()" id="like_button"> <i class="fa fa-heart" aria-hidden="true"></i> </button>
            @endguest
           
        </div>
      </div>
    </div>
    @endforeach
</div>

<script>
    function action()
    {
        alert('Veuillez-vous connecter !');
    }
</script>

@endsection