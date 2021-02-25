@extends('layout.utilisateur.index')
@section('title','Modifier Administrateur')
@section('content')
<div class="col-md-12">
    <h3 class="text-center"> MODIFIER ADMINISTRATEUR </h3>
    <form action="{{ route('personnes.update',$personne->id) }}" method="post">
        @csrf
        @method('put')
        <div class="form-group">
            <label for=""> Nom </label>
            <input class="form-control" type="text" name="nom" value="{{ $personne->nom }}" autocomplete="off" required>
            @error('nom')
                <div style="color:red;"> {{ $message }} </div>
            @enderror
        </div>

        <div class="form-group">
            <label for=""> Prénom(s) </label>
            <input class="form-control" type="text" name="prenom" value="{{  $personne->prenom }}" autocomplete="off" required>
            @error('prenom')
                <div style="color:red;"> {{ $message }} </div>
            @enderror
        </div>

        <div class="form-group">
            <label for=""> Contact </label>
            <input class="form-control" type="text" name="contact" value="{{  $personne->contact }}" autocomplete="off" required>
            @error('contact')
                <div style="color:red;"> {{ $message }} </div>
            @enderror
        </div>

        <div class="form-group">
            <label for=""> Email </label>
            <input class="form-control" type="email" name="email" value="{{  $personne->email }}" autocomplete="off" required>
            @error('email')
                <div style="color:red;"> {{ $message }} </div>
            @enderror
        </div>

        <div class="form-group">
            <label for=""> Adresse </label>
            <input class="form-control" type="text" name="adresse" value="{{  $personne->adresse }}" autocomplete="off" required>
            @error('adresse')
                <div style="color:red;"> {{ $message }} </div>
            @enderror
        </div>

      
        <input type="submit" class="btn btn-primary btn-block" value="Modifier">
    </form>
</div>
@endsection