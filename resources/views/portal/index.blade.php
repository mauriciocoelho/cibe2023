@extends('portal.layouts.app')

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
                        <center><a href=""><img class="brand-logo" src="{{asset('assets-admin/images/images/afya-logo-description-pink.svg')}}" width="393px" height="60px" style="display: block;"></a></center>
                        <br>
                        <h2 class="page-title mb-0">Seja bem-vindo CIBE2023</h2>
                        <p class="lead text-muted mb-4">Para fazer a inscrição digite as informações</p>                        
                    </div>

                    <div style="width: 200px; margin: 0 auto; text-align: center;">
                        <div style="display: inline-flex; gap: 10px;">
                            <button id="minusBtn" type="button" class="btn btn-primary btn-sm"><i class="fe fe-minus"></i></button>
                            <input id="qntdeInput" type="number" class="form-control" name="qntde" value="1" min="1">
                            <button id="plusBtn" type="button" class="btn btn-primary btn-sm"><i class="fe fe-plus"></i></button>
                        </div>
                    </div>
                    <br>
                    <div style="text-align: center;">
                        <h3 id="total">Total: R$ 132.00</h3>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card shadow mb-4">
                                <div class="card-body">
                                <form>
                                    <div id="formContainer">
                                        <div class="form-row">
                                            <div class="form-group col-md-2">
                                                <label>CPF</label>
                                                <input type="email" class="form-control" name="email">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Nome Completo</label>
                                                <input type="text" class="form-control" name="nome">
                                            </div>
                                            <div class="form-group col-md-2">
                                                <label>Sexo</label>
                                                <select id="sexo" class="form-control" name="sexo">
                                                    <option>Feminino</option>
                                                    <option>Masculino</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-2">
                                                <label>Data de Nascimento</label>
                                                <input type="text" class="form-control" name="dt_nascimento">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-2">
                                                <label>Telefone</label>
                                                <input type="email" class="form-control" name="fone">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Cidade</label>
                                                <input type="text" class="form-control" name="cidade">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label>Campo</label>
                                                <select id="campo" class="form-control" name="campo">                                                    
                                                    <option value="">Selecionar...</option>                                                    
                                                    <option value="8">ALMAS</option>
                                                    <option value="1">ALVORADA</option>
                                                    <option value="38">ANANÁS</option>
                                                    <option value="20">APARECIDA DO RIO NEGRO</option>
                                                    <option value="28">ARAGUACEMA</option>
                                                    <option value="2">ARAGUAÇÚ</option>
                                                    <option value="39">ARAGUAÍNA</option>
                                                    <option value="40">ARAGUANÃ</option>
                                                    <option value="46">ARAGUATINS</option>
                                                    <option value="29">ARAPOEMA</option>
                                                    <option value="47">AUGUSTINÓPOLIS</option>
                                                    <option value="48">AXIXÁ DO TOCANTINS</option>
                                                    <option value="41">BABAÇULÂNDIA</option>
                                                    <option value="21">BREJINHO DE NAZARÉ</option>
                                                    <option value="49">BURITI DO TOCANTINS</option>
                                                    <option value="30">COLINAS</option>
                                                    <option value="31">COLMÉIA</option>
                                                    <option value="9">COMBINADO</option>
                                                    <option value="10">CONCEIÇÃO DO TOCANTINS</option>
                                                    <option value="11">DIANÓPOLIS</option>
                                                    <option value="81">DIVINÓPOLIS DO TOCANTINS</option>
                                                    <option value="50">ESPERANTINA</option>
                                                    <option value="3">FATIMA</option>
                                                    <option value="42">FILADÉLFIA</option>
                                                    <option value="4">FORMOSO DO ARAGUAIA</option>
                                                    <option value="32">GOIATINS</option>
                                                    <option value="33">GUARAÍ</option>
                                                    <option value="5">GURUPI</option>
                                                    <option value="34">ITACAJÁ</option>
                                                    <option value="51">ITAGUATINS</option>
                                                    <option value="6">LAGOA DA CONFUSÃO</option>
                                                    <option value="12">LUÍS EDUARDO MAGALHÃES</option>
                                                    <option value="52">LUZINÓPOLIS</option>
                                                    <option value="22">MIRACEMA DO TOCANTINS</option>
                                                    <option value="23">MIRANORTE</option>
                                                    <option value="13">NATIVIDADE</option>
                                                    <option value="24">PALMAS ARSE 61</option>
                                                    <option value="25">PALMAS ARSE 81</option>
                                                    <option value="14">PALMEIRÓPOLIS</option>
                                                    <option value="26">PARAÍSO DO TOCANTINS</option>
                                                    <option value="15">PARANÃ</option>
                                                    <option value="35">PEDRO AFONSO</option>
                                                    <option value="16">PEIXE</option>
                                                    <option value="17">PINDORAMA DO TOCANTINS</option>
                                                    <option value="18">PONTE ALTA DO TOCANTINS</option>
                                                    <option value="27">PORTO NACIONAL</option>
                                                    <option value="36">RECURSOLÂNDIA</option>
                                                    <option value="37">RIO SONO</option>
                                                    <option value="7">SANDOLÂNDIA</option>
                                                    <option value="43">SANTA FÉ DO ARAGUAIA</option>
                                                    <option value="53">SÃO MIGUEL DO TOCANTINS</option>
                                                    <option value="19">TAGUATINGA</option>
                                                    <option value="54">TOCANTINÓPOLIS</option>
                                                    <option value="44">WANDERLÂNDIA</option>
                                                    <option value="45">XAMBIOÁ</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div style="text-align: center;">
                                        <button type="submit" class="btn btn-primary">CONTINUAR</button>
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
    <!-- adicionar e remover numero na input -->
    <script>
        let valorUnitario = 132;
        let quantidade = 1;

        function atualizarTotal() {
            let total = valorUnitario * quantidade;
            document.getElementById("total").textContent = "Total: R$ " + total.toFixed(2);
        }

        function adicionarCampos() {
            const formContainer = document.getElementById("formContainer");
            const div = document.createElement("div");
            div.classList.add("form-row");
            div.innerHTML = `
            <div class="form-group col-md-2">
                <label>CPF</label>
                <input type="email" class="form-control" name="email">
            </div>
            <div class="form-group col-md-6">
                <label>Nome Completo</label>
                <input type="text" class="form-control" name="nome">
            </div>
            <div class="form-group col-md-2">
                <label>Sexo</label>
                <select id="sexo" class="form-control" name="sexo">
                <option>Feminino</option>
                <option>Masculino</option>
                </select>
            </div>
            <div class="form-group col-md-2">
                <label>Data de Nascimento</label>
                <input type="text" class="form-control" name="dt_nascimento">
            </div>
            <div class="form-group col-md-2">
                <label>Telefone</label>
                <input type="email" class="form-control" name="fone">
            </div>
            <div class="form-group col-md-6">
                <label>Cidade</label>
                <input type="text" class="form-control" name="cidade">
            </div>
            <div class="form-group col-md-4">
                <label>Campo</label>
                <select id="campo" class="form-control" name="campo">                                                    
                    <option value="">Selecionar...</option>                                                    
                    <option value="8">ALMAS</option>
                    <option value="1">ALVORADA</option>
                    <option value="38">ANANÁS</option>
                    <option value="20">APARECIDA DO RIO NEGRO</option>
                    <option value="28">ARAGUACEMA</option>
                    <option value="2">ARAGUAÇÚ</option>
                    <option value="39">ARAGUAÍNA</option>
                    <option value="40">ARAGUANÃ</option>
                    <option value="46">ARAGUATINS</option>
                    <option value="29">ARAPOEMA</option>
                    <option value="47">AUGUSTINÓPOLIS</option>
                    <option value="48">AXIXÁ DO TOCANTINS</option>
                    <option value="41">BABAÇULÂNDIA</option>
                    <option value="21">BREJINHO DE NAZARÉ</option>
                    <option value="49">BURITI DO TOCANTINS</option>
                    <option value="30">COLINAS</option>
                    <option value="31">COLMÉIA</option>
                    <option value="9">COMBINADO</option>
                    <option value="10">CONCEIÇÃO DO TOCANTINS</option>
                    <option value="11">DIANÓPOLIS</option>
                    <option value="81">DIVINÓPOLIS DO TOCANTINS</option>
                    <option value="50">ESPERANTINA</option>
                    <option value="3">FATIMA</option>
                    <option value="42">FILADÉLFIA</option>
                    <option value="4">FORMOSO DO ARAGUAIA</option>
                    <option value="32">GOIATINS</option>
                    <option value="33">GUARAÍ</option>
                    <option value="5">GURUPI</option>
                    <option value="34">ITACAJÁ</option>
                    <option value="51">ITAGUATINS</option>
                    <option value="6">LAGOA DA CONFUSÃO</option>
                    <option value="12">LUÍS EDUARDO MAGALHÃES</option>
                    <option value="52">LUZINÓPOLIS</option>
                    <option value="22">MIRACEMA DO TOCANTINS</option>
                    <option value="23">MIRANORTE</option>
                    <option value="13">NATIVIDADE</option>
                    <option value="24">PALMAS ARSE 61</option>
                    <option value="25">PALMAS ARSE 81</option>
                    <option value="14">PALMEIRÓPOLIS</option>
                    <option value="26">PARAÍSO DO TOCANTINS</option>
                    <option value="15">PARANÃ</option>
                    <option value="35">PEDRO AFONSO</option>
                    <option value="16">PEIXE</option>
                    <option value="17">PINDORAMA DO TOCANTINS</option>
                    <option value="18">PONTE ALTA DO TOCANTINS</option>
                    <option value="27">PORTO NACIONAL</option>
                    <option value="36">RECURSOLÂNDIA</option>
                    <option value="37">RIO SONO</option>
                    <option value="7">SANDOLÂNDIA</option>
                    <option value="43">SANTA FÉ DO ARAGUAIA</option>
                    <option value="53">SÃO MIGUEL DO TOCANTINS</option>
                    <option value="19">TAGUATINGA</option>
                    <option value="54">TOCANTINÓPOLIS</option>
                    <option value="44">WANDERLÂNDIA</option>
                    <option value="45">XAMBIOÁ</option>
                </select>
            </div>
            `;
            formContainer.appendChild(div);
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
            adicionarCampos();
        });

        qntdeInput.addEventListener("input", function () {
            quantidade = qntdeInput.value;
            atualizarTotal();
        });
    });
</script>
  
@endsection