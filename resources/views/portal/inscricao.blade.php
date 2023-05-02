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
                        <p class="lead text-muted mb-4">Para fazer a inscrição digite as informações</p>                        
                    </div>

                    <div style="width: 200px; margin: 0 auto; text-align: center;">
                        <div style="display: inline-flex; gap: 10px;">
                            <button id="minusBtn" type="button" class="btn btn-pink btn-sm" style="font-size: 18px;"><i class="fe fe-minus"></i></button>
                            <input id="qntdeInput" type="number" class="form-control" name="qntde" value="1" min="1" style="font-size: 18px;">
                            <button id="plusBtn" type="button" class="btn btn-pink btn-sm" style="font-size: 18px;"><i class="fe fe-plus"></i></button>
                        </div>
                    </div>
                    <br>
                    <div style="text-align: center;">
                        <h3 id="total">Total: R$ 132,00</h3>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-10">
                            <div class="card shadow mb-4">
                                <div class="card-body">
                                <form action="{{ route('confirma-dados') }}" onsubmit="salvarNoLocalStorage()">
                                    <div id="formContainer">
                                        <div class="form-row">
                                            <div class="form-group col-md-3">
                                                <label style="font-size: 18px;">CPF</label>
                                                <input type="text" class="form-control" name="cpf" style="font-size: 18px;" required>
                                            </div>
                                            <div class="form-group col-md-8">
                                                <label style="font-size: 18px;">Nome Completo</label>
                                                <input type="text" class="form-control" name="nome" style="font-size: 18px; text-transform: uppercase;" required>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-2">
                                                <label style="font-size: 18px;">Telefone</label>
                                                <input type="text" class="form-control" name="telefone" style="font-size: 18px;" required>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label style="font-size: 18px;">Cidade</label>
                                                <input type="text" class="form-control" name="cidade" style="font-size: 18px; text-transform: uppercase;" required>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label style="font-size: 18px;">Campo</label>
                                                <select id="campo" class="form-control select2" name="campo" style="font-size: 18px;" required>                                                    
                                                    <option value="">Selecionar...</option>                                                    
                                                    <option value="Aparecida  do Rio Negro">Aparecida  do Rio Negro</option>
                                                    <option value="Brejinho de Nazaré">Brejinho de Nazaré</option>
                                                    <option value="Divinópolis">Divinópolis</option>
                                                    <option value="Miracema do Tocantins">Miracema do Tocantins</option>
                                                    <option value="Miranorte">Miranorte</option>                                                    
                                                    <option value="Palmas - Nação Madureira ARSE 61">Palmas - Nação Madureira ARSE 61</option>
                                                    <option value="Palmas - Shalom ARSE 81">Palmas - Shalom ARSE 81</option>
                                                    <option value="Paraíso do Tocantins">Paraíso do Tocantins</option>
                                                    <option value="Porto Nacional">Porto Nacional</option>                                                                                               
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div style="text-align: center;">
                                        <button type="submit" class="btn btn-pink">CONTINUAR</button>
                                    </div>                                    
                                </form>
                                </div> <!-- /. card-body -->
                            </div> <!-- /. card -->
                        </div> <!-- /. col -->
                    </div> <!-- /. end-section -->
                
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
    <!-- adicionar e remover numero na input -->
    <script>
        let valorUnitario = 132;
        let quantidade = 1;

        function atualizarTotal() {
            let total = valorUnitario * quantidade;
            let formattedTotal = total.toLocaleString('pt-BR', {minimumFractionDigits: 2, maximumFractionDigits: 2});
            document.getElementById("total").textContent = "Total: R$ " + formattedTotal;
        }
        
        document.addEventListener("DOMContentLoaded", function () {
            atualizarTotal();

            const minusBtn = document.getElementById("minusBtn");
            const plusBtn = document.getElementById("plusBtn");
            const qntdeInput = document.getElementById("qntdeInput");

            minusBtn.addEventListener("click", function () {
            if (qntdeInput.value > 1) {
                qntdeInput.value--;
                quantidade = qntdeInput.value;
                atualizarTotal();
            }
            });

            plusBtn.addEventListener("click", function () {
                qntdeInput.value++;
                quantidade = qntdeInput.value;
                atualizarTotal();
            });

            qntdeInput.addEventListener("input", function () {
                quantidade = qntdeInput.value;
                atualizarTotal();
            });
        });
    </script>
    <!-- mascaras das inputs -->    
    <head>
        <!-- adicione o jQuery -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

        <!-- adicione o jQuery Mask Plugin -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
        <script>
            $(document).ready(function(){
                $('input[name="cpf"]').mask('000.000.000-00');
            });
            $(document).ready(function(){
                $('input[name="telefone"]').mask('(00)00000-0000');
            });
        </script> 
    </head>
    <!-- salvar e carregar em cache -->
    <script>
        function salvarNoLocalStorage() {
            // obtém valor total
            const total = document.getElementById('total').textContent;
            const numericTotal = parseFloat(total.split('R$ ')[1].replace(/\./g, '').replace(',', '')) / 100;
            localStorage.setItem('total', numericTotal);

            // obtém os valores dos campos do formulário
            var cpf = document.getElementsByName("cpf")[0].value;
            var nome = document.getElementsByName("nome")[0].value;
            var telefone = document.getElementsByName("telefone")[0].value;
            var cidade = document.getElementsByName("cidade")[0].value;
            var campo = document.getElementsByName("campo")[0].value;
            var qntde = document.getElementsByName("qntde")[0].value;
            var valorTotal = numericTotal;

            // cria um objeto com os valores obtidos
            var dados_insc = {
                cpf: cpf,
                nome: nome,
                telefone: telefone,
                cidade: cidade,
                campo: campo,
                qntde: qntde,
                valorTotal: valorTotal
            };

            // armazena o objeto no localStorage
            localStorage.setItem("dados_insc", JSON.stringify(dados_insc));
        }

        function carregarDoLocalStorage() {
            var dados_insc = JSON.parse(localStorage.getItem("dados_insc"));
            if (dados_insc) {
                document.getElementsByName("cpf")[0].value = dados_insc.cpf;
                document.getElementsByName("nome")[0].value = dados_insc.nome;
                document.getElementsByName("telefone")[0].value = dados_insc.telefone;
                document.getElementsByName("cidade")[0].value = dados_insc.cidade;
                document.getElementsByName("campo")[0].value = dados_insc.campo;
                document.getElementsByName("qntde")[0].value = dados_insc.qntde;
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