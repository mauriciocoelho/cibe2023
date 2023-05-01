<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inscrito;
use App\Repositories\InscricaoRepository;
use Illuminate\Support\Facades\DB;

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

    public function finalizaInscricao(Request $request)
    {
        $verificaInscricao = Inscrito::where('campo', '=', $request->campo)
            ->where('qntde', '=', $request->qntde)
            ->where(DB::raw("DATE_FORMAT(created_at, '%Y-%m-%d %H')"), '=', now()->format('Y-m-d H'))
            ->get();
        
        if ($verificaInscricao->count() > 0) {
            $request->session()->flash('error', 'Você já efetuou essa operação, por favor volte daqui 1 hora');            
            return view('portal.finaliza-inscricao');
        }else{

            $inscricao = $this->repository->created($request->all());
            
            if($inscricao){
                $dados_insc = [
                    'id' => $inscricao->id,
                    'cpf' => $inscricao->cpf,
                    'nome' => $inscricao->nome,
                    'telefone' => $inscricao->telefone,
                    'cidade' => $inscricao->cidade,
                    'campo' => $inscricao->campo,
                    'qntde' => $inscricao->qntde,
                    'valor' => $inscricao->valor
                ];
                echo "<script>localStorage.setItem('dados_insc', '".json_encode($dados_insc)."');</script>";

                $request->session()->flash('success', 'Inscrição Realizada com sucesso!');
                return view('portal.finaliza-inscricao');
            }
        }
    }
}
