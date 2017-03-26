@extends('layout.master')

@section('conteudo')

<title>Sistema Acadêmico</title>
<h1>Dados das Turmas</h1>

<a href="/turmas/create" class="btn btn-primary">Inserir</a>

<table class="table table-striped">
  <thead>
    <tr>
      <th>#</th>
      <th>Nome</th>
      <th>Disciplina</th>
      <th>Editar?</th>
    </tr>
  </thead>

  @foreach ($turmas as $t)
  <tr>
    <td>{{ $t->id}}</td>
    <td><a href="/turmas/{{$t->id}}">{{ $t->nome}}</a><br></td>
    <td>{{ $t->disciplina->nome}}</td>
    <td> <a class="btn btn-primary fa fa-edit" href="/turmas/{{ $t->id }}/edit">  Editar</a> </td>
  </tr>
  @endforeach
</table>
@stop
