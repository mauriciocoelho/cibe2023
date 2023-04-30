<form action="{{ route('inscricoes.destroy', $inscricao->id) }}" method="post" enctype="multipart/form-data">
    {{ method_field('delete') }}
    {{ csrf_field() }}
    <div class="modal fade" id="ModalDelete{{$inscricao->id}}" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">{{ __('Deletar Inscrição') }}</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>   
                <div class="modal-body">Você tem certeza que deseja apagar a inscrição de <b>{{$inscricao->nome}}</b>?</div>
                <div class="modal-footer">
                    <button type="button" class="btn gray btn-outline-secondary" data-dismiss="modal">{{ __('Cancel') }}</button>
                    <button type="submit" class="btn btn-outline-danger">{{ __('Delete') }}</button>
                </div>
            </div>
        </div>
    </div>   
</form>