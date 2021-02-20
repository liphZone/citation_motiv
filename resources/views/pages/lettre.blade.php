@extends('layout.quote.index')
@section('title','Lettre')
@section('content')

  <h4> Liste des  auteurs commençant par la lettre : {{ $request->id }} </h4> <br>

  @foreach ($citation as $citations)
    @if (strtolower(Str::of($citations->auteur)->substr(0,1)) === strtolower($request->id))
      <a href="{{ route('single_author',$citations->auteur) }}" class="text-decoration-none"> &rtrif; {{ $citations->auteur }}</a>   
      <br>
    @endif
  @endforeach

@endsection