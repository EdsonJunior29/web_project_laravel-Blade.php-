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
            ],
            1 => [
                'name' => 'Computador',
                'compraStatus' => 'R',
                'DDD' => '11'
            ],
            2 => [
                'name' => 'Mouse',
                'compraStatus' => 'A',
                'DDD' => '31'
            ]
        ];

        $alunos = [];
        return view('app.fornecedor.index',
             compact(
                'clientes',
                'cliente2',
                'fornecedores',
                'material',
                'alunos'
            ));
    }
}
