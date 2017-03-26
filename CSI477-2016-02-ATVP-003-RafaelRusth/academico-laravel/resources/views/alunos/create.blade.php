@extends('layout.master')
@section('conteudo')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Criar Aluno</div>
                <div class="panel-body">

                    <form class="form-horizontal" role="form" method="POST" enctype="multipart/form-data" action="/alunos">
                      {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('nome') ? ' has-error' : '' }}">
                            <label for="nome" class="col-md-4 control-label">Nome</label>
                            <div class="col-md-6">
                                <input id="nome" type="text" class="form-control" name="nome" value="" required autofocus>
                                @if ($errors->has('nome'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nome') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('rua') ? ' has-error' : '' }}">
                            <label for="nome" class="col-md-4 control-label">Rua</label>
                            <div class="col-md-6">
                                <input id="rua" type="text" class="form-control" name="rua" value="" required autofocus>
                                @if ($errors->has('rua'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('rua') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('numero') ? ' has-error' : '' }}">
                            <label for="nome" class="col-md-4 control-label">Numero</label>
                            <div class="col-md-6">
                                <input id="numero" type="text" class="form-control" name="numero" value="" required autofocus>
                                @if ($errors->has('numero'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('numero') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('bairro') ? ' has-error' : '' }}">
                            <label for="nome" class="col-md-4 control-label">Bairro</label>
                            <div class="col-md-6">
                                <input id="bairro" type="text" class="form-control" name="bairro" value="" required autofocus>
                                @if ($errors->has('bairro'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('bairro') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('cidade') ? ' has-error' : '' }}">
                            <label for="nome" class="col-md-4 control-label">Cidade</label>
                            <div class="col-md-6">
                              <select class="form-control" name="cidade_id">
                                  @foreach($cidades as $c)
                                      <option value='{{ $c->id }}'>{{ $c->nome }}</option>
                                  @endforeach
                              </select>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('cep') ? ' has-error' : '' }}">
                            <label for="nome" class="col-md-4 control-label">CEP</label>
                            <div class="col-md-6">
                                <input id="cep" type="text" class="form-control" name="cep" value="" required autofocus>
                                @if ($errors->has('cep'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('cep') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('mail') ? ' has-error' : '' }}">
                            <label for="nome" class="col-md-4 control-label">e-Mail</label>
                            <div class="col-md-6">
                                <input id="mail" type="text" class="form-control" name="mail" value="" required autofocus>
                                @if ($errors->has('mail'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('mail') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>




                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">Salvar</button>
                                <input type="button" class="btn btn-primary" href="/alunos" value="Voltar" onClick="JavaScript: window.history.back();">
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
