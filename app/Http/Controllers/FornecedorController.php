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

    public function list()
    {
        return view('app.fornecedor.listar');
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
}
