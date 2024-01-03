<?php

namespace App\Http\Controllers;

use App\Models\Fornecedor;
use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index()
    {
        return view('app.fornecedor.index');
    }

    public function list(Request $request)
    {
        $fornecedores = Fornecedor::where('name', 'like', '%'.$request->name.'%')
            ->where('site', 'like', '%'.$request->site.'%')
            ->where('email', 'like', '%'.$request->email.'%')
            ->where('uf', 'like', '%'.$request->uf.'%')
            ->get();
        
        return view('app.fornecedor.listar', ['fornecedores' =>  $fornecedores]);
    }

    public function suppliers()
    {
        return view('app.fornecedor.adicionar');
    }

    public function store(Request $request)
    {
        if($request->input('_token') != '') {
            $regras = [
                'name' => 'required|min:3',
                'site' => 'required',
                'email' => 'email',
                'uf' => 'required|min:2|max:2'
            ];

            $feedbacks = [
                'required' => 'O campo :attribute é obrigatório',
                'name.min' => 'O campo dever conter mais de 3 caracteres',
            ];

            $request->validate($regras, $feedbacks);

            $fornecedor = new Fornecedor();
            $fornecedor->create($request->all());
        }
        return view('app.fornecedor.adicionar');
    }

    public function edit($id)
    {
        $fornecedor = Fornecedor::where('id', $id)
            ->update([
                'name' => 'Pedro Augusto'
            ]);

        echo $fornecedor;
    }

    public function delete($id)
    {
        $fornecedor = Fornecedor::where('id', $id)
            ->delete();
            
        echo $fornecedor;
    }
}
