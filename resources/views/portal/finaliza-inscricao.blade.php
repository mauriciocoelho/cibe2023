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
                        <h2 class="page-title mb-0">Seja bem-vindo CIBE2023</h2>
                        <p class="lead text-muted mb-4">Finalize sua inscrição</p>                        
                    </div>
                    
                    <div class="row justify-content-center">                        
                        <div class="form-row">
                            <div class="col-md-12">
                                <div class="card shadow mb-4">
                                    <div class="card-header">
                                        <strong class="card-title">31° Congresso CIBE - TOCANTINS</strong>
                                        <span class="float-right"><i class="fe fe-flag mr-2"></i><span class="badge badge-pill badge-success text-white"></span></span>
                                    </div>
                                    <div class="card-body">
                                        <dl class="row align-items-center mb-0">
                                            <dt class="col-sm-2 mb-2 text-muted">Valor da inscrição (unidade):</dt>
                                            <dd class="col-sm-2 mb-3">
                                                <strong>R$ 130,20</strong>
                                            </dd>
                                            <dt class="col-sm-2 mb-2 text-muted">N° Inscrição:</dt>
                                            <dd class="col-sm-2 mb-3">
                                                <strong>{{$inscricao->id}}</strong>
                                            </dd>
                                            <dt class="col-sm-2 mb-2 text-muted">Total á pagar:</dt>
                                            <dd class="col-sm-2 mb-2">
                                                <strong>R$ {{ number_format($inscricao->valor, 2, ',', '.')}}</strong>
                                            </dd>
                                        </dl>
                                        <hr><br>
                                        <dl class="row mb-0">
                                            <dd class="col-sm-12 text-center"><h4> APÓS REALIZAR O PAGAMENTO ENVIAR, NÚMERO DE INSCRICAO E O COMPROVANTE PELO WHATSAPP. </h4></dd>                                                            
                                        </dl>
                                    </div> <!-- .card-body -->
                                    <hr>
                                    <div class="card-body">
                                        <center>    
                                            <h3 class="h5 mb-1">Pagamento via PIX</h3>
                                            <a href=""><img class="brand-logo" src="{{asset('assets-admin/assets/images/qrcode-pix.png')}}" width="30%" height="30%" style="display: block;"></a>
                                            <a href="https://api.whatsapp.com/send?phone=5563984838849&text=segue%20o%20comprovante%20de%20pagamento" target="_blank" class="btn btn-pink" id="finalizar-pagamento">FINALIZAR PAGAMENTO VIA PIX</a><br><br>
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
        document.getElementById("finalizar-pagamento").addEventListener("click", function() {
            localStorage.removeItem("dados_insc");
            localStorage.removeItem("total");

            window.location.href = "/inscricao";
        });

    </script>
    
@endsection