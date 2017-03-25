<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/* Route::get('alunos', function () {
    $alunos = DB::table('alunos')->get();
    return view('alunos.index')->with('alunos', $alunos);
}); */

/* Route::get('alunos', function () {
    $alunos = Aluno::all();
    return view('alunos.index')->with('alunos', $alunos);
});

 Route::get('/alunos/{aluno}', function ($id) {
    $aluno = DB::table('alunos')->find($id);
    return view('alunos.show')->with('alunos', $aluno);
}); */

  Route::get('', function () { return redirect('produtos'); });
  Route::resource('/produtos','ProdutoController');
  Route::resource('/users','UserController');
  Route::resource('/compras','CompraController');
  Route::resource('/carrinho','CarrinhoController');

  Auth::routes();


/* Route::get('cidades', function () {
    $cidades = Cidade::all();
    return view('cidades.index')->with('cidades', $cidades);
});

Route::get('/cidades/{cidade}', function ($id) {
    $cidade = DB::table('cidades')->find($id);
    return view('cidades.show')->with('cidades', $cidade);
});

Route::get('estados', function () {
    $estados = Estado::all();
    return view('estados.index')->with('estados', $estados);
});

Route::get('/estados/{Estado}', function ($id) {
    $estado = DB::table('estados')->find($id);
    return view('estados.show')->with('estados', $estado);
}); */

//Route::get('/home', 'HomeController@index');
