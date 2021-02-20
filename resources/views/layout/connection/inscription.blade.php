@extends('layout.connection.index')
@section('title','Inscription')
@section('content')
    <form action="{{ route('action_register') }}" method="POST" class="login100-form validate-form flex-sb flex-w">
        @csrf
        <span class="login100-form-title p-b-32">
            Inscription
        </span>
        <div class="row">
            <div class="col-6">
                <span class="txt1 p-b-11">
                    Nom
                </span>
                <div class="wrap-input100 validate-input m-b-12" data-validate = "Le nom est requis">
                    <input class="input100" type="text" name="nom" >
                    <span class="focus-input100"></span>
                    @error('nom')
                        <div class="text-danger"> {{ $message }} </div>
                    @enderror
                </div>
            </div>
            <div class="col-6">
                <span class="txt1 p-b-11">
                    Prénom(s)
                </span>
                <div class="wrap-input100 validate-input m-b-12" data-validate = "Le prénom est requis">
                    <input class="input100" type="text" name="prenom" >
                    <span class="focus-input100"></span>
                    @error('prenom')
                        <div class="text-danger"> {{ $message }} </div>
                    @enderror
                </div>
            </div>
        </div>
          
        <span class="txt1 p-b-11">
            Sexe
        </span>
        <div class="wrap-input100 validate-input m-b-12" data-validate = "Le sexe est requis">
            <select class="input100" name="sexe" id="">
                <option value="M"> M </option>
                <option value="F"> F </option>
            </select>
            <span class="focus-input100"></span>
            @error('sexe')
                <div class="text-danger"> {{ $message }} </div>
            @enderror
        </div>

        <span class="txt1 p-b-11">
            Email
        </span>
        <div class="wrap-input100 validate-input m-b-12" data-validate = "L'email est requis">
            <input class="input100" type="email" name="email" >
            <span class="focus-input100"></span>
            @error('email')
                <div class="text-danger"> {{ $message }} </div>
            @enderror
        </div>

        <div class="row">
            <div class="col-6">
                <span class="txt1 p-b-11">
                    Adresse
                </span>
                <div class="wrap-input100 validate-input m-b-12" data-validate = "L'adresse est requise">
                    <input class="input100" type="text" name="adresse" >
                    <span class="focus-input100"></span>
                    @error('adresse')
                        <div class="text-danger"> {{ $message }} </div>
                    @enderror
                </div>
            </div>
            <div class="col-6">
                <span class="txt1 p-b-11">
                    Contact
                </span>
                <div class="wrap-input100 validate-input m-b-12" data-validate = "Le contact est requis">
                    <input class="input100" type="text" name="contact" >
                    <span class="focus-input100"></span>
                    @error('contact')
                        <div class="text-danger"> {{ $message }} </div>
                    @enderror
                </div>
            </div>
        </div>

        <span class="txt1 p-b-11">
            Nom d'utilisateur
        </span>
        <div class="wrap-input100 validate-input m-b-36" data-validate = "Le nom d'utilisateur est requis">
            <input class="input100" type="text" name="name" >
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
            <input class="input100" type="password" name="password">
            <span class="focus-input100"></span>
            @error('password')
                <div class="text-danger"> {{ $message }} </div>
            @enderror
        </div>

        <span class="txt1 p-b-11">
           Confirmation du  Mot de passe
        </span>
        <div class="wrap-input100 validate-input m-b-12" data-validate = "La confirmation est requise">
            <span class="btn-show-pass">
                <i class="fa fa-eye"></i>
            </span>
            <input class="input100" type="password" name="password_confirmation">
            <span class="focus-input100"></span>
            @error('password_confirmation')
                <div class="text-danger"> {{ $message }} </div>
            @enderror
        </div>
        
        <div class="flex-sb-m w-full p-b-48">
            <div>
                <a href="{{ route('form_login') }}" class="txt3">
                    Vous avez déjà un compte?
                </a>
            </div>
        </div>

        <div class="container-login100-form-btn">
            <button class="login100-form-btn">
                Je m'inscris
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