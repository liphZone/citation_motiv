@extends('layout.utilisateur.index')
@section('title','Modifier citation')
@section('content')
<h3 class="text-center"> Modifier ma citation </h3>
<div class="col-md-12">
    <form action="{{ route('citations.update',$citation->id) }}" method="post">
        @csrf
        @method('put')
        <div class="form-group">
            <label for=""> Auteur </label>
            <input class="form-control" type="text" name="auteur" value="{{ $citation->auteur }}" autocomplete="off" required>
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
            <textarea name="citation" id="" class="control-label col-lg-12" cols="auto" rows="5">
                {{ $citation->citation }}
            </textarea>
            @error('citation')
                <div style="color:red;"> {{ $message }} </div>
            @enderror
        </div>

        <input type="submit" class="btn btn-primary btn-block" value="Modifier">
    </form>
</div>
@endsection