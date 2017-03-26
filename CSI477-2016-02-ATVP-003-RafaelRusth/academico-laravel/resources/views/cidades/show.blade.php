@extends('layout.master')

@section('conteudo')

<title>Sistema Acadêmico</title>

<h1>Dados da Cidade</h1>

<form method="post" action="/cidades/{{ $cidade->id }}">

  {{ method_field('DELETE') }}
  {{ csrf_field() }}

  ID: {{ $cidade->id }} <br>
  Nome: {{ $cidade->nome }} <br>
  Cidade: {{ $cidade->estado->nome }} <br>

  <a href="/cidades/{{ $cidade->id }}/edit" class="btn btn-primary">Editar</a>

  <input type="submit" class="btn btn-danger" value="Excluir"/>

  <a href="/cidades" class="btn btn-primary">Voltar</a>

</form>

@stop
