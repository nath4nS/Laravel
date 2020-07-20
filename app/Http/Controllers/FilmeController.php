<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FilmeController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    	$filmes = [
    		(object)['nome' => 'Velozes e Furiosos', 'Genero' => 'Ação']
    	];

    	//dd($filmes);
        return view('filmes.index', compact('filmes'));
    }
}