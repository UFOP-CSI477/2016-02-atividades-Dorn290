@extends('layout.master')

@section('conteudo')

<title>Sistema Acadêmico</title>

<h1>Dados da Turma</h1>

<form method="post" action="/turmas/{{ $turma->id }}">

  {{ method_field('DELETE') }}
  {{ csrf_field() }}

  ID: {{ $turma->id }} <br>
  Nome: {{ $turma->nome }} <br>
  Disciplina: {{ $turma->disciplina->nome }} <br>

  <a href="/turmas/{{ $turma->id }}/edit" class="btn btn-primary">Editar</a>

  <input type="submit" class="btn btn-danger" value="Excluir"/>

  <a href="/turmas" class="btn btn-primary">Voltar</a>

</form>

@stop
