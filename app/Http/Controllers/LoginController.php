<?php

namespace App\Http\Controllers;

use App\Models\User;
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

        $email = $request->get('email');
        $password = $request->get('senha');

        $user = new User();

        $validateUser = $user->where('email', $email)->where('password', $password)->get()->first();

        if(isset($validateUser->name) && isset($validateUser->email)){
            return view('site.principal');
        }
        
        return view('site.login');
    }
}
