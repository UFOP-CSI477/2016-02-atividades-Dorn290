<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Estado;
use Illuminate\Support\Facades\Auth; //Fazer o controle de usuários

class EstadoController extends Controller
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
        $estados = Estado::all();
        return view('estados.index')->with('estados',$estados);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $estados = Estado::all();
      return view('estados.create')->with('estados', $estados);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      Estado::create($request->all());
      session()->flash('info', 'Estado inserido com sucesso!');
      return redirect('/estados');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $estados = Estado::find($id);
      return view('estados.show')->with('estados',$estados);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $estados = Estado::find($id);
      return view('estados.edit')->with('estados',$estados);
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
      $estados = Estado::find($id);

      $estados->nome = $request->nome;
      $estados->sigla = $request->sigla;

      $estados->save();

      return redirect('/estados');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      Estado::destroy($id);
      return redirect('/estados');
    }
}
