<html>
    <head>
        <style type="text/css">
            table { vertical-align: top; }
            tr    { vertical-align: top; }
            td    { vertical-align: top; }
            .negrito {
                font-weight: bold;
            }
            .midnight-blue{
                background:#2c3e50;
                padding: 4px 4px 4px;
                color:white;
                font-weight:bold;
                font-size:12px;
            }
            .silver{
                background:white;
                padding: 3px 4px 3px;
            }
            .clouds{
                background:#ecf0f1;
                padding: 3px 4px 3px;
            }
            .border-top{
                border-top: solid 1px #bdc3c7;
                
            }
            .border-left{
                border-left: solid 1px #bdc3c7;
            }
            .border-right{
                border-right: solid 1px #bdc3c7;
            }
            .border-bottom{
                border-bottom: solid 1px #bdc3c7;
            }
            table.page_footer {
                width: 100%; border: none; background-color: white; padding: 2mm;border-collapse:collapse; border: none;
            }

        </style>
    </head>
    <body>
        <!-- Cabeçalho -->
        <table cellspacing="0" style="width: 100%;">
            <tr> 
                <div> 
                    <img src="" width="85" height="85" align="left">
                </div>
                <div class="rounded text" style="text-align:center;">Secrétária : </div>  
                <div class="rounded text" style="text-align:center;">Lider: Wilma Rodrigues Medrade Dias</div>      
                <div class="rounded text" style="text-align:center;">Pr° Presidente: Walter</div>             
                <div class="rounded text" style="text-align:center;">
                    <b>CIBE PORTO NACIONAL - TO</b>
                </div>
                <div> 
                    <img src="" width="85" height="85" align="left">
                </div>
                <!--</div>-->
                <br>			
            </tr>
        </table>
            
        <br style="clear: both;"/>
        <div>
            <div>
                <div style="text-align: center;">
                    <strong></strong><br>
                </div>
            </div>
        </div>
                    

        <div style="border: 0.1mm solid black;padding:0.5em; background-color: rgba(211, 211, 211, 1.0); text-align:center;">
            <strong style="font-size: 18px;">LISTAGEM DE INSCRIÇÕES PAGAS</strong>
        </div>

        <div style="border: 0.1mm solid black;padding:0.5em">
            
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        @if ($gerals->count())
                            <table cellspacing="0" style="width: 100%; text-align: left; font-size: 10pt;">
                                <thead>
                                    <tr>
                                        <th style="width: 300px; text-align: left; font-size: 14px;">{{ __('CAMPO') }}</th>
                                        <th style="width: 80px; text-align: right; font-size: 14px;">{{ __('Qntde Inscrito') }}</th>

                                    </tr>
                                </thead>
                                @foreach ($gerals as $geral)
                                    <tbody>   
                                        <tr>
                                            <td class="alt" width="300" style="font-size: 12px;">{{$geral->campo}}</td>
                                            <td class="alt" width="80" style="text-align:center; font-size: 12px;">{{$geral->total}}</td>
                                            <td class="alt" width="100" style="text-align:center"></td>
                                        </tr>  
                                    </tbody>                                  
                                @endforeach
                                <tr>
                                    <td colspan="4" style="widtd: 35%; text-align: right; font-size: 14px;"><strong>Total de Inscrições.:</strong></td>
                                    <td style="widtd: 15%; text-align: right; font-size: 14px;"><strong>{{$inscricoesCount}}</strong></td>
                                </tr>
                            </table>                                
                        @else
                            <h4><center>Não encontramos nenhum registro</center></h4><br><br><br>                                        
                        @endif
                    </div>
                </div>
            </div>    
        </div>
        <br style="clear:both;" />
        <span style="page-break-inside: auto;"></span>

    </body>
</html>