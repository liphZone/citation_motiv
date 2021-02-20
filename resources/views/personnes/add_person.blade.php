@extends('layout.utilisateur.index')
@section('title','Ajout Administrateur')
@section('content')
<div class="col-md-12">
    <form action="{{ route('personnes.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for=""> Nom </label>
            <input class="form-control" type="text" name="nom" value="{{ old('nom') }}" autocomplete="off" required>
            @error('nom')
                <div style="color:red;"> {{ $message }} </div>
            @enderror
        </div>

        <div class="form-group">
            <label for=""> Prénom(s) </label>
            <input class="form-control" type="text" name="prenom" value="{{ old('prenom') }}" autocomplete="off" required>
            @error('prenom')
                <div style="color:red;"> {{ $message }} </div>
            @enderror
        </div>

        <div class="form-group">
            <label for=""> Sexe </label>
            <select class="form-control" name="sexe" required>
                <option value=""> Choisir votre sexe</option>
                <option value="M"> M </option>
                <option value="F"> F </option>
            </select>
            @error('sexe')
                <div style="color:red;"> {{ $message }} </div>
            @enderror
        </div>

        <div class="form-group">
            <label for=""> Contact </label>
            <input class="form-control" type="text" name="contact" value="{{ old('contact') }}" autocomplete="off" required>
            @error('contact')
                <div style="color:red;"> {{ $message }} </div>
            @enderror
        </div>

        <div class="form-group">
            <label for=""> Email </label>
            <input class="form-control" type="email" name="email" value="{{ old('email') }}" autocomplete="off" required>
            @error('email')
                <div style="color:red;"> {{ $message }} </div>
            @enderror
        </div>

        <div class="form-group">
            <label for=""> Adresse </label>
            <input class="form-control" type="text" name="adresse" value="{{ old('adresse') }}" autocomplete="off" required>
            @error('adresse')
                <div style="color:red;"> {{ $message }} </div>
            @enderror
        </div>

        <div class="form-group">
            <label for=""> Nom d'utilisateur </label>
            <input class="form-control" type="text" name="name" value="{{ old('name') }}" autocomplete="off" required>
            @error('name')
                <div style="color:red;"> {{ $message }} </div>
            @enderror
        </div>

        <div class="form-group">
            <label for=""> Mot de passe </label>
            <input class="form-control" type="password" name="password" required>
            @error('password')
                <div style="color:red;"> {{ $message }} </div>
            @enderror
        </div>

        <div class="form-group">
            <label for=""> Confirmation du mot de passe </label>
            <input class="form-control" type="password" name="password_confirmation" required>
            @error('password_confirmation')
                <div style="color:red;"> {{ $message }} </div>
            @enderror
        </div>
        <input type="submit" class="btn btn-primary btn-block" value="Enregistrer">
    </form>
</div>
@endsection