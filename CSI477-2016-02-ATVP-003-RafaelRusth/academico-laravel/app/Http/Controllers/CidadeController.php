<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Estado;
use App\Cidade;
use Illuminate\Support\Facades\Auth; //Fazer o controle de usuários

class CidadeController extends Controller
{
  public function __construct(){
    $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $cidades = Cidade::all();
      return view('cidades.index')->with('cidades', $cidades);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$estados = Estado::all();
        $cidades = Cidade::all();
        $estados = Estado::orderby('nome','desc')->get();
        return view('cidades.create')->with('cidades', $cidades)->with('estados', $estados);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      Cidade::create($request->all());
      session()->flash('info', 'Cidade cadastrada com sucesso!');
      return redirect('/cidades');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $cidade = Cidade::findOrFail($id);
      return view('cidades.show')->with('cidade',$cidade);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $cidade = Cidade::findOrFail($id);
      $estados = Estado::orderby('nome','desc')->get();
      return view('cidades.edit')->with('cidade',$cidade)->with('estados', $estados);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $cidade = Cidade::find($id);

      $cidade->nome = $request->get("nome");
      $cidade->estado_id = $request->get("estado_id");

      $cidade->save();
      session()->flash('info', 'Cidade atualizado!');
      return redirect('/cidades');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      Cidade::destroy($id);
      session()->flash('info', 'Cidade excluída!');
      return redirect('/cidades');
    }
}
