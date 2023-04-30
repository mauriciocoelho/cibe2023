@extends('layouts.app')

@section('title', 'Usuarios')

@section('content')

    <main role="main" class="main-content">

        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12">

                    <div class="row align-items-center my-4">
                        <div class="col">
                            <h2 class="h3 mb-0 page-title">{{ __('Usuários') }}</h2>
                        </div>
                        <div class="col-auto">
                            <a href="{{route('usuarios.create')}}" class="btn btn-success"><span class="fe fe-plus fe-12 mr-2"></span>Novo</a>
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
                                        <li class="breadcrumb-item active">{{ __('Usuários') }}</li>
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
                                        <th>#</th>
                                        <th>{{ __('Avatar') }}</th>
                                        <th>{{ __('Nome') }}</th>                                        
                                        <th>{{ __('E-mail') }}</th>
                                        <th>{{ __('Ação') }}</th>
                                    </tr>
                                </thead>
                                @foreach ($data as $key => $user)
                                    <tr>
                                        <td>{{ $user->id }}</td>
                                        <td>
                                            <div class="avatar avatar-sm">
                                                @if($user->avatar == '')                                                
                                                    <img src="{{asset('assets-admin/assets/avatars/user-default.png')}}" alt="..." class="avatar-img rounded-circle">
                                                @else
                                                    <img src="{{asset('assets-admin/assets/avatars/'.$user->avatar)}}" alt="..." class="avatar-img rounded-circle">
                                                @endif
                                            </div>
                                        </td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>
                                            <button class="btn btn-sm dropdown-toggle more-horizontal" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="text-muted sr-only">Action</span>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="{{ route('usuarios.show',$user->id) }}">{{ __('Visualizar') }}</a>
                                              
                                                    <a class="dropdown-item" href="{{ route('usuarios.edit',$user->id) }}">{{ __('Editar') }}</a>
                                            
                                                    <a class="dropdown-item" href="" data-toggle="modal" data-target="#ModalDelete{{$user->id}}">{{ __('Deletar') }}</a> 
                                               
                                            </div>
                                            @include('admin.usuarios.delete')
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
@endsection