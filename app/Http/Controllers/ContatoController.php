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
            'name.required' => 'O camp nome não pode ser vazio.',
            'name.min' => 'O campo nome não pode conter menos de 3 caracteres.',
            'name.min' => 'O campo nome não pode conter mais de 50 caracteres.',

            'phone.required' => 'O campo phone não pode ser vazio.',

            //Podemos realizar isso em todos os campos do método validate acima.....
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
