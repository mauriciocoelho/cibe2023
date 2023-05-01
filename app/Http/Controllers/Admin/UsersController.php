<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
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
        $data = User::orderBy('id','ASC')->get();
        return view('admin.usuarios.index',compact('data'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('admin.usuarios.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|same:confirm-password'
        ]);
    
        $input = $request->all();
        $input['password'] = Hash::make($input['password']);
    
        $user = User::create($input);

        if ($user instanceof User) {
            toastr()->success('Usuário cadastrado com sucesso!');

            return redirect()->route('usuarios.index');
        }

        toastr()->error('Ops! tente novamente');

        return back();
    }

    public function show($id)
    {
        $user = User::find($id);
        return view('admin.usuarios.show',compact('user'));
    }

    public function edit($id)
    {
        $user = User::find($id);
    
        return view('admin.usuarios.edit',compact('user'));
    }

    public function update(Request $request, $id)
    {       
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'.$id,
            'password' => 'same:confirm-password'
        ]);
    
        $input = $request->all();
        if(!empty($input['password'])){ 
            $input['password'] = Hash::make($input['password']);
        }else{
            $input = Arr::except($input,array('password'));    
        }
    
        $user = User::find($id);
        $user->update($input);
        
        if ($user instanceof User) {
            toastr()->success('Usuário editado com sucesso!');

            return redirect()->route('usuarios.index');
        }

        toastr()->error('Ops! erro ao editar o usuário');

        return back();
    }

    public function destroy($id)
    {
        $users = User::find($id);               
        $users->delete();

        if ($users instanceof User) {
            toastr()->error('O Usuário foi deletado com sucesso!');
            return redirect()->route('usuarios.index');
        }else{
            toastr()->error('Ops! erro ao deletar o usuário');
            return back();
        }
    }
}
