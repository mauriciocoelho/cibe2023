<!DOCTYPE html>
<html class="loading" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Mauricio Coelho">
        <meta name="author" content="Mauricio Coelho">
        <link rel="apple-touch-icon" sizes="180x180" href="{{asset('assets-admin/assets/images/favicon//apple-touch-icon.png')}}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{asset('assets-admin/assets/images/favicon//favicon-32x32.png')}}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets-admin/assets/images/favicon//favicon-16x16.png')}}">
        <title>{{ config('app.name') }}  &mdash; @yield('title')</title>
        <!-- Simple bar CSS -->
            <link rel="stylesheet" href="{{asset('assets-admin/css/simplebar.css')}}">
        <!-- Fonts CSS -->
            <link href="https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <!-- Icons CSS -->
            <link rel="stylesheet" href="{{asset('assets-admin/css/feather.css')}}">
            <link rel="stylesheet" href="{{asset('assets-admin/css/select2.css')}}">
            <link rel="stylesheet" href="{{asset('assets-admin/css/dataTables.bootstrap4.css')}}">
        <!-- Date Range Picker CSS -->
            <link rel="stylesheet" href="{{asset('assets-admin/css/daterangepicker.css')}}">
        <!-- App CSS -->
            <link rel="stylesheet" href="{{asset('assets-admin/css/app-light.css')}}" id="lightTheme">
        <!-- SweetAlert2 -->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.min.css">
            <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script>
            @toastr_css
            <style type="text/css">
            	.navbar-nav > .active {
            		background-color: #EBF1F2 !important;
            	}
            </style>
    </head>
    <body class="vertical  light">
        <div class="wrapper">
            
                <nav class="topnav navbar navbar-light">
                    <button type="button" class="navbar-toggler text-muted mt-2 p-0 mr-3 collapseSidebar">
                        <i class="fe fe-menu navbar-toggler-icon"></i>
                    </button>
                   <!-- <form class="form-inline mr-auto searchform text-muted" action="" method="post">
                        {{csrf_field()}}
                        <input class="form-control mr-sm-2 bg-transparent border-0 pl-4 text-muted" name="search" type="search" placeholder="Busque por Álbuns, Clientes, Perfil de Usuário e Usuário" aria-label="Search">
                    </form> -->
                    <ul class="nav">
                        <!--<li class="nav-item nav-notif">
                            <a class="nav-link text-muted my-2" href="./#" data-toggle="modal" data-target=".modal-notif">
                            <span class="fe fe-bell fe-16"></span>
                            <span class="dot dot-md bg-success"></span>
                            </a>
                        </li>-->
                        
                    </ul>
                </nav>
                   
            
                <aside class="sidebar-left border-right bg-white shadow" id="leftSidebar" data-simplebar>
                    <a href="#" class="btn collapseSidebar toggle-btn d-lg-none text-muted ml-2 mt-3" data-toggle="toggle">
                        <i class="fe fe-x"><span class="sr-only"></span></i>
                    </a>
                    <!-- nav bar -->
                    
                    <nav class="vertnav navbar navbar-light">                    
                        <div class="w-100 mb-4 d-flex">
                            <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="">
                                <img src="{{asset('assets-admin/assets/images/31_CIBE-TO_2023_page-0001.png')}}" width="100">
                            </a>
                        </div>
                        <!--<p class="text-muted nav-heading mt-4 mb-1">
                            <span>Apps</span>
                        </p>-->
                        <ul class="navbar-nav flex-fill w-100 mb-2">
                            <li class="nav-item dropdown" {!! (Request::path() == 'home') ? 'class="nav-item w-100 active"' : '' !!}>
                                <a class="nav-link" href="{{route('home')}}" >
                                    <i class="fe fe-home fe-16"></i>
                                    <span class="ml-3 item-text">{{ __('Dashboard') }}</span>
                                </a>
                            </li>

                            <li class="nav-item dropdown">
                                <a href="#ativos" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                                    <i class="fe fe-grid fe-16"></i>
                                    <span class="ml-3 item-text">{{ __('Inscrições') }}</span>
                                </a>
                                <ul class="collapse list-unstyled pl-4 w-100" id="ativos">
                                    <li class="nav-item">
                                        <a class="nav-link pl-3" href="{{ route('inscricoes.index') }}" ><span class="ml-1 item-text">{{ __('Inscrições Realizadas') }}</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link pl-3" href="#" data-toggle="collapse" data-target="#relatorios" aria-expanded="false" aria-controls="relatorios"><span class="ml-1 item-text">{{ __('Relatórios') }}</span></a>
                                        <ul class="collapse list-unstyled pl-4" id="relatorios">
                                            <li class="nav-item">
                                                <a class="nav-link pl-3" href="{{ route('relatorio-inscricao.paga') }}" target="_blank"><span class="ml-1 item-text">{{ __('Relatório Pagos') }}</span></a>
                                            </li> 
                                            <li class="nav-item">
                                                <a class="nav-link pl-3" href="{{ route('relatorio-inscricao.apagar') }}" target="_blank"><span class="ml-1 item-text">{{ __('Relatório a Pagar') }}</span></a>
                                            </li>   
                                        </ul>
                                    </li>                               
                                </ul>
                            </li>
                            
                            <li class="nav-item dropdown" {!! (Request::path() == 'usuarios') ? 'class="nav-item w-100 active"' : '' !!}>
                                <a class="nav-link" href="{{route('usuarios.index')}}" >
                                    <i class="fe fe-user fe-16"></i>
                                    <span class="ml-3 item-text">{{ __('Usuários') }}</span>
                                </a>
                            </li>
                            
                        </ul>
                    </nav>
                    
                    <!-- end nav bar -->
                </aside>

            @yield('content')
            @yield('scripts')
        </div> <!-- .wrapper -->    
    </body>
    @toastr_js
    @toastr_render
</html>