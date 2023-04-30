<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Inscrito;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InscricoesController extends Controller
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
    
    public function index(Request $request)
    {
        $data = Inscrito::orderBy('id','ASC')->paginate(5);
        return view('admin.inscricoes.index',compact('data'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('admin.inscricoes.create');
    }

    public function store(Request $request)
    {    
        $input = $request->all();
    
        $inscricao = Inscrito::create($input);

        if ($inscricao instanceof Inscrito) {
            toastr()->success('Inscrição realiazada com sucesso!');

            return redirect()->route('inscricoes.index');
        }

        toastr()->error('Ops! tente novamente');

        return back();
    }

    public function show($id)
    {
        $data = Inscrito::find($id);
        return view('admin.inscricoes.show',compact('data'));
    }

    public function edit($id)
    {
        $data = Inscrito::find($id);
    
        return view('admin.inscricoes.edit',compact('data'));
    }

    public function update(Request $request, $id)
    {          
        $input = $request->all();
        $inscricao = Inscrito::find($id);
        $inscricao->update($input);
           
        if ($inscricao instanceof Inscrito) {
            toastr()->success('A Inscrição foi alterada com sucesso!');

            return redirect()->route('inscricoes.index');
        }

        toastr()->error('Ops! erro ao alterar a inscrição');

        return back();
    }

    public function destroy($id)
    {
        $inscricao = Inscrito::find($id);               
        $inscricao->delete();

        if ($inscricao instanceof Inscrito) {
            toastr()->error('A inscrição foi deletada com sucesso!');
            return redirect()->route('inscricoes.index');
        }else{
            toastr()->error('Ops! erro ao deletar a inscrição');
            return back();
        }
    }

    public function relatorioInscricaoPaga()
    {
                
        $gerals = Inscrito::select('campo', DB::raw('SUM(qntde) as total'))
            ->where('status_pagamento', 1)
            ->whereNull('deleted_at')
            ->groupBy('campo')
            ->orderByRaw('campo ASC')
            ->get();
        
        $inscricoesCount = Inscrito::where('status_pagamento', 1)->whereNull('deleted_at')->sum('qntde');

        return \PDF::loadView('admin.inscricoes.reports.pago', compact('gerals','inscricoesCount'))
                    // Se quiser que fique no formato a4 retrato: 
                        ->setPaper('A4', 'portrait')
                        ->stream('ListaIrmasGeral.pdf');
                // ->download('ListaIrmas.pdf');
        
    }

    public function relatorioInscricaoAPagar()
    {
                
        $gerals = Inscrito::select('campo', DB::raw('SUM(qntde) as total'))
            ->where('status_pagamento', 0)
            ->whereNull('deleted_at')
            ->groupBy('campo')
            ->orderByRaw('campo ASC')
            ->get();
        
        $inscricoesCount = Inscrito::where('status_pagamento', 0)->whereNull('deleted_at')->sum('qntde');


        return \PDF::loadView('admin.inscricoes.reports.apagar', compact('gerals','inscricoesCount'))
                    // Se quiser que fique no formato a4 retrato: 
                        ->setPaper('A4', 'portrait')
                        ->stream('ListaIrmasGeral.pdf');
                // ->download('ListaIrmas.pdf');
        
    }

    public function pagamento(Inscrito $inscrito, Request $request, $id)
    {
        // Obtém o registro de conta com o ID especificado ou lança uma exceção
        $inscricao = $inscrito->findOrFail($id);

        // Atualiza o status da conta para "Inativo"
        $inscricao->status_pagamento = '1';
        $inscricao->save();

        // Exibe uma mensagem de sucesso ou erro dependendo do resultado da operação de atualização
        if ($inscricao->wasChanged()) {
            toastr()->success('Pagamento efetuado!');
        } else {
            toastr()->error('Erro ao efetuar o pagamento');
        }

        // Redireciona o usuário de volta para a página anterior
        return back();
    }

    public function export(Request $request)
    {
    //    return Excel::download(new InscricoesExport($request), 'pagar.xlsx');
    } 
}
