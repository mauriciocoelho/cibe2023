<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortalController extends Controller
{
    public function confirmaDados(Request $request){
        
        $nome = $request->input('nome');
        $cpf = $request->input('cpf');
        $fone = $request->input('fone');
        $cidade = $request->input('cidade');
        $campo = $request->input('campo');

        return view('portal.confirma-dados', [
            'nome' => $nome, 
            'cpf' => $cpf,
            'fone' => $fone,
            'cidade' => $cidade,
            'campo' => $campo
        ]);
    }
}
