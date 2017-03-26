@extends('layout.master')

@section('conteudo')

<title>Sistema Acadêmico</title>
<h1>Dados das Disciplinas</h1>

<a href="/disciplinas/create" class="btn btn-primary">Inserir</a>

<table class="table table-striped">
  <thead>
    <tr>
      <th>#</th>
      <th>Nome</th>
      <th>Código</th>
      <th>Carga</th>
      <th>Editar?</th>
    </tr>
  </thead>

  @foreach ($disciplinas as $d)
  <tr>
    <td>{{ $d->id}}</td>
    <td><a href="/disciplinas/{{$d->id}}">{{ $d->nome}}</a><br></td>
    <td>{{ $d->codigo}}</td>
    <td>{{ $d->carga}}</td>
    <td> <a class="btn btn-primary fa fa-edit" href="/disciplinas/{{ $d->id }}/edit">  Editar</a> </td>
  </tr>
  @endforeach
</table>
@stop
