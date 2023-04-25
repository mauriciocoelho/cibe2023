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

                        <center><a href=""><img class="brand-logo" src="{{asset('assets-admin/assets/images/31_CIBE-TO_2023_page-0001.png')}}" width="100px" height="100px" style="display: block;"></a></center>
                        
                        <h2 class="page-title mb-0">Seja bem-vindo CIBE2023</h2>
                        <p class="lead text-muted mb-4">Informações de Pagamento</p>                        
                    </div>
                    <br>
                    <div style="text-align: center;">
                        <h3 id="total">Total: R$ 132.00</h3>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card shadow mb-4">
                                <div class="card-body">
                                <form action="">
                                    <div>
                                        <div class="form-row">
                                            <div class="form-group col-md-1"></div>
                                            <div class="form-group col-md-3">
                                                <label>CPF</label>
                                                <h5><b>{{ $cpf }}</b></h5>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Nome Completo</label>
                                                <h5><b>{{ $nome }}</b></h5>
                                            </div>
                                            <div class="form-group col-md-2">
                                                <label>Telefone WhatsApp</label>
                                                <h5><b>{{ $fone }}</b></h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div style="text-align: center;">
                                        <a href="/" class="btn btn-warning">Voltar</a>    
                                        <button type="submit" class="btn btn-success">REALIZAR PAGAMENTO</button>
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
    
@endsection