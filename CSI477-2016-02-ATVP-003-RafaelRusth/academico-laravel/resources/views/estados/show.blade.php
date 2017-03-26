@extends('layout.master')

@section('conteudo')

<title>Sistema Acadêmico</title>

<h1>Dados do Estado</h1>

<form method="post" action="/estados/{{ $estados->id }}">

  {{ method_field('DELETE') }}
  {{ csrf_field() }}

  ID: {{ $estados->id }} <br>
  Estado: {{ $estados->nome }} <br>
  Sigla: {{ $estados->sigla }} <br>

  <a href="/estados/{{ $estados->id }}/edit" class="btn btn-primary">Editar</a>

  <input type="submit" class="btn btn-danger" value="Excluir"/>

  <a href="/estados" class="btn btn-primary">Voltar</a>

</form>

@stop
