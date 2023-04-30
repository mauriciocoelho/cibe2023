@extends('layouts.app')

@section('title', 'Visualizar Usuário')

@section('content')

    <main role="main" class="main-content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12">
                    <h2 class="page-title">{{ __('Visualizar Usuário') }}</h2>

                    <div class="content-header row">
                        <div class="content-header-left col-md-12 col-12 mb-2">
                            <div class="row breadcrumbs-top">
                                <div class="breadcrumb-wrapper col-12">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{route('home')}}">Início</a></li>
                                        <li class="breadcrumb-item"><a href="{{route('usuarios.index')}}">{{ __('Usuários') }}</a></li>
                                        <li class="breadcrumb-item active">{{ __('Visualizar Usuário') }} </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card shadow mb-4">
                        <div class="card-body">

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>{{ __('Nome') }}:</strong>
                                    {{ $user->name }}
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>{{ __('E-mail') }}:</strong>
                                    {{ $user->email }}
                                </div>
                            </div>                            
                            <hr>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <a class="btn grey btn-outline-secondary btn-sm" href="{{ route('usuarios.index') }}"> {{ __('Voltar') }}</a>
                            </div>
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
@endsection