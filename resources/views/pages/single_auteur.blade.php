@extends('layout.quote.index')
@section('title','Auteurs')
@section('content') 

<h4> <span class="text-muted"> Toutes les citations de  </span> {{ $request->id}} </h4>
<h4> Les thèmes en rapport  :  <span style="color:red"> Afficher tous les themes de citation trait a l'auteur en question  </span> </h4>

<hr class="mt-5 mb-5">
@foreach ($citation as $citations)  
<div class="mb-2 card w-50">
    <div class="card-body">
        {{-- <h5 class="card-title">Card title</h5> --}}
        <p class="card-text text-center"> 
            <a href="{{ route('single_citation',$citations->id) }}" style="text-decoration:none;color:black;"> {{ $citations->citation }} </a> 
        </p>
        {{-- <p class="text-center"> 
            <img src="/Zone/{{ $citations->profil }}" alt="" style="border-radius: 60px;" height="120px;" width="120px;">
        </p> --}}
        <p class="text-center" > 
            - <span class="text-dark"> {{ $citations->auteur }} </span> 
            <img src="$creation" alt="">
        </p>

    </div>
    <div class="card-footer">
        <small class="text-muted"> 
            <i class="fa fa-heart" aria-hidden="true"></i>
        </small>
        <div style="float: right;">
            <i class="fa fa-heart" aria-hidden="true"></i>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <i class="fa fa-facebook" aria-hidden="true"></i> 
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <i class="fa fa-twitter" aria-hidden="true"></i>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <i class="fa fa-whatsapp" aria-hidden="true"></i>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <i class="fa fa-pinterest" aria-hidden="true"></i>
        </div>
    </div>
</div>
@endforeach

@endsection