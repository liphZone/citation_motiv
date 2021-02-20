@extends('layout.quote.index')
@section('title','Auteurs')
@section('content')

  <h4> Auteurs commençant par la lettre : </h4> <br>
  
  @foreach ($auteur as $auteurs)
    <a href="{{ route('letter',$auteurs) }}" style="text-decoration: none"> {{ $auteurs }}  </a> &nbsp;&nbsp;&nbsp;
  @endforeach

  <div class="row">
    <div class="col-md-4">
      <ul class="list-group">
        <li class="list-group-item disabled" aria-disabled="true">Citations des sages</li>
        <li class="list-group-item">Dapibus ac facilisis in</li>
        <li class="list-group-item">Morbi leo risus</li>
        <li class="list-group-item">Porta ac consectetur ac</li>
        <li class="list-group-item">Vestibulum at eros</li>
      </ul>
    </div>
    <div class="col-md-4">
      <ul class="list-group">
        <li class="list-group-item disabled" aria-disabled="true">Citations des grands philosophes</li>
        <li class="list-group-item">Dapibus ac facilisis in</li>
        <li class="list-group-item">Morbi leo risus</li>
        <li class="list-group-item">Porta ac consectetur ac</li>
        <li class="list-group-item">Vestibulum at eros</li>
      </ul>
    </div>
  </div>
        
@endsection



  