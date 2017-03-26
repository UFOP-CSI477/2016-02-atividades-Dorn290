@extends('layout.master')

@section('conteudo')

<title>Sistema Acadêmico</title>
<h1>Dados das Cidades</h1>

<a href="/cidades/create" class="btn btn-primary">Inserir</a>

<table class="table table-striped">
  <thead>
    <tr>
      <th>#</th>
      <th>Cidade</th>
      <th>Estado</th>
      <th>Editar?</th>
    </tr>
  </thead>

  @foreach ($cidades as $c)
  <tr>
    <td>{{ $c->id}}</td>
    <td><a href="/cidades/{{$c->id}}">{{ $c->nome}}</a><br></td>
    <td>{{ $c->estado->nome}}</td>
    <td> <a class="btn btn-primary fa fa-edit" href="/cidades/{{ $c->id }}/edit">  Editar</a> </td>
  </tr>
  @endforeach
</table>
@stop
