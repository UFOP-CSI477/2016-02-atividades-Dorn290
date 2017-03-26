<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Turma;
use App\Disciplina;
use Illuminate\Support\Facades\Auth; //Fazer o controle de usuários

class TurmaController extends Controller
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
      $turmas = Turma::all();
      return view('turmas.index')->with('turmas', $turmas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $turmas = Turma::all();
      $disciplinas = Disciplina::orderby('nome','desc')->get();
      return view('turmas.create')->with('turmas', $turmas)->with('disciplinas', $disciplinas);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      Turma::create($request->all());
      session()->flash('info', 'Turma cadastrada com sucesso!');
      return redirect('/turmas');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $turma = Turma::findOrFail($id);
      return view('turmas.show')->with('turma',$turma);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $turma = Turma::findOrFail($id);
      $disciplinas = Disciplina::orderby('nome','desc')->get();
      return view('turmas.edit')->with('turma',$turma)->with('disciplinas', $disciplinas);
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
      $turma = Turma::find($id);

      $turma->nome = $request->get("nome");
      $turma->disciplina_id = $request->get("disciplina_id");

      $turma->save();
      session()->flash('info', 'Turma atualizada!');
      return redirect('/turmas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      Turma::destroy($id);
      session()->flash('info', 'Turma excluída!');
      return redirect('/turmas');
    }
}
