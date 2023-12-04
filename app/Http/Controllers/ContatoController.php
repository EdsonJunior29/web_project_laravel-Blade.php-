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
        //  Array assosiativo
       // return view('site.teste',['p1' => $p1, 'p2' => $p2 ]);

        // função compact
        //return view('site.teste',compact('p1', 'p2'));

        // função with
        return view('site.teste')
            ->with('p1', $p1)
            ->with('p2', $p2);
    }
}
