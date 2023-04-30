<form action="{{ route('logout') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="modal fade" id="ModalSair" tabindex="-1" role="dialog" aria-labelledby="defaultModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">{{ config('app.name') }} </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body"> <text-center>{{ __('Você tem certeza que deseja') }} <b>Sair?</b></text-center> </div>
            <div class="modal-footer">
                <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">{{ __('Cancelar') }}</button>
                <button type="submit" class="btn btn-outline-danger">Sair</button>
            </div>
            </div>
        </div>
    </div>
</form>