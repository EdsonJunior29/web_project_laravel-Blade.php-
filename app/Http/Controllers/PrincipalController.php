<?php

namespace App\Http\Controllers;

class PrincipalController extends Controller
{
    public function index()
    {
        var_dump($_POST);
        return view('site.principal');
    }
}
