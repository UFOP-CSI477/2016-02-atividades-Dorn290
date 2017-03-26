@extends('layout.master')
@section('conteudo')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Editar Disciplina</div>
                <div class="panel-body">

                    <form class="form-horizontal" role="form" method="POST" enctype="multipart/form-data" action="/disciplinas/{{$disciplina->id }}">
                      {{ method_field('PATCH') }}
                      {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('nome') ? ' has-error' : '' }}">
                            <label for="nome" class="col-md-4 control-label">Nome</label>
                            <div class="col-md-6">
                                <input id="nome" type="text" class="form-control" name="nome" value="{{ $disciplina->nome }}" required autofocus>
                                @if ($errors->has('nome'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nome') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('codigo') ? ' has-error' : '' }}">
                            <label for="codigo" class="col-md-4 control-label">Código</label>
                            <div class="col-md-6">
                                <input id="codigo" type="text" class="form-control" name="codigo" value="{{ $disciplina->codigo }}" required autofocus>
                                @if ($errors->has('codigo'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('codigo') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('carga') ? ' has-error' : '' }}">
                            <label for="carga" class="col-md-4 control-label">Carga</label>
                            <div class="col-md-6">
                                <input id="carga" type="text" class="form-control" name="carga" value="{{ $disciplina->carga }}" required autofocus>
                                @if ($errors->has('carga'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('carga') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">Salvar</button>
                                <input type="button" class="btn btn-primary" href="/disciplinas" value="Voltar" onClick="JavaScript: window.history.back();">
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
