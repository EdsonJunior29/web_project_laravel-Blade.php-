<?php

namespace App\Http\Controllers;

class ContatoController extends Controller
{
    public function index()
    {
        var_dump($_GET);
        return view('site.contato');
    }
}
