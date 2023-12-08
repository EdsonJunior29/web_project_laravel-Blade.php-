<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index()
    {
        $fornecedores = ['Fornecedor 1'];
        $clientes = 10;
        $cliente2 = 0;
        $material = [
            0 => [
                'name' => 'Caderno',
                'compraStatus' => 'A',
                'DDD' => '21'
                ]
        ];
        return view('app.fornecedor.index',
             compact(
                'clientes',
                'cliente2',
                'fornecedores',
                'material'
            ));
    }
}
