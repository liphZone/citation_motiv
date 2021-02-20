@extends('layout.quote.index')
@section('title','Accueil')
@section('content')

<div class="mt-5">
  @foreach ($categorie as $categories)
    <div class="shadow p-3 mb-5 bg-white rounded card text-center">
      <div class="card-body">
        <p class="card-text"> {{ $categories->description_categorie }} </p>
        <p class="card-text">
          <h6> 
            <a href="{{ route('single_subject',$categories->libelle_categorie) }}" class="text-decoration-none"> #{{ $categories->libelle_categorie }} </a> 
          </h6>
        </p>
      </div>
    </div>
  @endforeach
</div>

  {{-- <div class="card mt-4">
  
  </div>  --}}
  <!-- /.card -->

 
@endsection