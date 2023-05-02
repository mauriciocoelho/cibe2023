@extends('layouts.portal')

@section('title', 'Inscrição')

@section('content')
    <style>
        #qntdeInput {
            text-align: center;
        }
    </style>
    <main role="main" class="main-content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="w-50 mx-auto text-center justify-content-center">
                        <br>
                        <center><a href=""><img class="brand-logo" src="{{asset('assets-admin/assets/images/31_CIBE-TO_2023_page-0001.png')}}" width="100px" height="100px" style="display: block;"></a></center>
                        
                        <h2 class="page-title mb-0">{{ config('app.name') }}</h2>
                        <p class="lead text-muted mb-4">Informações da Inscrição</p>                        
                    </div>
                    <br>
                    <div style="text-align: center;">
                        <h3 id="total">Total: </h3>
                    </div>
                    <br>
                    <div class="row justify-content-center">
                        <div class="col-10">
                            <div class="card shadow mb-4">
                                <div class="card-body">
                                    <form action="{{ route('finaliza-inscricao') }}" method="post">
                                        @csrf
                                        <div>
                                            <div class="form-row">
                                                <div class="form-group col-md-3">
                                                    <label>CPF</label>
                                                    <h5><b>{{ $cpf }}</b></h5>
                                                    <input type="hidden" name="cpf" id="cpf">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>Nome Completo</label>
                                                    <h5><b>{{ $nome }}</b></h5>
                                                    <input type="hidden" name="nome" id="nome">
                                                </div>
                                                <div class="form-group col-md-2">
                                                    <label>Telefone WhatsApp</label>
                                                    <h5><b>{{ $telefone }}</b></h5>
                                                    <input type="hidden" name="telefone" id="telefone">
                                                </div>
                                                <input type="hidden" name="cidade" id="cidade">
                                                <input type="hidden" name="campo" id="campo">
                                                <input type="hidden" name="qntde" id="qntde">
                                                <input type="hidden" name="valor" id="valorTotal">
                                            </div>
                                        </div>                                   
                                        <hr>
                                        <div style="text-align: center;">
                                            <a href="/inscricao" class="btn btn-warning">Voltar</a>    
                                            <button type="submit" class="btn btn-success">FINALIZAR INSCRIÇÃO</button>
                                        </div>                                    
                                    </form>
                                </div> <!-- /. card-body -->
                            </div> <!-- /. card --> 
                        </div>  <!-- /. col-10 --> 
                    </div>
                </div>                
            </div> <!-- .row -->
        </div> <!-- .container-fluid -->
        
    </main> <!-- main -->

@endsection
@section('scripts')
    <script src="{{asset('assets-admin/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets-admin/js/popper.min.js')}}"></script>
    <script src="{{asset('assets-admin/js/moment.min.js')}}"></script>
    <script src="{{asset('assets-admin/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets-admin/js/simplebar.min.js')}}"></script>
    <script src="{{asset('assets-admin/js/tinycolor-min.js')}}"></script>
    <script src="{{asset('assets-admin/js/config.js')}}"></script>
    <script src="{{asset('assets-admin/js/apps.js')}}"></script>
    <script src="{{asset('assets-admin/js/select2.min.js')}}"></script>
    <script>

        function carregarDoLocalStorage() {
            var dados_insc = JSON.parse(localStorage.getItem("dados_insc"));
            if (dados_insc) {
                document.getElementsByName("cpf")[0].value = dados_insc.cpf;
                document.getElementsByName("nome")[0].value = dados_insc.nome;
                document.getElementsByName("telefone")[0].value = dados_insc.telefone;
                document.getElementsByName("cidade")[0].value = dados_insc.cidade;
                document.getElementsByName("campo")[0].value = dados_insc.campo;
                document.getElementsByName("qntde")[0].value = dados_insc.qntde;
                document.getElementsByName("valor")[0].value = dados_insc.valorTotal;
            }           
        }

        carregarDoLocalStorage();
        
        document.addEventListener("DOMContentLoaded", function() {
            var total = localStorage.getItem("total");
            if(total != null) {
                let formattedTotal = new Intl.NumberFormat('pt-BR', {
                    style: 'currency',
                    currency: 'BRL',
                    minimumFractionDigits: 2,
                    maximumFractionDigits: 2,
                }).format(total);
                document.getElementById("total").textContent = "Total: " + formattedTotal;
            }
        });

        
    </script>
    
@endsection