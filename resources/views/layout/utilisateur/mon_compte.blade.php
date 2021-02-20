@extends('layout.utilisateur.index')
@section('title','Mon Compte')
@section('content')
<div class="container">
    <ul>
        <li> 
            <p> 
                <h3> 
                    <span style="color:skyblue"> Username : </span> {{ auth()->user()->name }} 
                </h3> 
            </p>
        </li>
        <li>   
            <p> 
                <h3> 
                    <span style="color:skyblue"> Votre Email : </span> {{ auth()->user()->email }} 
                </h3>
             </p>
        </li>
    </ul>
    
    <form action="#" method="post">
        @csrf
        @method('DELETE')
        <button class="btn btn-light" type="submit" onclick="return Action()">
            <i style="font-size: 25px; float: right; color:red;" class="fas fa-power-off"> Supprimer mon compte( en cours de traitement..) </i>  
        </button>
    </form> 

    <div class="col-md-12">
        <h3 class="text-center"> MODIFIER MES INFORMATIONS </h3>
        <form action="{{ route('update_my_account') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for=""> NOM </label>
                <input type="text" class="form-control" name="nom" value="{{ $user->nom }}" required>
                @error('nom')
                    <div style="color:red;"> {{ $message }} </div>
                @enderror
            </div>

            <div class="form-group">
                <label for=""> PRENOM(S) </label>
                <input type="text" class="form-control" name="prenom" value="{{ $user->prenom }}" required>
                @error('prenom')
                    <div style="color:red;"> {{ $message }} </div>
                @enderror
            </div>

            <div class="form-group">
                <label for=""> CONTACT </label>
                <input type="text" class="form-control" name="contact" value="{{ $user->contact }}"  required>
                @error('contact')
                    <div style="color:red;"> {{ $message }} </div>
                @enderror
            </div>

            <div class="form-group">
                <label for=""> EMAIL </label>
                <input type="email" class="form-control" name="email" value="{{ $user->email }}"  required>
                @error('email')
                    <div style="color:red;"> {{ $message }} </div>
                @enderror
            </div>

            <div class="form-group">
                <label for=""> ADRESSE </label>
                <input type="tetx" class="form-control" name="adresse" value="{{ $user->adresse }}" required>
                @error('email')
                    <div style="color:red;"> {{ $message }} </div>
                @enderror
            </div>

            <input class="btn btn-primary btn-block" type="submit" value="Modifier">
      </form>
    </div>

        
<script>
    function Action() {
        var r = confirm("Votre compte 🙎‍♂️ ainsi que toutes vos citations seront également supprimées, voulez-vous continuer?");
        if (r == false) {
        return false;
        }

    }
</script>
    
</div>
@endsection