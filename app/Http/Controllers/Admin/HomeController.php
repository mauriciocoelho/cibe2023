<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Inscrito;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //soma
        $inscricoesCount = Inscrito::whereNull('deleted_at')->sum('qntde');
        $pago = Inscrito::where('status_pagamento', 1)->whereNull('deleted_at')->sum('qntde');
        $apagar = Inscrito::where('status_pagamento', 0)->whereNull('deleted_at')->sum('qntde');
        //multiplicacao
        $inscricoesValor = Inscrito::whereNull('deleted_at')->sum('valor');
        $pagoValor = Inscrito::where('status_pagamento', 1)->whereNull('deleted_at')->sum('valor');
        $apagarValor = Inscrito::where('status_pagamento', 0)->whereNull('deleted_at')->sum('valor');

        $inscricoes = Inscrito::orderBy('id','DESC')->paginate(5);
        $camposMaisInscricoes = Inscrito::select('campo', DB::raw('SUM(qntde) as total'))
            ->whereNull('deleted_at')
            ->groupBy('campo')
            ->orderByRaw('total DESC')
            ->get();

        
        return view('admin.home', compact(
            'inscricoesCount',
            'pago',
            'apagar',
            'inscricoesValor',
            'pagoValor',
            'apagarValor',
            'inscricoes',
            'camposMaisInscricoes'
        ));
    }
}
