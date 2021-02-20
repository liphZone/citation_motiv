use App\Models\Like;
@extends('layout.quote.index')
@section('title','Thème')
@section('content') 

<h4> <span class="text-muted"> Thème : </span> {{ $theme->libelle_categorie}} </h4>

@foreach ($citation as $citations)  
<div class=" mb-5 card">
    <div class="card-body">
        {{-- <h5 class="card-title">Card title</h5> --}}
        <p class="card-text text-center"> 
            <a href="{{ route('single_citation',$citations->id) }}" style="text-decoration:none;color:black;"> {{ $citations->citation }} </a> 
        </p>
        <p class="text-center"> 
            <img src="/Zone/{{ $citations->profil }}" alt="" style="border-radius: 60px;" height="120px;" width="120px;">
        </p>
        
        <p class="text-center" > 
            - <a href="" class="text-decoration-none text-dark"> {{ $citations->auteur }} </a>
            <img src="$creation" alt="">
        </p>
    @php
        $like = \App\Models\Like::where('citation_id',$citations->id)->count();
    @endphp
    </div>
    <div class="card-footer">
        <small class="text-muted"> 
            <i class="fa fa-heart" aria-hidden="true"></i>  {{ $like }}
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
                <button class="btn btn-primary" onclick="action()" id="like_button"> <i class="fa fa-heart" aria-hidden="true"></i> </button>
            @endguest
           
        </div>
    </div>
</div>
@endforeach

<script>
    function action(){
        alert('Veuillez-vous connecter  !');
    }
</script>

@endsection