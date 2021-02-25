@extends('layout.utilisateur.index')
@section('title','Liste des administrateurs')
@section('content')
<div class="col-md-12">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary"> <a href="{{ route('add_person') }}" type="button" class="btn btn-success"> <i class="fa fa-plus"></i> Ajouter un administrateur </a> </h6>
        <h6 class="text-center">  LISTE DES UTILISATEURS </h6>
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
                            <div class="d-flex justify-content-start">
                                <a href="{{ route('edit_person',$personnes->id) }}" class="btn btn-success"> Modifier </a>
                                &nbsp;
                                <form action="{{ route('personnes.destroy',$personnes->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <input class="btn btn-danger" onclick="ActionDelete()" type="submit" value="Supprimer"> 
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
            </table>
        </div>
        </div>
    </div>
</div>

<script>  

    function ActionDelete() {
        var r = confirm("Voulez-vous definitivement supprimer cette citation ?");
        if (r == false) {
            return false;
        }
    }

</script>
@endsection