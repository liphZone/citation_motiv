@extends('layout.utilisateur.index')
@section('title','Ajout citation')
@section('content')
<div class="col-md-12">
    <h3 class="text-center"> AJOUTER UNE CITATION </h3>
    <form action="{{ route('citations.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for=""> Auteur </label>
            <input class="form-control" type="text" name="auteur" value="{{ old('auteur') }}" autocomplete="off" required>
            @error('auteur')
                <div style="color:red;"> {{ $message }} </div>
            @enderror
        </div>

        <div class="form-group">
            <label for=""> Catégorie </label>
            <select class="form-control" name="categorie" required>
                <option value=""> Choisir la catégorie </option>
                @foreach ($categorie as $categories)
                    <option> {{ $categories->libelle_categorie }} </option>
                @endforeach
            </select>
            @error('categorie')
                <div style="color:red;"> {{ $message }} </div>
            @enderror
        </div>

        <div class="form-group">
            <label for=""> Citation </label>
            <textarea name="citation" id="" class="control-label col-lg-12" cols="auto" rows="5"></textarea>
            @error('citation')
                <div style="color:red;"> {{ $message }} </div>
            @enderror
        </div>

        <div class="form-group">
            <label for=""> Profil </label>
            <input class="form-control" type="file" name="profil" autocomplete="off" required>
            @error('profil')
                <div style="color:red;"> {{ $message }} </div>
            @enderror
        </div>

        <input type="submit" class="btn btn-primary btn-block" value="Poster">
    </form>
</div>
@endsection