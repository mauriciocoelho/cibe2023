<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\InscricaoRequest;
use App\Models\Inscrito;
use App\Repositories\InscricaoRepository;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class PortalController extends Controller
{
    protected $repository;

    public function __construct(
        InscricaoRepository $repository
    )
    {
        $this->repository = $repository;
    }
    
    public function index(){
        return view('portal.index');
    }
    
    public function inscricao(){
        return view('portal.inscricao');
    }

    public function confirmaDados(Request $request){ 

        $nome = $request->input('nome');
        $cpf = $request->input('cpf');
        $telefone = $request->input('telefone');
        $cidade = $request->input('cidade');
        $campo = $request->input('campo');      

        return view('portal.confirma-dados', [
            'nome' => $nome, 
            'cpf' => $cpf,
            'telefone' => $telefone,
            'cidade' => $cidade,
            'campo' => $campo
        ]);
    }

    public function finalizaInscricao(Request $request){

        $verificaInscricao = Inscrito::where('campo', '=', $request->campo)
            ->where('qntde', '=', $request->qntde)
            ->where(DB::raw("DATE_FORMAT(created_at, '%Y-%m-%d %H')"), '=', now()->format('Y-m-d H'))
            ->get();
    
        if ($verificaInscricao->count() > 0) {
            toastr()->error('Você já efetuou essa operação, por favor volte daqui 1 hora');
            
            return view('portal.finaliza-inscricao', compact('inscricao'));
        }
    
        $inscricao = $this->repository->created($request->all());
    
        if($inscricao){
            return view('portal.finaliza-inscricao', compact('inscricao'));
        }     
    }
    

}
