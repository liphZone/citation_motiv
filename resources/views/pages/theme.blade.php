@extends('layout.quote.index')
@section('title','Thème')
@section('content') 

<h4> Liste des thèmes </h4>
@foreach ($theme as $themes)
    @php
        $count = \App\Models\Citation::where('categorie',$themes->libelle_categorie)->where('etat',0)->count();
    @endphp
    <a href="{{ route('single_subject',$themes->libelle_categorie) }}" class="text-decoration-none"> &mumap; {{ $themes->libelle_categorie }}</a> 
    <span class="text-muted"> - {{ $count }} citations </span>
@endforeach

@endsection