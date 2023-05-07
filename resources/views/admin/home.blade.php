@extends('layouts.app')

@section('title', 'Home')

@section('content')

    <main role="main" class="main-content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="row align-items-center mb-2">
                        <div class="col">
                            <h2 class="h5 page-title">{{ __('Seja Bem-Vindo!') }}</h2>
                        </div>
                    </div>

                    <!-- widgets -->
                    <div class="row my-4">
                        <div class="col-md-4">
                            <div class="card shadow mb-4">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <small class="text-muted mb-1">Inscrições</small>
                                            <h3 class="card-title mb-0">{{$inscricoesCount}}</h3>
                                            <p class="small text-muted mb-0"><span>R$ {{ number_format($inscricoesValor, 2, ',', '.')}}</span></p>
                                        </div>
                                        <div class="col-4 text-right">
                                            <span class="sparkline inlineline"></span>
                                        </div>
                                    </div> <!-- /. row -->
                                </div> <!-- /. card-body -->
                            </div> <!-- /. card -->
                        </div> <!-- /. col -->
                        <div class="col-md-4">
                            <div class="card shadow mb-4">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <small class="text-muted mb-1">Pagos</small>
                                            <h3 class="card-title mb-0">{{$pago}}</h3>
                                            <p class="small text-muted mb-0"><span>R$ {{ number_format($pagoValor, 2, ',', '.')}}</span></p>
                                        </div>
                                        <div class="col-4 text-right">
                                            <span class="sparkline inlinepie"></span>
                                        </div>
                                    </div> <!-- /. row -->
                                </div> <!-- /. card-body -->
                            </div> <!-- /. card -->
                        </div> <!-- /. col -->
                        <div class="col-md-4">
                            <div class="card shadow mb-4">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <small class="text-muted mb-1">á Pagar</small>
                                            <h3 class="card-title mb-0">{{$apagar}}</h3>
                                            <p class="small text-muted mb-0"><span>R$ {{ number_format($apagarValor, 2, ',', '.')}}</span></p>
                                        </div>
                                        <div class="col-4 text-right">
                                            <span class="sparkline inlinebar"></span>
                                        </div>
                                    </div> <!-- /. row -->
                                </div> <!-- /. card-body -->
                            </div> <!-- /. card -->
                        </div> <!-- /. col -->
                    </div> <!-- end section -->

                   <!-- <div class="row items-align-baseline">
                        <div class="col-md-12 col-lg-4">
                            <div class="card shadow eq-card mb-4">
                                <div class="card-body mb-n3">
                                    <div class="row items-align-baseline h-100">
                                        <div class="col-md-6 my-3">
                                            <p class="mb-0"><strong class="mb-0 text-uppercase text-muted">{{ __('Total Geral') }}</strong></p>
                                            <h3>$2,562</h3>
                                            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        </div>
                                        <div class="col-md-6 my-4 text-center">
                                        <div lass="chart-box mx-4">
                                            <div id="radialbarWidget"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 border-top py-3">
                                    <p class="mb-1"><strong class="text-muted">Cost</strong></p>
                                    <h4 class="mb-0">108</h4>
                                    <p class="small text-muted mb-0"><span>37.7% Last week</span></p>
                                    </div> 
                                    <div class="col-md-6 border-top py-3">
                                    <p class="mb-1"><strong class="text-muted">Revenue</strong></p>
                                    <h4 class="mb-0">1168</h4>
                                    <p class="small text-muted mb-0"><span>-18.9% Last week</span></p>
                                    </div> 
                                </div>
                            </div> 
                        </div> 
                        </div> 
                        <div class="col-md-12 col-lg-4">
                        <div class="card shadow eq-card mb-4">
                            <div class="card-body">
                            <div class="chart-widget mb-2">
                                <div id="radialbar"></div>
                            </div>
                            <div class="row items-align-center">
                                <div class="col-4 text-center">
                                <p class="text-muted mb-1">Cost</p>
                                <h6 class="mb-1">$1,823</h6>
                                <p class="text-muted mb-0">+12%</p>
                                </div>
                                <div class="col-4 text-center">
                                <p class="text-muted mb-1">Revenue</p>
                                <h6 class="mb-1">$6,830</h6>
                                <p class="text-muted mb-0">+8%</p>
                                </div>
                                <div class="col-4 text-center">
                                <p class="text-muted mb-1">Earning</p>
                                <h6 class="mb-1">$4,830</h6>
                                <p class="text-muted mb-0">+8%</p>
                                </div>
                            </div>
                            </div> 
                        </div> 
                        </div> 
                        <div class="col-md-12 col-lg-4">
                        <div class="card shadow eq-card mb-4">
                            <div class="card-body">
                            <div class="d-flex mt-3 mb-4">
                                <div class="flex-fill pt-2">
                                <p class="mb-0 text-muted">{{ __('Total Geral') }}</p>
                                <h4 class="mb-0">108</h4>
                                <span class="small text-muted">+37.7%</span>
                                </div>
                                <div class="flex-fill chart-box mt-n2">
                                <div id="barChartWidget"></div>
                                </div>
                            </div> 
                            <div class="row border-top">
                                <div class="col-md-6 pt-4">
                                <h6 class="mb-0">108 <span class="small text-muted">+37.7%</span></h6>
                                <p class="mb-0 text-muted">{{ __('Selecionadas') }}</p>
                                </div>
                                <div class="col-md-6 pt-4">
                                <h6 class="mb-0">1168 <span class="small text-muted">-18.9%</span></h6>
                                <p class="mb-0 text-muted">{{ __('Não Selecionadas') }}</p>
                                </div>
                            </div> 
                            </div> 
                        </div> 
                        </div> 
                    </div> -->
                    
                    <div class="row">
                        <!-- Recent Activity -->
                        <div class="col-md-12 col-lg-4 mb-4">
                            <div class="card timeline shadow">
                                <div class="card-header">
                                    <strong class="card-title">{{ __('Campos com mais Inscrições') }}</strong>
                                    <a class="float-right small text-muted" href="">{{ __('Ver Tudo') }}</a>
                                </div>                                
                                <div class="card-body" data-simplebar style="height:355px; overflow-y: auto; overflow-x: hidden;">
                                @if ($camposMaisInscricoes)
                                    <table class="table table-striped table-hover table-borderless">
                                        <thead>
                                            <tr>
                                                <th>{{ __('Campo') }}</th>
                                                <th>{{ __('Inscrições') }}</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($camposMaisInscricoes as $key => $ranking)
                                                <tr>
                                                    <td>{{ $ranking->campo }}</td>
                                                    <td>{{ $ranking->total }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                @else
                                    <h4><br><br><center>{{ __('Não encontramos nenhum registro') }}</center></h4><br><br><br>
                                @endif
                                          
                                </div> <!-- / .card-body -->
                                
                            </div> <!-- / .card -->
                        </div> <!-- / .col-md-6 -->
                        <!-- Striped rows -->
                        <div class="col-md-12 col-lg-8">
                            <div class="card shadow">
                                <div class="card-header">
                                    <strong class="card-title">{{ __('Inscrições Recentes') }}</strong>
                                    <a class="float-right small text-muted" href="{{route('inscricoes.index')}}">{{ __('Ver Tudo') }}</a>
                                </div>
                                <div class="card-body my-n2">
                                    @if ($inscricoes->count())
                                        <table class="table table-striped table-hover table-borderless">
                                            <thead>
                                            <tr>
                                                <th>{{ __('Data') }}</th>
                                                <th>{{ __('Nome') }}</th>                                     
                                                <th>{{ __('Campo') }}</th>                                        
                                                <th>{{ __('Qtde') }}</th>
                                                <th>{{ __('Valor') }}</th>
                                                <th>{{ __('Status de Pagamento') }}</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($inscricoes as $key => $inscricao)
                                                    <tr>
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
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    @else
                                        <h4><br><br><center>{{ __('Não encontramos nenhum registro') }}</center></h4><br><br><br>
                                    @endif
                                </div>
                            </div>
                        </div> <!-- Striped rows -->
                    </div> <!-- .row-->


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
    <script src="{{asset('assets-admin/js/d3.min.js')}}"></script>
    <script src="{{asset('assets-admin/js/topojson.min.js')}}"></script>
    <script src="{{asset('assets-admin/js/datamaps.all.min.js')}}"></script>
    <script src="{{asset('assets-admin/js/datamaps-zoomto.js')}}"></script>
    <script src="{{asset('assets-admin/js/datamaps.custom.js')}}"></script>
    <script src="{{asset('assets-admin/js/Chart.min.js')}}"></script>
    <script>
        /* defind global options */
        Chart.defaults.global.defaultFontFamily = base.defaultFontFamily;
        Chart.defaults.global.defaultFontColor = colors.mutedColor;
    </script>
    <script src="{{asset('assets-admin/js/gauge.min.js')}}"></script>
    <script src="{{asset('assets-admin/js/jquery.sparkline.min.js')}}"></script>
    <script src="{{asset('assets-admin/js/apexcharts.min.js')}}"></script>
    <script src="{{asset('assets-admin/js/apexcharts.custom.js')}}"></script>
    <script src="{{asset('assets-admin/js/jquery.mask.min.js')}}"></script>
    <script src="{{asset('assets-admin/js/select2.min.js')}}"></script>
    <script src="{{asset('assets-admin/js/jquery.steps.min.js')}}"></script>
    <script src="{{asset('assets-admin/js/jquery.validate.min.js')}}"></script>
    <script src="{{asset('assets-admin/js/jquery.timepicker.js')}}"></script>
    <script src="{{asset('assets-admin/js/dropzone.min.js')}}"></script>
    <script src="{{asset('assets-admin/js/uppy.min.js')}}"></script>
    <script src="{{asset('assets-admin/js/quill.min.js')}}"></script>
    <script src="{{asset('assets-admin/js/apps.js')}}"></script>
    <script>
        var uptarg = document.getElementById('drag-drop-area');
        if (uptarg)
        {
            var uppy = Uppy.Core().use(Uppy.Dashboard,
            {
            inline: true,
            target: uptarg,
            proudlyDisplayPoweredByUppy: false,
            theme: 'dark',
            width: 770,
            height: 210,
            plugins: ['Webcam']
            }).use(Uppy.Tus,
            {
            endpoint: 'https://master.tus.io/files/'
            });
            uppy.on('complete', (result) =>
            {
            console.log('Upload complete! We’ve uploaded these files:', result.successful)
            });
        }
    </script>
    <script src="js/apps.js"></script>
@endsection
