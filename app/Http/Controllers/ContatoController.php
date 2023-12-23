<?php

namespace App\Http\Controllers;

use App\Exceptions\ContatoException;
use App\Services\ContatoService;
use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function index()
    { 
        return view('site.contato');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3|max:50',
            'phone' => 'required|min:9|max:30',
            'email' => 'required|min:3|max:50|email',
            'contact' => 'required|integer',
            'message' => 'required|string'
        ],
        [
            'name.min' => 'O campo nome não pode conter menos de 3 caracteres.',
            'name.min' => 'O campo nome não pode conter mais de 50 caracteres.',

            //Podemos realizar isso em todos os campos do método validate acima.....

            //inclindo apenas a validação e utilizando em todos os campos
            'required' => 'O campo não pode ser vazio.',
        ]
    );

        $contact = new ContatoService();

        try {
            $contact->saveContact(
                $request->name,
                $request->phone,
                $request->email,
                $request->contact,
                $request->message,
            );
        } catch (ContatoException $ex) {
            dd($ex->getMessage());
        }
       
        return view('site.contato');
    }
}
