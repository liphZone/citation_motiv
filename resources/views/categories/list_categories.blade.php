@extends('layout.utilisateur.index')
@section('title','Liste des catégories')
@section('content')
<div class="col-md-12">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary"> LISTE DES CATEGORIES </h6>
        </div>
        <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                <th> REFERENCE </th>
                <th> LIBELLE </th>
                <th> ACTION </th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th> REFERENCE </th>
                    <th> LIBELLE </th>
                    <th> ACTION </th>
                </tr>
            </tfoot>
            <tbody>
                @foreach ($categorie as $categories)
                    <tr>
                        <td>{{ $categories->reference_categorie }} </td>
                        <td>{{ $categories->libelle_categorie }} </td>
                        <td> 
                            <div class="row">
                                <div class="col-md-4">
                                </div>
                                <div class="col-md-2">
                                    <a class="btn btn-success" href="{{route('edit_categorie',$categories->id)}}"> Modifier </a> 
                                </div>
                                <div class="col-md-2">
                                    <form action="{{ route('categories.destroy',$categories->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <input class="btn btn-danger" onclick="return Action()" type="submit" value="Supprimer"> 
                                    </form>
                                </div>
                                <div class="col-md-4">
                                </div>
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
 <!-- La fonction Action demande une confirmation lors de la suppression  -->
 <script>            
    function Action() {
        var r = confirm("Voulez-vous supprimer cette catégorie ?");
        if (r == false) {
        return false;
        }

    }
</script>

@endsection