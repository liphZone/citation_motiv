@extends('layout.utilisateur.index')
@section('title','Liste des administrateurs')
@section('content')
<div class="col-md-12">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary"> LISTE DES ADMINISTRATEURS </h6>
        </div>
        <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th> NOM & PRENOM(S) </th>
                    <th> SEXE </th>
                    <th> CONTACT </th>
                    <th> ADRESSE </th>
                    <th> EMAIL </th>
                    <th> STATUT </th>
                    <th> ACTION </th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th> NOM & PRENOM(S) </th>
                    <th> SEXE </th>
                    <th> CONTACT </th>
                    <th> ADRESSE </th>
                    <th> EMAIL </th>
                    <th> STATUT </th>
                    <th> ACTION </th>
                </tr>
            </tfoot>
            <tbody>
                @foreach ($personne as $personnes)
                    <tr>
                        <td> {{ "$personnes->nom $personnes->prenom" }} </td>
                        <td> {{ $personnes->sexe }} </td>
                        <td> {{ $personnes->contact }} </td>
                        <td> {{ $personnes->adresse }} </td>
                        <td> {{ $personnes->email }} </td>
                        <td> {{ $personnes->type_utilisateur }} </td>
                        <td>
                            <button class="btn btn-success">Modifier</button>
                            <button class="btn btn-danger">Supprimer</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
            </table>
        </div>
        </div>
    </div>
</div>
@endsection