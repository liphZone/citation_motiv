@extends('layout.utilisateur.index')
@section('title','Ajout catégorie')
@section('content')
<div class="col-md-12">
    <form action="{{ route('categories.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for=""> CATEGORIE </label>
            <input type="text" class="form-control" name="libelle_categorie" placeholder="Saisir la categorie" required>
            @error('libelle_categorie')
                <div style="color:red;"> {{ $message }} </div>
            @enderror
        </div>

        <div class="form-group">
            <label for=""> DESCRIPTION </label>
            <textarea name="description_categorie" id="" class="control-label col-lg-12" cols="auto" rows="5"></textarea>
            @error('description_categorie')
                <div style="color:red;"> {{ $message }} </div>
            @enderror
        </div>

        <input class="btn btn-primary btn-block" type="submit" value="Enregistrer">
  </form>
</div>
@endsection