@extends('layout.master')
@section('conteudo')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Editar Estado</div>
                <div class="panel-body">

                    <form class="form-horizontal" role="form" method="POST" enctype="multipart/form-data" action="/estados/{{$estados->id }}">
                      {{ method_field('PATCH') }}
                      {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('nome') ? ' has-error' : '' }}">
                            <label for="nome" class="col-md-4 control-label">Nome</label>
                            <div class="col-md-6">
                                <input id="nome" type="text" class="form-control" name="nome" value="{{ $estados->nome }}" required autofocus>
                                @if ($errors->has('nome'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nome') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('sigla') ? ' has-error' : '' }}">
                            <label for="sigla" class="col-md-4 control-label">Sigla</label>
                            <div class="col-md-6">
                                <input id="sigla" type="text" class="form-control" name="sigla" value="{{ $estados->sigla }}" required autofocus>
                                @if ($errors->has('sigla'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('sigla') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>



                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">Salvar</button>
                                <input type="button" class="btn btn-primary" href="/estados" value="Voltar" onClick="JavaScript: window.history.back();">
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
