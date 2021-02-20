@extends('layout.utilisateur.index')
@section('title','Modifier catégorie')
@section('content')
<div class="col-md-12">
    <form action="{{ route('categories.update',$categorie->id) }}" method="post">
        @csrf
        @method('put')
        <div class="form-group">
            <label for=""> CATEGORIE </label>
            <input type="text" class="form-control" name="libelle_categorie" placeholder="Saisir la categorie" value="{{ $categorie->libelle_categorie }}">
            @error('libelle_categorie')
                <div style="color:red;"> {{ $message }} </div>
            @enderror
        </div>

        <div class="form-group">
            <label for=""> DESCRIPTION </label>
            <textarea name="description_categorie" id="" class="control-label col-lg-12" cols="auto" rows="5">
                {{ $categorie->description_categorie }}
            </textarea>
            @error('description_categorie')
                <div style="color:red;"> {{ $message }} </div>
            @enderror
        </div>

        <input class="btn btn-primary btn-block" type="submit" value="Modifier">
  </form>
</div>
@endsection