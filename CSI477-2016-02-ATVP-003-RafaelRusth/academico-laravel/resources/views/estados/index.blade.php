@extends('layout.master')

@section('conteudo')

<title>Sistema Acadêmico</title>
<h1>Dados dos Estados</h1>

<a href="/estados/create" class="btn btn-primary">Inserir</a>

<table class="table table-striped">
  <thead>
    <tr>
      <th>#</th>
      <th>Estado</th>
      <th>Sigla</th>
      <th>Editar?</th>
    </tr>
  </thead>

  @foreach ($estados as $e)
  <tr>
    <td>{{ $e->id}}</td>
    <td><a href="/estados/{{$e->id}}">{{ $e->nome}}</a><br></td>
    <td>{{ $e->sigla}}</td>
    <td> <a class="btn btn-primary fa fa-edit" href="/estados/{{ $e->id }}/edit">  Editar</a> </td>
  </tr>
  @endforeach
</table>
@stop
