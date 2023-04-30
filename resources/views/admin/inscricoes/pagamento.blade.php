<form action="{{ route('inscricoes.pagamento', $inscricao->id) }}" method="post" enctype="multipart/form-data">
    {{method_field('patch')}}
    {{csrf_field()}}
    <div class="modal fade" id="ModalPagamento{{$inscricao->id}}" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">{{ __('Baixar na Inscrição') }}</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>   
                <div class="modal-body">Você tem certeza que <b>{{$inscricao->nome}}</b> fez o pagamento da inscrição?</div>
                <div class="modal-footer">
                    <button type="button" class="btn gray btn-outline-secondary" data-dismiss="modal">{{ __('Cancel') }}</button>
                    <button type="submit" class="btn btn-outline-success">{{ __('dar baixa') }}</button>
                </div>
            </div>
        </div>
    </div>   
</form>