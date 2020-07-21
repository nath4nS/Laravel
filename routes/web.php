<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/usuario', 'UsuarioController@index')->name('usuario');
Route::get('/filmes', 'FilmeController@index')->name('filmes');
Route::get('filmes/add', 'FilmeController@add')->name('filmes.add');
Route::post('filmes/store', 'FilmeController@store')->name('filmes.store');
