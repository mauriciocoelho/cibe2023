<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\InscricaoRequest;
use App\Repositories\InscricaoRepository;
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
        
        $inscricao = $this->repository->created($request->all());

        if($inscricao){
            return view('portal.finaliza-inscricao');
        }
    }

}
