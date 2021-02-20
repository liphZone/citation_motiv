@extends('layout.connection.index')
@section('title','Connexion')
@section('content')
    <form action="{{ route('action_login') }}" method="POST" class="login100-form validate-form flex-sb flex-w">
        @csrf
        <span class="login100-form-title p-b-32">
            Connexion
        </span>

        <span class="txt1 p-b-11">
            Nom d'utilisateur
        </span>
        <div class="wrap-input100 validate-input m-b-36" data-validate = "Nom d'utilisateur est requis">
            <input class="input100" type="text" name="name" autocomplete="off" value="{{ old('name') }}">
            <span class="focus-input100"></span>
            @error('name')
                <div class="text-danger"> {{ $message }} </div>
            @enderror
        </div>
        
        <span class="txt1 p-b-11">
            Mot de passe
        </span>
        <div class="wrap-input100 validate-input m-b-12" data-validate = "Le mot de passe est requis">
            <span class="btn-show-pass">
                <i class="fa fa-eye"></i>
            </span>
            <input class="input100" type="password" name="password" >
            <span class="focus-input100"></span>
            @error('password')
                <div class="text-danger"> {{ $message }} </div>
            @enderror
        </div>
        
        <div class="flex-sb-m w-full p-b-48">
            <div>
                <a href="#" class="txt3">
                    Mot de passe oublié?
                </a>
            </div>

            <div>
                <a href="{{ route('form_register') }}" class="txt3">
                    Pas de compte?
                </a>
            </div>
        </div>

        <div class="container-login100-form-btn">
            <button class="login100-form-btn">
                Connexion
            </button>

          
        </div>

        <div class="flex-sb-m w-full p-b-48">
            <div>
               
            </div>

            <div>
                <a href="{{ route('accueil') }}" class="txt3">
                   Page d'accueil
                </a>
            </div>
        </div>

    </form>
@endsection