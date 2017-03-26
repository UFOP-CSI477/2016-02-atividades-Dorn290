@extends('layout.master')

@section('conteudo')

<title>Sistema Acadêmico</title>
<h1>Dados dos Alunos</h1>

<a href="/alunos/create" class="btn btn-primary">Inserir</a>

<table class="table table-striped">
  <thead>
    <tr>
      <th>#</th>
      <th>Nome Aluno</th>
      <th>Editar?</th>
    </tr>
  </thead>

  @foreach ($alunos as $a)
  <tr>
    <td>{{ $a->id}}</td>
    <td><a href="/alunos/{{$a->id}}">{{ $a->nome}}</a><br></td>
    <td> <a class="btn btn-primary fa fa-edit" href="/alunos/{{ $a->id }}/edit">  Editar</a> </td>
  </tr>
  @endforeach
</table>
@stop
