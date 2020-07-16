<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    	$usuarios = [
    		(object)['nome' => 'Nathan', 'sexo' => 'Masculino'],
    		(object)['nome' => 'Paulo', 'sexo' => 'Masculino'],
    		(object)['nome' => 'Antonio', 'sexo' => 'Masculino']
    	];

    	//dd($usuarios);
        return view('usuario.index', compact('usuarios'));
    }
}
