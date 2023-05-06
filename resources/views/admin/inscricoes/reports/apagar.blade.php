<!DOCTYPE html>
<html class="loading" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Mauricio Coelho">
        <meta name="author" content="Mauricio Coelho">
        <link rel="apple-touch-icon" sizes="180x180" href="{{asset('assets-admin/assets/images/favicon_io/apple-touch-icon.png')}}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{asset('assets-admin/assets/images/favicon_io/favicon-32x32.png')}}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets-admin/assets/images/favicon_io/favicon-16x16.png')}}">
        <title>{{ config('app.name') }}  &mdash; Relatório de Inscrições á Pagar</title>
        <style>
            h1 {
                font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;
                font-size: 10pt;
                font-weight: bold;
                text-align: center;
                margin: 5px auto;
            }

            p {
                font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;
                font-size: 8pt;
                margin: 2px auto;
                text-align: center;
            }

            th {
                font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;  
                border-left: 1px solid black; 
                border-right: 1px solid black; 
                width: 100px; 
                text-align: center; 
                font-size: 14px; 
            }

            td {
                font-family: Arial, "Helvetica Neue", Helvetica, sans-serif; 
                text-align: center;
                font-size: 14px; 
                border: 1px solid black;
            }

            footer {
                position: fixed;
                bottom: 0;
                left: 0;
                right: 0;
            }

        </style>     
    </head>
    <body>
        <main role="main" class="main-content">
            <!-- Cabeçalho -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <center><img src="data:image/png;base64,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" width="60px" height="60px" style="display: block;" alt="Logo"></center>   
                        <h1 class="h1 font-weight-bold mt-3 mb-0">IGREJA EVANGELICA ASSEMBLEIA DE DEUS – MINISTERIO MADUREIRA</h1>
                        <p><b>CNPJ: 01.231.182/0001-74</b></p>
                        <p>Av. Luiz Leite Ribeiro, 965 – QD G LT 55 – Setor Aeroporto</p>
                        <p>CEP: 77.500-000 – Porto Nacional-TO – Fone: 63 98447-2562 / 98413-5534</p>
                        <p>E-mail: madureiraportonacional@gmail.com</p>
                        <p><b>Presidente: Pr. Walter Luiz De Vasconcelos</b></p>
                    </div>
                </div>
            </div>
                
            <br style="clear: both;"/>
            <div>
                <div>
                    <div style="text-align: center;">
                        <strong></strong><br>
                    </div>
                </div>
            </div>
                        

            <div>
                <p style="font-size: 18px;"><b>RELATÓRIO DE INSCRIÇÕES - NÃO PAGAS</b></p>
            </div>
            <br><br>


            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        @if ($gerals->count())
                            <table cellspacing="0" style="width: 100%; text-align: center; font-size: 10pt; border: 1px solid black;">
                                <thead>
                                    <tr>
                                        <th>{{ __('CAMPO') }}</th>
                                        <th>{{ __('INSCRIÇÕES') }}</th>
                                        <th>{{ __('VALOR') }}</th>
                                    </tr>
                                </thead>
                                @foreach ($gerals as $geral)
                                    <tbody>
                                        <tr>
                                            <td class="alt" width="100">{{$geral->campo}}</td>
                                            <td class="alt" width="80">{{$geral->inscricoes}}</td>
                                            <td class="alt" width="80">R$ {{ number_format($geral->valor, 2, ',', '.')}}</td>
                                        </tr>
                                    </tbody>
                                @endforeach
                                <tr>
                                    <td colspan="2" style="width: 35%; text-align: right; font-size: 14px;"><strong>Valor Total.:</strong></td>
                                    <td style="width: 15%; text-align: center; font-size: 14px;"><strong>R$ {{ number_format($inscricoesSum, 2, ',', '.')}}</strong></td>
                                </tr>
                            </table>                               
                        @else
                            <h4><center>Não encontramos nenhum registro</center></h4><br><br><br>                                        
                        @endif
                    </div>
                </div>
            </div> 

            <br style="clear:both;" />
            <span style="page-break-inside: auto;"></span>
            
            <br><br><br><br><br>
            <div style="text-align: center; font-size: 12px;">
                <div style="display: inline-block; text-align: center;">
                    <div>_____________________________________________</div>    
                    <div>Eduardo de Serpa</div>
                    <div>Secretário Geral</div>
                </div>
                <div style="display: inline-block; margin-left: 50px; text-align: center;">
                    <div>_____________________________________________</div>    
                    <div>Welson Pinto Almeida</div>
                    <div>Diretor Financeiro</div>
                </div>
            </div>
            <br><br><br><br><br>
            <div style="text-align: center; font-size: 12px;">
                <div style="display: inline-block; text-align: center;">
                    <div>_____________________________________________</div>    
                    <div>Walter Luiz de Vasconcelos</div>
                    <div>Pastor Presidente</div>
                </div>
            </div>

            <br style="clear:both;" />
            <span style="page-break-inside: auto;"></span>

            <!-- Rodapé -->
            <footer>
                <div style="border-top: 1px solid #000; margin-top: 20px; padding-top: 10px; text-align: center; font-size: 6pt;">
                    <p style="margin-bottom: 2px auto; font-size: 6pt"><b>IGREJA EVANGELICA ASSEMBLEIA DE DEUS – MINISTERIRO DE MADUREIRA<b></p>
                    <p style="margin-bottom: 2px auto; font-size: 6pt">Av. Luiz Leite Ribeiro, 965 – QD G LT 55 – Setor Aeroporto, Porto Nacional-TO</p>
                    <p style="margin-bottom: 2px auto; font-size: 6pt"><b>Pastor Presidente: Pr. Walter Luiz de Vasconcelos 63 98447-2562</b></p>
                    <p style="margin-bottom: 2px auto; font-size: 6pt"><b>CNPJ: 01.231.182/0001-74</b></p>
                </div>
            </footer>
        </main>
    </body>
</html>