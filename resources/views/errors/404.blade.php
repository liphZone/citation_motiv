@extends('errors::layout')

@section('title','Erreur')
    
@section('message')
    <p> Page introuvable !  </p>
    <p> <a class="btn btn-info" href="{{ route('accueil') }}"> Page Accueil</a> </p>
@endsection