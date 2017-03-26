<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aluno;
use Illuminate\Support\Facades\Auth; //Fazer o controle de usuários
use App\Cidade;

class AlunoController extends Controller
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
      $alunos = Aluno::all();
      return view('alunos.index')->with('alunos', $alunos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cidades = Cidade::all();
        $alunos = Aluno::all();
        return view('alunos.create')->with('alunos', $alunos)->with('cidades', $cidades);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

      Aluno::create($request->all());
      session()->flash('info', 'Aluno cadastrado com sucesso!');
      return redirect('/alunos');

      //Session::flash('success', 'Novo evento cadastrado!');

      //return redirect()->route('registros.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $aluno = Aluno::findOrFail($id);
      return view('alunos.show')->with('aluno',$aluno);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $cidades = Cidade::all();
      $aluno = Aluno::findOrFail($id);
      return view('alunos.edit')->with('aluno',$aluno)->with('cidade',$cidades);
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
      $aluno = Aluno::find($id);

      $aluno->nome = $request->get("nome");
      $aluno->rua = $request->get("rua");
      $aluno->numero = $request->get("numero");
      $aluno->bairro = $request->get("bairro");
      $aluno->cidade_id = $request->get("cidade_id");
      $aluno->cep = $request->get("cep");
      $aluno->mail = $request->get("mail");

      $aluno->save();
      session()->flash('info', 'Aluno atualizado!');
      return redirect('/alunos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      Aluno::destroy($id);
      session()->flash('info', 'Aluno excluído!');
      return redirect('/alunos');
    }
}
