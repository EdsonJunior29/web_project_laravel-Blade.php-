<?php

namespace App\Http\Controllers;

class ContatoController extends Controller
{
    public function index()
    {
        return view('site.contato');
    }

    public function teste(int $p1, int $p2)
    {
        return $p1 + $p2;
    }
}
