@extends('layouts.app')

@section('title', 'Editar Inscrição')

@section('content')

    <main role="main" class="main-content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12">
                    <h2 class="page-title">{{ __('Editar Inscrição') }}</h2>

                    <div class="content-header row">
                        <div class="content-header-left col-md-12 col-12 mb-2">
                            <div class="row breadcrumbs-top">
                                <div class="breadcrumb-wrapper col-12">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{route('home')}}">Início</a></li>
                                        <li class="breadcrumb-item"><a href="{{route('inscricoes.index')}}">{{ __('Inscrições') }}</a></li>
                                        <li class="breadcrumb-item active">{{ __('Editar Inscrição') }} </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="card shadow mb-4">
                        <div class="card-body">

                            {!! Form::model($data, ['method' => 'PATCH','route' => ['inscricoes.update', $data->id]]) !!}
            
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>{{ __('Name') }}:</strong>
                                        {!! Form::text('nome', null, array('placeholder' => 'Nome','class' => 'form-control')) !!}
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>{{ __('CPF') }}:</strong>
                                        {!! Form::text('cpf', null, array('id' => 'cpf', 'placeholder' => 'CPF','class' => 'form-control')) !!}
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>{{ __('Telefone') }}:</strong>
                                        {!! Form::text('telefone', null, array('id' => 'telefone', 'placeholder' => 'Telefone','class' => 'form-control')) !!}
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>{{ __('Cidade') }}:</strong>
                                        {!! Form::text('cidade', null, array('placeholder' => 'Cidade','class' => 'form-control')) !!}
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>{{ __('Campo') }}:</strong>
                                        {!! Form::text('campo', null, array('placeholder' => 'Campo','class' => 'form-control')) !!}
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <a class="btn grey btn-outline-secondary" href="{{ route('inscricoes.index') }}"> {{ __('Voltar') }}</a>
                                    <button type="submit" class="btn btn-warning">{{ __('Editar') }}</button>
                                </div>
                            {!! Form::close() !!}
                        </div>
                    </div> <!-- / .card -->
                </div> <!-- .col-12 -->
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
    <script src="{{asset('assets-admin/js/daterangepicker.js')}}"></script>
    <script src="{{asset('assets-admin/js/jquery.stickOnScroll.js')}}"></script>
    <script src="{{asset('assets-admin/js/tinycolor-min.js')}}"></script>
    <script src="{{asset('assets-admin/js/config.js')}}"></script>
    <script src="{{asset('assets-admin/js/apps.js')}}"></script>
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

@endsection