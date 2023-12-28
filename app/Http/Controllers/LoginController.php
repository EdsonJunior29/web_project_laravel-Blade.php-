<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('site.login');
    }

    public function store(Request $request)
    {
        $regras = [
            'email' => 'email',
            'senha' => 'required'
        ];

        $feedback = [
            'email.email' => 'O campo email é obrigatório',
            'senha.required' => 'A senha é obrigatória' 
        ];

        $request->validate($regras, $feedback);

        print_r($request->all());

        return;
    }
}
