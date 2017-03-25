@extends('layout.master')
@section('conteudo')
<title>PetShop</title>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Carrinho</div>
                <div class="panel-body">
                    <table class="table">
                      <tr>
                        <th>Produto</th>
                        <th>Preço</th>
                        <th>Quantidade</th>
                      </tr>

                      <?php
                          $carrinho = Session::pull('compra');
                          if(isset($carrinho)) {
                              $j = 1;
                              $valor_total = 0;
                              foreach ($carrinho as &$compras) {
                                  $i = 1;
                                  foreach ($compras as &$c) {
                                      if($i == 1) $users_id = $c;
                                      else if($i == 2) $produtos_id = $c;
                                      else if($i == 3) $imagem = $c;
                                      else if($i == 4) $preco = $c;
                                      else if($i == 5) { $quantidade = $c; $valor_total += $preco * $quantidade; }
                                      $i++;
                                  }
                                  $j++;
                                  Session::push('compra', [
                                      'users_id' => $users_id,
                                      'produtos_id' => $produtos_id,
                                      'imagem' => $imagem,
                                      'preco' => $preco,
                                      'quantidade' => $quantidade
                                  ]);
                        ?>
                                  <tr>
                                      <td><a href="/produtos/{{ $produtos_id }}"><img src="{{URL::asset($imagem)}}" width="80" height="80"></a></td>
                                      <td>R$ {{ $preco }}</td>
                                      <td>{{ $quantidade }}</td>
                                  </tr>
                        <?php
                              }
                          }
                        ?>
                        @if(isset($carrinho))
                            <tr>
                                <td><b>Valor Total:</b></td>
                                <td>R$ {{ $valor_total }}</td>
                                <td></td>
                            </tr>
                        @endif
                    </table>
                    @if(isset($carrinho))
                        <div class="col-md-3 col-md-offset-3">
                            <form class="form-horizontal" role="form" method="POST" action="{{ route('compras.store') }}">
                                <input type="submit" value="Comprar" class="btn btn-success">
                                <input type="hidden" name="users_id" value="{{ Auth::id() }}">
                                <input type="hidden" name="_token" value="{{ Session::token() }}">
                            </form>
                        </div>
                        <div class="col-md-2">
                            <form class="form-horizontal" role="form" method="POST" action="/carrinho/0">
                                {{ method_field('DELETE') }}
                                {{ csrf_field() }}
                                <button type="submit" class="btn btn-primary fa fa-eraser" href="/produtos"> Limpar </button>
                            </form>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
