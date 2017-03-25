@extends('layout.master')
@section('conteudo')
<title>PetShop</title>



<table class="table">
  <tr>
    <th>ID Compra</th>
    <th>ID Usuário</th>
    <th>ID Produto</th>
    <th>Quantidade</th>
    <th>Data</th>
  </tr>
  @foreach ($compras as $c)
    <tr>
      <td>{{ $c->id }}</p>
      <td><a href="/users/{{ $c->users_id }}">{{ $c->users_id }}</a></td>
      <td><a href="/produtos/{{ $c->produtos_id }}">{{ $c->produtos_id }}</a></td>
      <td>{{ $c->quantidade }}</td>
      <td>{{ $c->data }}</td>
    </tr>
  @endforeach
</table>
@stop
