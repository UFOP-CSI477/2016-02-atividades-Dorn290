<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Cadastro</title>

    <link rel="stylesheet" href="css/bootstrap.css" media="screen">
    <script src="js/jquery-3.1.1.js"></script>
    <script src="js/funcoes.js"></script>
    <script src="js/jquery.validate.js"></script>

  </head>
  <body>

      <form name="cadastro" class="form-horizontal" method="post" action="Lista.php" id="acesso" role="form"> <!-- estrutura de form, name é o nome do form, method get significa informações explícitas na url, method post informações implícitas. Action define onde vai processar as informações -->

        <div class="form-group">
          <div class="row text-center">
            <div class="col-md-7 col-md-offset-2">
              <ul class="nav nav-tabs">
                <li role="sistema"><a href="Menu.php">Menu</a></li>
                <li role="sistema" class="active"><a href="#">Cadastro</a></li>
              </ul>
            </div>
          </div>
        </div>

        <div class="form-group">
          <div class="row">
            <div class="col-md-6 col-md-offset-4"><h1>Cadastro de Aluno(a)</h1><br /></div>
          </div>
        </div>


        <div class="form-group has-feedback">
          <label for="nome" class="control-label col-sm-4">Nome</label>
          <div class="col-sm-4">
            <input type="text" class="form-control" name="nome" value="" placeholder="Nome">
          </div>
        </div>

        <div class="form-group">
          <label for="rua" class="control-label col-sm-4">Rua</label>
          <div class="col-sm-4">
            <input type="text" class="form-control" name="rua" value="" placeholder="Rua">
          </div>
        </div>

        <div class="form-group">
          <label for="numero" class="control-label col-sm-4">Número</label>
          <div class="col-sm-4">
            <input type="text" class="form-control" name="numero" value="" placeholder="Número">
          </div>
        </div>

        <div class="form-group">
          <label for="complemento" class="control-label col-sm-4">Complemento</label>
          <div class="col-sm-4">
            <input type="text" class="form-control" name="complemento" value="" placeholder="Complemento">
          </div>
        </div>

        <div class="form-group">
          <label for="cep" class="control-label col-sm-4">CEP</label>
          <div class="col-sm-4">
            <input type="text" class="form-control" name="cep" value="" placeholder="CEP">
          </div>
        </div>
          <!--input type="hidden" name="id" value="12345" />  Input que não é exibida para o usuário, mas leva informações mesmo assim para o action  -->

          <div class="form-group">
            <label for="matricula" class="control-label col-sm-4">Matrícula</label>
            <div class="col-sm-4">
              <input type="text" class="form-control" name="matricula" value="" placeholder="Matrícula">
            </div>
          </div>


          <div class="form-group">
            <label for="cidade" class="control-label col-sm-4">Cidade:</label>
            <div class="col-sm-4">
              <select class="form-control" id="cidade">
                <option value="1">João Monlevade</option>
                <option value="2">Itabira</option>
                <option value="3">Itaúna</option>
                <option value="4">Belo Horizonte</option>
                <option value="5">Alvinópolis</option>
              </select>
            </div>
          </div>


          <div class="form-group">
            <label for="estado" class="control-label col-sm-4">Estado:</label>
            <div class="col-sm-4">
              <select class="form-control" id="estado">
                <option value="1">MG</option>
                <option value="2">RJ</option>
                <option value="3">SP</option>
                <option value="4">ES</option>
              </select>
            </div>
          </div>


          <div class="form-group">
            <label for="telefone" class="control-label col-sm-4">Telefone</label>
            <div class="col-sm-4">
              <input type="text" class="form-control" name="telefone" value="" placeholder="Telefone">
            </div>
          </div>

          <div class="form-group">
            <label for="celular" class="control-label col-sm-4">Celular</label>
            <div class="col-sm-4">
              <input type="text" class="form-control" name="celular" value="" placeholder="Celular">
            </div>
          </div>


          <div class="form-group">
            <label for="email" class="control-label col-sm-4">e-Mail</label>
            <div class="col-sm-4">
              <input type="text" class="form-control" name="email" value="" placeholder="E-mail">
            </div>
          </div>

          <div class="form-group">
            <label for="sexo" class="control-label col-sm-4">Sexo</label>
            <div class="col-sm-4">
              <label class="radio-inline"><input type="radio" name="optsexo" value="m">Masculino</label>
              <label class="radio-inline"><input type="radio" name="optsexo" value="f">Feminino</label>
            </div>
          </div>


          <div class="form-group">
            <label for="cpf" class="control-label col-sm-4">CPF</label>
            <div class="col-sm-4">
              <input type="text" class="form-control" name="cpf" value="" placeholder="CPF">
            </div>
          </div>


          <div class="form-group">
            <label for="area" class="control-label col-sm-4">Área</label>
            <div class="col-sm-4">
              <label class="checkbox-inline"><input type="checkbox" value="bd" name="area" id="bd">BD</label>
              <label class="checkbox-inline"><input type="checkbox" value="redes" name="area" id="redes">Redes</label>
              <label class="checkbox-inline"><input type="checkbox" value="es" name="area" id="es">ES</label>
              <label class="checkbox-inline"><input type="checkbox" value="web" name="area" id="web">WEB</label>
            </div>
          </div>

          <div class="form-group">
            <label for="usuario" class="control-label col-sm-4">Usuário</label>
            <div class="col-sm-4">
              <input type="text" class="form-control" name="usuario" value="" placeholder="Usuário">
            </div>
          </div>

          <div class="form-group">
            <label for="pwd" class="control-label col-sm-4">Senha:</label>
            <div class="col-sm-4">
              <input type="password" class="form-control" id="pwd" name="senha" placeholder="Senha">
            </div>
          </div>

          <div class="form-group">
            <label for="pwd" class="control-label col-sm-4">Confirma Senha:</label>
            <div class="col-sm-4">
              <input type="password" class="form-control" id="pwd" name="rsenha1" placeholder="Repetir Senha">
            </div>
          </div>

          <div class="form-group">
            <div class="col-sm-8 text-right">
              <input type="submit" name="btnCadastrar" class="btn btn-default" value="Cadastrar" />
              <input type="reset" name="limpar" class="btn btn-default" value="Limpar" />
            </div>
          </div>
      </form>

      <form name="voltar" class="form-horizontal" method="post" action="Menu.php">
          <div class="form-group">
            <div class="col-sm-8 text-right">
              <input type="submit" name="btnVoltar" class="btn btn-default" value="Voltar" />
            </div>
          </div>
      </form>

  </body>
</html>
