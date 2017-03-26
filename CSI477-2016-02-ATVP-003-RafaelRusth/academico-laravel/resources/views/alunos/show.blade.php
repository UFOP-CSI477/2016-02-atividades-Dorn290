@extends('layout.master')

@section('conteudo')

<title>Sistema Acadêmico</title>

<h1>Dados do(a) Aluno(a)</h1>

<form method="post" action="/alunos/{{ $aluno->id }}">

  {{ method_field('DELETE') }}
  {{ csrf_field() }}

  ID: {{ $aluno->id }} <br>
  Nome: {{ $aluno->nome }} <br>
  Rua: {{ $aluno->rua }} <br>
  Número: {{ $aluno->numero }} <br>
  Bairro: {{ $aluno->bairro }} <br>
  Cidade: {{ $aluno->cidade->nome }} <br>
  CEP: {{ $aluno->cep }} <br>
  mail: {{ $aluno->mail }} <br>

  <a href="/alunos/{{ $aluno->id }}/edit" class="btn btn-primary">Editar</a>

  <input type="submit" class="btn btn-danger" value="Excluir"/>

  <a href="/alunos" class="btn btn-primary">Voltar</a>

</form>

@stop
