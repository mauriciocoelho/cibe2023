@extends('layouts.app')

@section('title', 'Inscrições')

@section('content')

    <main role="main" class="main-content">

        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12">

                    <div class="row align-items-center my-4">
                        <div class="col">
                            <h2 class="h3 mb-0 page-title">{{ __('Inscrições') }}</h2>
                        </div>
                        <div class="col-auto">
                            <a href="{{route('inscricoes.create')}}" class="btn btn-success">
                                <span class="fe fe-plus fe-12 mr-2"></span>Novo
                            </a>
                            <a href="{{ route('inscricoes.export') }}" class="btn btn-warning">
                                <span class="fe fe-download fe-12 mr-2"></span>Exportar
                            </a>                           
                        </div>
                    </div>
                    @if(session()->get('success'))
                        <div class="alert alert-success">
                            {{ session()->get('success') }}  
                        </div><br />
                    @endif  

                    @if(session()->get('error'))
                        <div class="alert alert-danger">
                            {{ session()->get('error') }}  
                        </div><br />
                    @endif  
                    <div class="content-header row">
                        <div class="content-header-left col-md-12 col-12 mb-2">
                            <div class="row breadcrumbs-top">
                                <div class="breadcrumb-wrapper col-12">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{route('home')}}">Início</a></li>
                                        <li class="breadcrumb-item active">{{ __('Inscrições') }}</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- table -->
                    <div class="card shadow">
                        <div class="card-body">
                            <table class="table datatables" id="dataTable-1">
                                <thead>
                                    <tr>
                                        <th>{{ __('Inscrição') }}</th>
                                        <th>{{ __('Data Inscrição') }}</th>
                                        <th>{{ __('Nome') }}</th>                                     
                                        <th>{{ __('Campo') }}</th>                                        
                                        <th>{{ __('Qtde') }}</th>
                                        <th>{{ __('Valor') }}</th>
                                        <th>{{ __('Status de Pagamento') }}</th>
                                        <th>{{ __('Ação') }}</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                @foreach ($data as $key => $inscricao)
                                    <tr>
                                        <td>{{ $inscricao->id }}</td>
                                        <td>{{ date('d-m-Y H:i:s', strtotime($inscricao->created_at)) }}</td>
                                        <td>{{ $inscricao->nome }}</td>
                                        <td>{{ $inscricao->campo }}</td>
                                        <td>{{ $inscricao->qntde }}</td>
                                        <td>R$ {{ number_format($inscricao->valor, 2, ',', '.')}}</td>
                                        <td>
                                            @if($inscricao->status_pagamento == 'Pago')
                                                <span class="badge badge-success">Pago</span>
                                            @else
                                                <span class="badge badge-danger">á Pagar</span>
                                            @endif
                                        </td>
                                        <td>
                                            <button class="btn btn-sm dropdown-toggle more-horizontal" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="text-muted sr-only">Action</span>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="{{ route('inscricoes.show',$inscricao->id) }}">{{ __('Visualizar') }}</a>
                                              
                                                <a class="dropdown-item" href="{{ route('inscricoes.edit',$inscricao->id) }}">{{ __('Editar') }}</a>
                                            
                                                <a class="dropdown-item" href="" data-toggle="modal" data-target="#ModalDelete{{$inscricao->id}}">{{ __('Deletar') }}</a> 
                                               
                                            </div>
                                            @include('admin.inscricoes.delete')
                                        </td>
                                        <td>
                                            @if($inscricao->status_pagamento == 'á Pagar')
                                                <a data-tt="tooltip" data-placement="top" title="" href="#" data-original-title="Fazer pagamento" class="table-action-btn" data-toggle="modal" title="Fazer pagamento" data-target="#ModalPagamento{{$inscricao->id}}"><i class="fe fe-download fe-16" style="color: green"></i></a>
                                            @endif
                                            @include('admin.inscricoes.pagamento')
                                        </td>
                                    </tr> 
                                @endforeach                          
                            </table>
                        </div>
                    </div>
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
    <script src="{{asset('assets-admin/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('assets-admin/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('assets-admin/js/apps.js')}}"></script>
    <script>
        $('#dataTable-1').DataTable(
        {
            autoWidth: true,
            "lengthMenu": [
            [10, 20, 30, -1],
            [10, 20, 30, "All"]
            ]
        });
    </script>
    <script>
        $("[data-tt=tooltip]").tooltip();
    </script>   
@endsection