<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index()
    {
        $fornecedores = ['Fornecedor 1'];
        $clientes = 10;
        return view('app.fornecedor.index',
             compact(
                'clientes',
                'fornecedores'
            ));
    }
}
