<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Filme;

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
    		(object)['nome' => 'Velozes e Furiosos', 'genero' => 'Ação'],
            (object)['nome' => 'Velozes e Furiosos', 'genero' => 'Aventura'],
            (object)['nome' => 'Velozes e Furiosos', 'genero' => 'Ação']
    	];

    	//dd($filmes);
        return view('filmes.index', compact('filmes'));
    }
    public function add()
    {
        return view('filmes.form');
    }
    public function store(Request $request)
    {
        Filme::create($request->all());
        return redirect('filmes');
    }
}