<!-- Modal -->
<div class="modal fade" id="Connexion" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalCenterTitle">Connectez-vous</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form action="{{ route('action_login') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for=""> Nom d'utilisateur </label>
                    <input class="form-control" type="text" name="name" value="{{ old('name') }}" autocomplete="off" required>
                    @error('name')
                        <div style="color:red;"> {{ $message }} </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for=""> Mot de passe </label>
                    <input class="form-control" type="password" name="password" required>
                    @error('password')
                        <div style="color:red;"> {{ $message }} </div>
                    @enderror
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                    <button type="submit" class="btn btn-primary" > Se connecter </button>
                </div>
            </form>
        </div>
        </div>
    </div>
</div>
