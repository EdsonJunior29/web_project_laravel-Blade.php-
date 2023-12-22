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
