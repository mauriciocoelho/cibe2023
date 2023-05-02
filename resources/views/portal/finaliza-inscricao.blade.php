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
                        <center>
                            <a href="">
                                <br>
                                <img class="brand-logo" src="{{asset('assets-admin/assets/images/31_CIBE-TO_2023_page-0001.png')}}" width="100px" height="100px" style="display: block;">
                            </a>
                        </center>                        
                        <h2 class="page-title mb-0">{{ config('app.name') }}</h2>
                        <p class="lead text-muted mb-4">Finalize sua inscrição</p>                        
                    </div>
                    
                    @if(session()->get('success'))
                        <div class="row justify-content-center">  
                            <div class="col-md-10">
                                <div class="alert alert-success">
                                    {{ session()->get('success') }}  
                                </div><br />
                            </div>
                        </div>
                    @endif

                    @if(session()->get('error'))
                        <div class="row justify-content-center">  
                            <div class="col-md-10">
                                <div class="alert alert-danger">
                                    {{ session()->get('error') }}  
                                </div><br />
                            </div>
                        </div>
                    @endif
                    
                    <div class="row justify-content-center">                        
                        <div class="form-row">
                            <div class="col-md-12">
                                <div class="card shadow mb-4">
                                    <div class="card-header">
                                        <strong class="card-title" style="font-size: 18px;">31° Congresso CIBE - TOCANTINS</strong>
                                        <span class="float-right"><i class="fe fe-flag mr-2"></i><span class="badge badge-pill badge-success text-white"></span></span>
                                    </div>
                                    <div class="card-body">
                                        <dl class="row align-items-center mb-0">
                                            <dt class="col-sm-3 mb-2 text-muted" style="font-size: 18px;">Valor da inscrição (unidade):</dt>
                                            <dd class="col-sm-2 mb-3">
                                                <strong style="font-size: 18px;">R$ 132,00</strong>
                                            </dd>
                                            <dt class="col-sm-2 mb-2 text-muted" style="font-size: 18px;">N° Inscrição:</dt>
                                            <dd class="col-sm-1 mb-2">
                                                <strong style="font-size: 18px;" id="id"> </strong>
                                            </dd>
                                            <dt class="col-sm-2 mb-2 text-muted" style="font-size: 18px;">Total á pagar:</dt>
                                            <dd class="col-sm-2 mb-2">
                                                <strong style="font-size: 18px;" id="valor"> </strong>
                                            </dd>
                                        </dl>
                                        <hr><br>
                                        <dl class="row mb-0">
                                            <dd class="col-sm-12 text-center">
                                                <h5> APÓS REALIZAR O PAGAMENTO ENVIAR, NÚMERO DE INSCRICAO E O COMPROVANTE PELO WHATSAPP. </h5>
                                                <h4>
                                                    <a href="https://api.whatsapp.com/send?phone=5563984838849&text=segue%20o%20comprovante%20de%20pagamento" target="_blank" style="display: inline-block;">
                                                        (63) 98483-8849
                                                        <img class="brand-logo" src="{{asset('assets-admin/assets/images/whatsapp.png')}}" width="5%" height="5%" style="vertical-align: middle;">
                                                    </a>
                                                </h4>


                                                <h4 id="id_aviso"> </h4>
                                            </dd>                                                            
                                        </dl>
                                    </div> <!-- .card-body -->
                                    <hr>
                                    <div class="card-body">
                                        <center>    
                                            <h3 class="h5 mb-1">Pagamento via PIX</h3>
                                            <a href=""><img class="brand-logo" src="{{asset('assets-admin/assets/images/qrcode-pix.png')}}" width="30%" height="30%" style="display: block;"></a>
                                            <a href="" target="_blank" class="btn btn-pink" id="finalizar-pagamento">FINALIZAR PAGAMENTO VIA PIX</a><br><br>
                                        </center>
                                    </div>
                                </div> <!-- .card -->
                            </div> <!-- .col-md -->                            
                        </div>                   
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
    <script>
        function carregarDoLocalStorage() {
            var dados_insc = JSON.parse(localStorage.getItem("dados_insc"));
            if (dados_insc) {
                document.querySelector("#id").textContent = dados_insc.id;
                document.querySelector("#id_aviso").textContent = "Seu N° de Inscrição: " + dados_insc.id;
                let formattedTotal = new Intl.NumberFormat('pt-BR', {
                    style: 'currency',
                    currency: 'BRL',
                    minimumFractionDigits: 2,
                    maximumFractionDigits: 2,
                }).format(dados_insc.valor);
                document.querySelector("#valor").textContent = formattedTotal;
            }           
        }

        carregarDoLocalStorage();

    </script>
    <script>
        document.getElementById("finalizar-pagamento").addEventListener("click", function() {
            localStorage.removeItem("dados_insc");
            localStorage.removeItem("total");

            window.location.href = "/inscricao";
        });

    </script>
    
@endsection