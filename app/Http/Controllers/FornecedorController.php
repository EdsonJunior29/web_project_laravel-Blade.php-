<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index()
    {
        $fornecedores = ['Fornecedor 1'];
        $clientes = 10;
        $material = [
            0 => [
                'name' => 'Caderno',
                'compraStatus' => 'A'
                ]
        ];
        return view('app.fornecedor.index',
             compact(
                'clientes',
                'fornecedores',
                'material'
            ));
    }
}
